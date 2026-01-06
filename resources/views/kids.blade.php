@extends('layouts.app')

@section('title', 'Kids')

@section('content')

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Clothing</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'clothing', 'boys-clothing']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/boys.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Boys Clothing</h5>
                        </div>
                    </div>
                </a>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'clothing', 'girls-clothing']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/girls.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Girls Clothing</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'clothing', 'festive-wear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/festive.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Festive Wear</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'clothing', 'sleep-wear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/sleep.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Sleep Wear</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Footwear</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'clothing', 'casual-shoes']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/shoes.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Casual Shoes</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'clothing', 'sandals']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/sandal.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Sandlas</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'clothing', 'crocks']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/croks.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Crocks</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'clothing', 'boots']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/boots.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Boots</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- <section class="content-category">
    <div class="container my-5">
        <h1>Trending In Grooming</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/men/perfume.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Perfumes</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/men/skincare.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Skin Care</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/men/haircare.webp" class="card-img-top">
                    <div class="card-body">
                        <h5>Hair Care</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/men/serum.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Serum & Gel</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Accessories</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'accessories', 'watches']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/watches.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Watches</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'accessories', 'bags']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/bags.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5>Bags</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'accessories', 'cap']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/caps.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Cap</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['kids', 'accessories', 'sunglasses']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/kids/accesories.jpg" class="card-img-top">
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