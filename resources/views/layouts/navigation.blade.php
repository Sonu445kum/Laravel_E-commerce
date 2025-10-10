<!-- Navbar Only -->
<nav class="navbar bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 shadow-xl sticky top-0 z-50 border-b border-white/10 backdrop-blur-md rounded-b-xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('shop') }}" class="flex items-center space-x-2">
                    <img src="{{ asset('images/ecommerceLogo.png') }}" alt="EcommerceApp" class="w-8 h-6">
                    <span class="text-2xl md:text-3xl font-extrabold text-white drop-shadow-lg">EcommerceApp</span>
                </a>
            </div>

            <!-- Nav Links & Cart & Auth -->
            <div class="flex items-center space-x-8 lg:space-x-10">

                <!-- Links -->
                <a href="{{ route('shop') }}" class="text-white hover:text-yellow-300 font-medium transition-colors duration-300 px-2 lg:px-3">Home</a>
                <a href="{{ route('shop') }}" class="text-white hover:text-yellow-300 font-medium transition-colors duration-300 px-2 lg:px-3">Shop</a>
                <a href="{{ route('about') }}" class="text-white hover:text-yellow-300 font-medium transition-colors duration-300 px-2 lg:px-3">About</a>
                <a href="{{ route('contact') }}" class="text-white hover:text-yellow-300 font-medium transition-colors duration-300 px-2 lg:px-3">Contact</a>

                <!-- Cart Icon -->
                <a href="{{ route('cart.index') }}" class="relative text-white hover:text-yellow-300 transition px-2 lg:px-3">
                    🛒 Cart
                    @if(session('cart') && count(session('cart')) > 0)
                        <span class="absolute -top-2 -right-3 bg-red-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">
                            {{ count(session('cart')) }}
                        </span>
                    @endif
                </a>

                <!-- Auth / Admin -->
                @auth
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.products.index') }}"
                            class="px-4 py-2 bg-yellow-400 text-black font-semibold rounded-full shadow-md hover:scale-105 hover:bg-yellow-300 transition-all duration-300">
                            Admin
                        </a>
                    @endif

                    <span class="text-white font-medium px-2 lg:px-3">{{ auth()->user()->name }}</span>

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
