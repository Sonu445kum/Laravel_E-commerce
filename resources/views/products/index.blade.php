@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10 px-4">
    <h1 class="text-3xl font-extrabold text-center mb-10 text-gray-900 tracking-wide">Our Products</h1>

    <!-- Product Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
        <div class="bg-white rounded-2xl shadow-lg hover:shadow-indigo-300/50 transition-all duration-300 border border-gray-100 flex flex-col">

            <!-- Product Image -->
            <div class="w-full flex justify-center items-center p-4 h-[180px] bg-gray-50 rounded-t-2xl">
                <img src="{{ $product->image }}" alt="{{ $product->name }}"
                     class="max-h-[120px] w-auto object-contain transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Product Info -->
            <div class="px-4 py-3 flex-1 flex flex-col justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-gray-800 truncate">{{ $product->name }}</h2>
                    <p class="text-gray-500 text-sm mt-1">{{ Str::limit($product->description, 60) }}</p>
                </div>

                <div class="mt-3">
                    <p class="text-green-600 font-bold text-lg">₹{{ $product->price }}</p>
                </div>

                <!-- Buttons -->
                <div class="mt-4 flex flex-col gap-2">
                    <!-- Add to Cart Form -->
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="w-full bg-green-500 hover:bg-green-600 text-black py-2 rounded-lg shadow-md transition font-semibold">
                            🛒 Add to Cart
                        </button>
                    </form>

                    <!-- Buy Now Form (Stripe Checkout) -->
                    <form action="{{ route('payment.checkout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <button type="submit"
                            class="w-full bg-red-500 hover:bg-red-600 text-black py-2 rounded-lg shadow-md transition font-semibold">
                            ⚡ Buy Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
