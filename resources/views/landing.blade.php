<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing | E-Commerce</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body class="bg-gray-50">

    {{-- Include Navbar --}}
    @include('layouts.navigation')

    <!-- Hero Section with Slider -->
    <div class="relative w-full h-screen overflow-hidden">

        <!-- Slides -->
        <div class="slide active">
            <img src="{{ asset('images/orangeHeadPhone.avif') }}" class="w-full h-screen object-cover">
        </div>
        <div class="slide active">
            <img src="{{ asset('images/headphoneImg.avif') }}" class="w-full h-screen object-cover">
        </div>
        <div class="slide">
            <img src="{{ asset('images/mustangImg.avif') }}" class="w-full h-screen object-cover">
        </div>
        <div class="slide">
            <img src="{{ asset('images/photography.avif') }}" class="w-full h-screen object-cover">
        </div>

        <!-- Overlay Content -->
        <div class="absolute inset-0 flex flex-col justify-center items-center overlay-content">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 text-white drop-shadow-lg">Welcome to Our Store</h1>
            <p class="text-lg md:text-xl mb-8 text-white drop-shadow-md">Find the best deals and latest trends</p>
            <a href="{{ route('shop') }}"
                class="px-8 py-3 bg-yellow-500 text-black font-semibold rounded-full shop-btn shadow-lg hover:scale-105 transition-transform duration-300">
                Shop Now
            </a>
        </div>
    </div>


    <!-- Slider Script -->
    <script>
        let slides = document.querySelectorAll('.slide');
        let index = 0;

        function showNextSlide() {
            slides[index].classList.remove('active');
            index = (index + 1) % slides.length;
            slides[index].classList.add('active');
        }

        setInterval(showNextSlide, 4000);
    </script>
    {{-- Footer --}}
    @include('layouts.footer')

</body>

</html>