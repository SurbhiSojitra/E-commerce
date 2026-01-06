@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container mt-5 text-center">
    <h2 class="mb-3">Redirecting to Razorpay...</h2>
    <p>Please do not refresh or press back.</p>

    <button id="payBtn" class="btn btn-success d-none">
        Pay Now
    </button>
</div>

<!-- Razorpay Script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        var options = {
            "key": "{{ config('services.razorpay.key') }}",
            "amount": "{{ $razorpayOrder['amount'] }}", // in paise
            "currency": "INR",
            "name": "My E-Commerce Store",
            "description": "Order Payment",
            "order_id": "{{ $razorpayOrder['id'] }}",
            "handler": function(response) {

                fetch("{{ route('payment.success') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            razorpay_payment_id: response.razorpay_payment_id,
                            razorpay_order_id: response.razorpay_order_id,
                            razorpay_signature: response.razorpay_signature
                        })
                    })
                    .then(() => {
                        window.location.href = "{{ route('home') }}";
                    });
            },
            "prefill": {
                "name": "Customer Name",
                "email": "customer@email.com",
                "contact": "9999999999"
            },
            "theme": {
                "color": "#3399cc"
            }
        };

        var rzp = new Razorpay(options);
        rzp.open();
    });
</script>
@endsection