@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10 px-4">
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-3xl mx-auto">
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-72 object-cover rounded">
        <h1 class="text-2xl font-bold mt-4 text-indigo-700">{{ $product->name }}</h1>
        <p class="text-gray-600 mt-2">{{ $product->description }}</p>
        <p class="text-xl font-bold text-green-600 mt-4">${{ $product->price }}</p>
        <a href="{{ route('products.index') }}" class="mt-6 inline-block bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
            Back to Products
        </a>
    </div>
</div>
@endsection
