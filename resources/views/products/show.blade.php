@extends('layouts.app')

@section('content')
<div class="px-4 py-10 max-w-7xl mx-auto">

    {{-- Flipkart-Style Product Layout --}}
    <div class="bg-white shadow-2xl rounded-2xl p-8 flex flex-col lg:flex-row gap-10 transition hover:shadow-indigo-300/40">

        {{-- Left Section - Product Image --}}
        <div class="flex-1 flex justify-center items-center">
            <img src="{{ $product->image }}" alt="{{ $product->name }}"
                 class="w-full max-w-md h-[400px] object-contain rounded-2xl border border-gray-300 hover:scale-105 transition-transform duration-300">
        </div>

        {{-- Right Section - Product Details --}}
        <div class="flex-1 flex flex-col justify-between">
            <div class="space-y-4">
                <h1 class="text-3xl font-extrabold text-indigo-700 tracking-wide">{{ $product->name }}</h1>

                <p class="text-gray-700 leading-relaxed">{{ $product->description }}</p>

                <div class="flex items-center gap-2">
                    <span class="bg-green-500 text-white text-xs px-2 py-1 rounded">4.5 ★</span>
                    <span class="text-black-500 text-sm">(245 ratings & 60 reviews)</span>
                </div>

                <div>
                    <span class="text-4xl font-bold text-green-600">₹{{ $product->price }}</span>
                    <p class="text-black-500 text-sm mt-1">Inclusive of all taxes</p>
                </div>

                {{-- Additional Attributes --}}
                <div class="mt-4 space-y-1 text-black-600 text-sm">
                    <p><span class="font-semibold">Slug:</span> {{ $product->slug }}</p>
                    <p><span class="font-semibold">Stock:</span> {{ $product->stock }}</p>
                    <p><span class="font-semibold">Category:</span> {{ $product->category }}</p>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="mt-10 flex flex-wrap gap-4">
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
