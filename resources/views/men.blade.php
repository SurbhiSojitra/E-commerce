@extends('layouts.app')

@section('title', 'Men')

@section('content')

<section class="women-category">
    <div class="container my-5">
        <h1>Trending In Clothing</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['men', 'clothing', 'formal-wear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/formal.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Formal Wear</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'clothing', 'casual-wear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/casual.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Casual Wear</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'clothing', 'festive-wear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/festive.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Festive Wear</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'clothing', 'sleep-wear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/sleep-wear.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Sleep Wear</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="women-category">
    <div class="container my-5">
        <h1>Trending In Footwear</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'footwear', 'casual-shoes']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/casual-shoes.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Casual Shoes</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'footwear', 'sandals']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/sandals.avif" class="card-img-top">
                        <div class="card-body">
                            <h5>Sandlas</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'footwear', 'sports-shoes']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/sports.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Sports Shoes</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'footwear', 'boots']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/boots.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Boots</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="women-category">
    <div class="container my-5">
        <h1>Trending In Grooming Products</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'beauty', 'perfumes']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/perfume.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Perfumes</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'beauty', 'skin-care']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/skincare.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Skin Care</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'beauty', 'serum-gel']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/haircare.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Serum & Gel</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'beauty', 'hair-care']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/haircare.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Hair care</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="women-category">
    <div class="container my-5">
        <h1>Trending In Accessories</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'accesories', 'watches']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/watch.avif" class="card-img-top">
                        <div class="card-body">
                            <h5>Watches</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'accesories', 'belt']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/belt.avif" class="card-img-top">
                        <div class="card-body">
                            <h5>Belt</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'accesories', 'wallet']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/wallet.avif" class="card-img-top">
                        <div class="card-body">
                            <h5>Wallet</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">

                <a href="{{ route('products.list', ['men', 'accesories', 'sunglasses']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/sunglass.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5>Sunglasses</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection