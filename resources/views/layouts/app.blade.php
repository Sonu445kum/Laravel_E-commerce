<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Ecommerce') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 min-h-screen flex flex-col">

    {{-- Navigation --}}
    @include('layouts.navigation')

    {{-- Page Content --}}
    <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gradient-to-r from-purple-500 via-pink-500 to-indigo-600 text-white py-6 text-center rounded-t-lg shadow-inner">
        &copy; {{ date('Y') }} {{ config('app.name', 'Ecommerce') }}. All rights reserved.
    </footer>
</body>
</html>
