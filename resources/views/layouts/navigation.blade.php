<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcommerceApp</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background: linear-gradient(135deg, #697786ff 0%, #6498bbff 50%, #6486c4ff 100%);
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <!--  Navbar -->
    <nav class="backdrop-blur-md bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 shadow-2xl p-4 flex justify-between items-center sticky top-0 z-50 rounded-b-3xl border-b border-white/20">
        <!-- Brand -->
        <div class="text-3xl font-extrabold text-white tracking-wide drop-shadow-lg hover:scale-105 transition-transform duration-300">
            <a href="{{ route('products.index') }}">EcommerceApp</a>
        </div>

        <!-- Links -->
        <div class="space-x-4 flex items-center">
            @auth
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin.products.index') }}"
                       class="px-4 py-2 bg-yellow-400 text-black font-semibold rounded-full shadow-md hover:scale-105 hover:bg-yellow-300 transition-all duration-300">
                       Admin Dashboard
                    </a>
                @endif

                <span class="text-white font-medium">{{ auth()->user()->name }}</span>

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="px-4 py-2 bg-white/20 text-white font-semibold rounded-full backdrop-blur-sm hover:bg-white/30 shadow-lg transition-all duration-300">
                   Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
            @else
                <a href="{{ route('login') }}"
                   class="px-4 py-2 bg-white/20 text-white font-semibold rounded-full backdrop-blur-sm hover:bg-white/30 shadow-lg transition-all duration-300">
                   Login
                </a>
                <a href="{{ route('register') }}"
                   class="px-4 py-2 bg-white/20 text-white font-semibold rounded-full backdrop-blur-sm hover:bg-white/30 shadow-lg transition-all duration-300">
                   Register
                </a>
            @endauth
        </div>
    </nav>

    <!--  Page Content -->
    <main class="flex-grow p-6">
        @yield('content')
    </main>

    <!--  Footer -->
    <footer class="bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 text-center text-white py-4 rounded-t-3xl shadow-inner">
        <p class="text-sm tracking-wide">&copy; {{ date('Y') }} EcommerceApp — All rights reserved.</p>
    </footer>
</body>
</html>
