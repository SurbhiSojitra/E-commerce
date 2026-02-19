<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Wallantq')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/bootstrap-icons.svg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- Extra Styles --}}
    @stack('styles')
</head>

<body>
    @include('partials.header')

    @yield('content')

    <div id="progress" class="m-3" style="position: fixed; bottom: 20px; right: 20px; cursor: pointer; display: none;">
        <span id="progress-value" style="border:2px solid #6e0520; box-shadow: 0 0 5px rgba(45, 1, 75, 0.9); color:black; font-weight:bold; padding: 10px; border-radius: 50%;"><i class="bi bi-arrow-up" style="font-weight: bold; font-size: 1.2rem;"></i></span>
    </div>

    <script>
        const progress = document.getElementById('progress');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                progress.style.display = 'block';
            } else {
                progress.style.display = 'none;'
            }
        });

        progress.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    @include('partials.footer')



</body>

</html>