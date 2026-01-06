@extends('layouts.app')

@section('title', 'Payment Successful')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow text-center">
                <div class="card-body p-5">

                    <div class="mb-4">
                        <span style="font-size:60px;color:green;">✔</span>
                    </div>

                    <h2 class="text-success mb-3">
                        Payment Successful!
                    </h2>

                    <p class="mb-4">
                        Thank you for your purchase.
                        Your order has been placed successfully.
                    </p>

                    @if(isset($order))
                    <div class="text-start mb-4">
                        <p><strong>Order ID:</strong> {{ $order->id }}</p>
                        <p><strong>Payment ID:</strong> {{ $order->razorpay_payment_id }}</p>
                        <p><strong>Total Paid:</strong> ₹{{ $order->total_amount }}</p>
                        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
                    </div>
                    @endif

                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('home') }}" class="btn btn-primary">
                            Continue Shopping
                        </a>

                        <a href="{{ route('cart.index') }}" class="btn btn-outline-secondary">
                            View Cart
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection