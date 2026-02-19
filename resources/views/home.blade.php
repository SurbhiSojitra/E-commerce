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
        <div class="swiper catSwiper mt-4">
            <div class="swiper-wrapper">
                @foreach($womenSubCategories as $sub)
                <div class="swiper-slide">
                    <a href="{{ route('products.bySubCategory', ['women', Str::slug($sub->name)]) }}"
                        class="text-decoration-none text-dark">
                        <div class="card category-card">
                            <img src="{{ asset('storage/'.$sub->image) }}" class="card-img-top">
                            <div class="card-body">
                                <h5>{{ $sub->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Men Style</h1>
        <div class="swiper catSwiper mt-4">
            <div class="swiper-wrapper">
                @foreach($menSubCategories as $sub)
                <div class="swiper-slide">
                    <a href="{{ route('products.bySubCategory', ['men', Str::slug($sub->name)]) }}" class="text-decoration-none text-dark">
                        <div class="card category-card">
                            <img src="{{ asset('storage/'.$sub->image) }}" class="card-img-top">
                            <div class="card-body">
                                <h5>{{ $sub->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Kids Style</h1>
        <div class="swiper catSwiper mt-4">
            <div class="swiper-wrapper">
                @foreach($kidsSubCategories as $sub)
                <div class="swiper-slide">
                    <a href="{{ route('products.bySubCategory', ['kids', Str::slug($sub->name)]) }}" class="text-decoration-none text-dark">
                        <div class="card category-card">
                            <img src="{{ asset('storage/'.$sub->image) }}" class="card-img-top">
                            <div class="card-body">
                                <h5>{{ $sub->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="content-category">
    <div class="container my-5">
        <h1>Trending In Home & Kitchen</h1>
        <div class="swiper catSwiper mt-4">
            <div class="swiper-wrapper">
                @foreach($homeKitchenSubCategories as $sub)
                <div class="swiper-slide">
                    <a href="{{ route('products.bySubCategory', ['home_kitchen', Str::slug($sub->name)]) }}" class="text-decoration-none text-dark">
                        <div class="card category-card">
                            <img src="{{ asset('storage/'.$sub->image) }}" class="card-img-top">
                            <div class="card-body">
                                <h5>{{ $sub->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    let catSwiperInstance;

    function initCatSwiper() {
        const el = document.querySelector(".catSwiper");
        if (!el) return;

        catSwiperInstance = new Swiper(".catSwiper", {
            slidesPerView: "auto",
            spaceBetween: 20,
            loop: true,

            speed: 8000,

            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
            },

            freeMode: true,
            freeModeMomentum: false,

            allowTouchMove: true,
            grabCursor: true,

            watchSlidesProgress: true,

            loopAdditionalSlides: 50,
            loopedSlides: 50,
        });
    }

    document.addEventListener("DOMContentLoaded", initCatSwiper);

    window.addEventListener("pageshow", function(event) {
        if (event.persisted && catSwiperInstance) {
            catSwiperInstance.autoplay.start();
            catSwiperInstance.update();
        }
    });
</script>

@endsection