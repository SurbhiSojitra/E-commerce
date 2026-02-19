@extends('layouts.app')

@section('title', 'Home&Kitchen')

@section('content')

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Home Decor</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'home-decor', 'wall-decor']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/wall.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Wall Decor</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'home-decor', 'festive-decor']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/festive.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Festive Decor</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'home-decor', 'watches']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/clock.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Watches</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'home-decor', 'showpiece']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/showpiece.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Showpiece</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Lamp & Lightings</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'lightings', 'ceiling-lamps']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/ceiling.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Ceiling lamps</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'lightings', 'table-lamps']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/table.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Table Lamps</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'lightings', 'string-lights']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/string.webp" class="card-img-top">
                        <div class="card-body">
                            <h5>String Lights</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'lightings', 'wall-lights']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/wallLight.avif" class="card-img-top">
                        <div class="card-body">
                            <h5>Wall Lights</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Kitchen & Table</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'kitchen-table', 'table-runner']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/table-runner.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Table Runners</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'kitchen-table', 'cookware']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/cook.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>CookWare</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'kitchen-table', 'juicer']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/juicer.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Juicer</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'kitchen-table', 'table-ware']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/tableWare.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Table Ware</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Storage</h1>
        <div class="row text-center mt-4">
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'storage', 'bathroom-accessories']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/bathroomStorage.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Bathroom Accessories & Organization</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'storage', 'boxes']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/baskets.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Boxes, Baskets & Bins</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'storage', 'storage-drawer']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/DrawerOrganizer.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Storage Drawer</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.list', ['home_kitchen', 'storage', 'shoe-boxes']) }}" class="text-decoration-none text-dark">
                    <div class="card category-card">
                        <img src="assets/img/home/ShoeBoxes.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Shoe Boxes</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection