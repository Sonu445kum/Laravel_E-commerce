@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
    <div class="p-6">
        <h1 class="text-3xl font-bold text-indigo-800">{{ $product->name }}</h1>
        <p class="text-gray-700 mt-2">{{ $product->description }}</p>
        <p class="text-purple-700 mt-4 text-xl font-semibold">Price: ${{ $product->price }}</p>
        <p class="mt-2 text-gray-600">Stock: {{ $product->stock }}</p>
        <p class="mt-1 text-gray-500">Category: {{ $product->category }}</p>
        <a href="{{ route('products.index') }}" class="mt-4 inline-block px-6 py-2 bg-purple-500 text-white rounded-full hover:bg-purple-600 transition">Back to Products</a>
    </div>
</div>
@endsection
