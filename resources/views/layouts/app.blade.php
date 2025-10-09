<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom About Page CSS -->
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">




    <style>
        /* Background animation for subtle motion */
        @keyframes gradientMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Main layout styling */
        main,
        footer,
        header {
            width: 100%;
        }

        /* Navbar specific styling */
        nav.navbar {
            font-family: 'Poppins', sans-serif;
            background-color: #316fccff;
            /* tumhara custom navbar color */
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
        <div class="bg-white/60 backdrop-blur-lg rounded-3xl shadow-2xl p-8 mx-4 sm:mx-6 lg:mx-8 transition hover:shadow-purple-300/40">
            @yield('content')
        </div>
    </main>

    {{-- Footer --}}
    <footer class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white py-6 text-center rounded-t-3xl shadow-inner w-full">
        <p class="text-sm tracking-wide">&copy; {{ date('Y') }} {{ config('app.name', 'Ecommerce') }}. All rights reserved.</p>
    </footer>

</body>

</html>