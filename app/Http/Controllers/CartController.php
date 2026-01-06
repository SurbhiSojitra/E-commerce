<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;



class CartController extends Controller
{
    public function cart()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function add(Product $product)
    {
        $cart = session()->get('cart', []);
        $currentQty = $cart[$product->id]['qty'] ?? 0;

        if ($currentQty >= $product->qty) {
            return back()->with('error', 'Product out of stock');
        }

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty']++;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'qty' => 1
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'product added to cart');
    }

    public function update(Request $request, Product $product)
    {
        $cart = session()->get('cart');

        if ($request->qty > $product->qty) {
            return back()->with('error', 'Stock limit exceeded');
        }

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty'] = $request->qty;
            session()->put('cart', $cart);
        }
        return back();
    }

    public function remove(Product $product)
    {
        $cart = session()->get('cart');

        if (isset($cart[$product->id])) {
            unset($cart[$product->id]);
            session()->put('cart', $cart);
        }
        return back();
    }
}
