@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold text-center mb-6 text-indigo-700">All Products</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
            <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">{{ $product->name }}</h2>
                    <p class="text-gray-600 text-sm mt-1">{{ Str::limit($product->description, 50) }}</p>
                    <p class="text-indigo-600 font-bold mt-2">${{ $product->price }}</p>
                    <a href="{{ route('products.show', $product->id) }}" class="mt-3 inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
                        View Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
