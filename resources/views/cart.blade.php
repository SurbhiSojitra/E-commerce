@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Shopping Cart</h2>
    @php $grandTotal = 0; @endphp
    <table class="table">
        <thead>
            <tr>
                <th>no.</th>
                <th>Product</th>
                <th>Image</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @forelse($cart as $id => $item)
            @php
            $total = $item['price']*$item['qty'];
            $grandTotal += $total;
            @endphp
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item['name']}}</td>
                <td><img src="{{ asset('storage/'.$item['image']) }}" width="60" alt=""></td>
                <td>
                    <form action="{{ route('cart.update', $id)}}" method="post">
                        @csrf
                        <input type="number" name="qty" value="{{$item['qty'] }}" min="1" max="{{ $products[$id]->stock ?? 1 }}" onchange="this.form.submit()" class="form-control w-75">
                    </form>
                </td>
                <td>{{$item['price']}}</td>
                <td>₹{{ $total }}</td>
                <td>
                    <form action="{{ route('cart.remove', $id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Cart is empty</td>
            </tr>
            @endforelse
            @if(count($cart))
            <tr>
                <th colspan="5" class="text-end">Grand Total</th>
                <th>₹{{ $grandTotal }}</th>
                <th></th>
            </tr>
            @endif
        </tbody>
    </table>

    <div class="text-end mt-4">
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <button class="btn btn-success">
                Buy Now
            </button>
        </form>
    </div>

</div>
</div>

@endsection