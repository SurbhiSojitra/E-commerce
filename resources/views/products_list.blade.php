@extends('layouts.app')
@section('title', 'product_list')
@section('content')
<div class="row">
    <div class="col-md-3 mt-3 px-4">
        <div class="filters px-4 d-flex justify-content-between align-items-center">
            <h4>Filters</h4>
            <h6 class="text-danger">Clear All</h6>
        </div>
    </div>

    <div class="col-md-9">
        <section class="product-list">
            <div class="container my-5">
                <h2 class="mb-4">
                    {{ $category->name }} →
                    {{ $subcategory->name }}
                    @isset($tag)
                    → {{ ucfirst($tag->name) }}
                    @endisset
                </h2>
                <div class="row text-center mt-4">
                    @forelse($products as $product)
                    <div class="col-md-3 mb-4">
                        <div class="card category-card">
                            <img
                                src="{{ asset('storage/'.$product->image) }}"
                                class="card-img-top">

                            <div class="card-body">
                                <h5>{{ $product->name }}</h5>
                                <p>₹ {{ $product->price }}</p>

                                @php
                                $cart = session('cart', []);
                                $cartQty = $cart[$product->id]['qty'] ?? 0;
                                @endphp

                                @if ($product->qty <= 0)
                                    <button class="btn btn-secondary w-100" disabled>
                                    Out of Stock
                                    </button>

                                    @elseif ($cartQty >= $product->qty)
                                    <button class="btn btn-danger w-100" disabled>
                                        Out of Stock
                                    </button>

                                    @else
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary w-100">
                                            Add to Cart
                                        </button>
                                    </form>
                                    @endif
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center">No products found</p>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
</div>
@endsection