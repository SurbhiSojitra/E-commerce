<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return back()->with('error', 'Cart is empty');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }

        DB::beginTransaction();

        // Create order in DB
        $order = Order::create([
            'total_amount' => $total,
            'status' => 'pending',
        ]);

        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'qty' => $item['qty'],
                'price' => $item['price'],
            ]);
        }

        // Create Razorpay Order
        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

        $razorpayOrder = $api->order->create([
            'receipt' => 'order_' . $order->id,
            'amount' => $total * 100,
            'currency' => 'INR',
        ]);

        $order->update([
            'razorpay_order_id' => $razorpayOrder['id'],
        ]);

        DB::commit();

        return view('razorpay.checkout', compact('razorpayOrder', 'order'));
    }

    public function paymentSuccess(Request $request)
    {
        $order = Order::where(
            'razorpay_order_id',
            $request->razorpay_order_id
        )->firstOrFail();

        DB::transaction(function () use ($order, $request) {

            $order->update([
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'status' => 'paid',
            ]);

            //  reduce stock
            foreach ($order->items as $item) {
                $product = Product::find($item->product_id);

                if ($product) {
                    $product->decrement('stock', $item->qty);
                }
            }
        });

        // clear cart
        session()->forget('cart');

        return view('razorpay.success', compact('order'));
    }
}
