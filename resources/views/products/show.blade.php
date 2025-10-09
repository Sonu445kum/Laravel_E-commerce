@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10 max-w-7xl">

    <div class="bg-white shadow-2xl rounded-2xl p-8 flex flex-col lg:flex-row gap-10 transition hover:shadow-indigo-300/40">

        <!-- Left Section - Product Image -->
        <div class="flex-1 flex justify-center items-center">
            <img src="{{ $product->image }}" alt="{{ $product->name }}"
                 class="max-w-[300px] max-h-[300px] w-auto object-contain rounded-2xl border border-gray-300 shadow-sm">
        </div>

        <!-- Right Section - Product Details -->
        <div class="flex-1 flex flex-col justify-between">
            <div class="space-y-5">
                <h1 class="text-3xl lg:text-4xl font-extrabold text-indigo-700 tracking-wide">{{ $product->name }}</h1>
                <p class="text-gray-700 leading-relaxed text-base lg:text-lg">{{ $product->description }}</p>

                <div class="flex items-center gap-3">
                    <span class="bg-green-500 text-white text-xs lg:text-sm px-3 py-1 rounded-full font-medium">4.5 ★</span>
                    <span class="text-gray-600 text-sm lg:text-base">(245 ratings & 60 reviews)</span>
                </div>

                <div>
                    <span class="text-4xl lg:text-5xl font-bold text-green-600">₹{{ $product->price }}</span>
                    <p class="text-gray-500 text-sm mt-1">Inclusive of all taxes</p>
                </div>

                <div class="mt-4 space-y-2 text-gray-700 text-sm lg:text-base">
                    <p><span class="font-semibold">Slug:</span> {{ $product->slug }}</p>
                    <p><span class="font-semibold">Stock:</span> {{ $product->stock }}</p>
                    <p><span class="font-semibold">Category:</span> {{ $product->category }}</p>
                </div>
            </div>

            <!-- Buttons -->
            <div class="mt-10 flex flex-wrap gap-4">
                <!-- Add to Cart Form -->
                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="flex-1">
                    @csrf
                    <button type="submit"
                        class="flex w-full items-center justify-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-black text-lg lg:text-xl font-semibold px-6 py-3 rounded-lg shadow-md transition hover:scale-105">
                        🛒 Add to Cart
                    </button>
                </form>

                <!-- Buy Now Button -->
                <button onclick="window.location='{{ route('products.show', $product->id) }}';"
                    class="flex-1 flex items-center justify-center gap-2 bg-orange-600 hover:bg-orange-700 text-black text-lg lg:text-xl font-semibold px-6 py-3 rounded-lg shadow-md transition hover:scale-105">
                    ⚡ Buy Now
                </button>

                <!-- Back Button -->
                <a href="{{ route('products.index') }}"
                   class="inline-flex items-center justify-center gap-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-lg lg:text-xl font-medium px-6 py-3 rounded-lg shadow-sm transition hover:scale-105">
                   ← Back to Products
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
