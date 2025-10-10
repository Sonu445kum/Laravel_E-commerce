<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">


    <!-- Footer CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <style>
        /* Background animation for subtle motion */
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Main layout styling */
        main, footer, header {
            width: 100%;
        }

        /* Navbar specific styling */
        nav.navbar {
            font-family: 'Poppins', sans-serif;
            background-color: #316fccff;
        }

        body {
            background: linear-gradient(135deg, #e0f7fa, #f3e5f5);
            background-size: 400% 400%;
            animation: gradientMove 15s ease infinite;
        }

        /* Container for content cards */
        .content-wrapper {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(15px);
            border-radius: 2rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease-in-out;
        }

        .content-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
    </style>
</head>

<body class="font-sans antialiased min-h-screen flex flex-col text-gray-900">

    {{-- Navigation Bar --}}
    <header class="sticky top-0 z-50 shadow-2xl backdrop-blur-md bg-white/10 border-b border-white/20 w-full">
        @include('layouts.navigation')
    </header>

    {{-- Page Content --}}
    <main class="flex-grow w-full px-0 py-10">
        <div class="mx-4 sm:mx-6 lg:mx-8 content-wrapper">
            @yield('content')
        </div>
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

</body>
</html>
