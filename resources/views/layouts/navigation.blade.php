<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcommerceApp</title>
    @vite('resources/css/app.css')
    <style>
        body nav {
            font-family: 'Poppins', sans-serif;
            background-color: #316fccff;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <!-- 🌟 Navbar -->
    <nav class="bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 shadow-xl sticky top-0 z-50 border-b border-white/10 backdrop-blur-md rounded-b-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">

                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('products.index') }}" 
                       class="text-2xl md:text-3xl font-extrabold text-white tracking-wide hover:scale-105 transition-transform duration-300 drop-shadow-lg">
                       <span class="text-yellow-300">E</span>commerce<span class="text-pink-300">App</span>
                    </a>
                </div>

                <!-- Nav Links: Always Visible with Spacing -->
                <div class="flex items-center space-x-8"> <!-- space-x-8 added for good spacing -->
                    <a href="{{ route('products.index') }}" class="text-white hover:text-yellow-300 font-medium transition-colors duration-300">Home</a>
                    <a href="#" class="text-white hover:text-yellow-300 font-medium transition-colors duration-300">Shop</a>
                    <a href="#" class="text-white hover:text-yellow-300 font-medium transition-colors duration-300">About</a>
                    <a href="#" class="text-white hover:text-yellow-300 font-medium transition-colors duration-300">Contact</a>

                    @auth
                        @if(auth()->user()->role === 'admin')
                            <a href="{{ route('admin.products.index') }}"
                               class="px-4 py-2 bg-yellow-400 text-black font-semibold rounded-full shadow-md hover:scale-105 hover:bg-yellow-300 transition-all duration-300">
                               Admin
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

            </div>
        </div>
    </nav>

    <!-- 💻 Main Content -->
    <main class="flex-grow p-6 bg-gray-50">
        @yield('content')
    </main>

    <!-- ⚡ Footer -->
    <footer class="bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-600 text-white py-6 text-center rounded-t-3xl shadow-inner mt-8">
        <div class="space-x-4 mb-3">
            <a href="#" class="text-white/80 hover:text-yellow-300 transition">Privacy Policy</a>
            <a href="#" class="text-white/80 hover:text-yellow-300 transition">Terms</a>
            <a href="#" class="text-white/80 hover:text-yellow-300 transition">Support</a>
        </div>
        <p class="text-sm text-white/80">&copy; {{ date('Y') }} <span class="font-semibold text-white">EcommerceApp</span> — All Rights Reserved.</p>
    </footer>

</body>
</html>
