<nav class="bg-gradient-to-r from-purple-500 via-pink-500 to-indigo-600 shadow-lg p-4 flex justify-between items-center sticky top-0 z-50">
    <div class="text-2xl font-extrabold text-white hover:text-yellow-300 transition duration-300">
        <a href="{{ route('products.index') }}">EcommerceApp</a>
    </div>

    <div class="space-x-4">
        @auth
            @if(auth()->user()->role === 'admin')
                <a href="{{ route('admin.products.index') }}" class="px-4 py-2 bg-yellow-400 text-white rounded-full shadow-lg hover:bg-yellow-500 transition">
                    Admin Dashboard
                </a>
            @endif

            <span class="text-white font-medium">{{ auth()->user()->name }}</span>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="px-4 py-2 bg-black text-white rounded-full shadow-lg hover:bg-gray-800 transition">
               Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
        @else
            <a href="{{ route('login') }}" class="px-4 py-2 bg-black text-white rounded-full shadow-lg hover:bg-gray-800 transition">Login</a>
            <a href="{{ route('register') }}" class="px-4 py-2 bg-black text-white rounded-full shadow-lg hover:bg-gray-800 transition">Register</a>
        @endauth
    </div>
</nav>
