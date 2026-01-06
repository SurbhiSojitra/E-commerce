@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero-section">
    <div class="container-fluid p-0">
        <div class="bg-image">
            <img src="assets/img/women-bg.jpg" alt="Background Image" class="img-fluid">
        </div>
    </div>
</section>


<section class="women-category">
    <div class="container my-5">
        <h1>Trending In Clothing</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'western-wear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/western-dress.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>western Wear</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'ethnic-wear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/ethnic.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Ethnic Wear</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'sports-wear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/sports.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Sports Wear</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'sleep-wear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/sleepwear.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Lingerie & SleepWear</h5>
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
                <a href="{{ route('products.list', ['women', 'clothing', 'shoes']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/shoes1.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5>Shoes</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'flats']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/flats.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Flats</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'heels']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/heels.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Heels</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'boots']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/boots.jpg" class="card-img-top">
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
        <h1>Trending In Beauty Products</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'makeup']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/makeup.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Makeup</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'skin-care']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/skincare.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Skin care</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'fragrance']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/perfume.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Fragrance</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'hair-care']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/haircare.jpeg" class="card-img-top">
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
                <a href="{{ route('products.list', ['women', 'clothing', 'watches']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/watch.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Watches</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'sunglasses']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/sunglass.avif" class="card-img-top">
                        <div class="card-body">
                            <h5>Sunglasses</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'jewellery']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/jewellery.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Jewellery</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['women', 'clothing', 'bags']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/bags.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Bags</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection