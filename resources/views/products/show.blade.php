@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10 px-4">

    {{-- Flipkart-Style Product Layout --}}
    <div class="bg-white/70 backdrop-blur-lg shadow-2xl rounded-2xl p-8 flex flex-col lg:flex-row gap-10 transition hover:shadow-indigo-300/40">

        {{-- Left Section - Product Image --}}
        <div class="flex-1 flex justify-center items-center">
            <img src="{{ $product->image }}" alt="{{ $product->name }}"
                 class="w-full max-w-md h-[400px] object-contain rounded-2xl border border-gray-200 hover:scale-105 transition-transform duration-300">
        </div>

        {{-- Right Section - Product Details --}}
        <div class="flex-1 flex flex-col justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-indigo-700 tracking-wide">{{ $product->name }}</h1>
                <p class="text-gray-600 mt-3 leading-relaxed">{{ $product->description }}</p>

                <div class="flex items-center gap-2 mt-4">
                    <span class="bg-green-500 text-white text-xs px-2 py-1 rounded">4.5 ★</span>
                    <span class="text-gray-500 text-sm">(245 ratings & 60 reviews)</span>
                </div>

                <div class="mt-5">
                    <span class="text-4xl font-bold text-green-600">₹{{ $product->price }}</span>
                    <p class="text-sm text-gray-500 mt-1">Inclusive of all taxes</p>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="mt-8 flex flex-wrap gap-4">
                <button
                    class="flex items-center justify-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-white text-lg font-semibold px-6 py-3 rounded-lg shadow-md transition-all duration-300">
                    🛒 Add to Cart
                </button>

                <button
                    class="flex items-center justify-center gap-2 bg-orange-600 hover:bg-orange-700 text-white text-lg font-semibold px-6 py-3 rounded-lg shadow-md transition-all duration-300">
                    ⚡ Buy Now
                </button>

                <a href="{{ route('products.index') }}"
                   class="inline-flex items-center justify-center gap-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-lg font-medium px-6 py-3 rounded-lg shadow-sm transition">
                   ← Back to Products
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
