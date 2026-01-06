@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero-section">
    <div class="container-fluid p-0">
        <div class="bg-image">
            <img src="assets/img/bg1.jpg" alt="Background Image" class="img-fluid">
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Shop By Category</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/women/women-fashoin.jpg" class="card-img-top" alt="Category 1">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('women') }}">Women</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/men/men-fashoin.jpg" class="card-img-top" alt="Category 2">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('men') }}">Men</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/kids/kids-fashion.jpg" class="card-img-top" alt="Category 3">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('kids') }}">Kids</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/home/table-runner.jpg" class="card-img-top" alt="Category 4">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('home_kitchen') }}">Home & Kitchen</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Women Style</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.bySubCategory', ['women', 'clothing']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/western-dress.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Clothing</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.bySubCategory', ['women', 'beauty']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/cosmetics.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Beauty</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.bySubCategory', ['women', 'footwear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/shoes.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Footwear</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.bySubCategory', ['women', 'accessories']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/women/beauty.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Accesories</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Men Style</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.bySubCategory', ['men', 'clothing']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/men-clothing.png" class="card-img-top">
                        <div class="card-body">
                            <h5>Clothing</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.bySubCategory', ['men', 'grooming']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/men-cosmetics.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Grooming</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.bySubCategory', ['men', 'footwear']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/men-shoes.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>Footwear</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.bySubCategory', ['men', 'accesories']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/men/men-accessories.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Accesories</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Kids Style</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/kids/kids-cloth.avif" class="card-img-top">
                    <div class="card-body">
                        <h5>Clothing</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/kids/kids-cosmetic.webp" class="card-img-top">
                    <div class="card-body">
                        <h5>Beauty</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/kids/kids-shoes.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Footwear</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/kids/kids-accessories.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Accesories</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Home & Kitchen</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/home/emaarcamel.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Home Decor</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/home/ceiling-light.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Lamps & Lightings</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/home/kitchen.avif" class="card-img-top">
                    <div class="card-body">
                        <h5>Kitchen & Table</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card category-card">
                    <img src="assets/img/home/organiser.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Storage</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection