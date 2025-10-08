@extends('layouts.app')

@section('content')
<h1 class="text-4xl font-bold mb-6 text-purple-700">Admin Products</h1>

<a href="{{ route('admin.products.create') }}" class="mb-4 inline-block px-6 py-2 bg-yellow-400 text-white rounded-full hover:bg-yellow-500 transition">+ Add Product</a>

<div class="grid md:grid-cols-3 gap-6">
    @forelse($products as $product)
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 p-4">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover mb-2">
            <h2 class="text-xl font-bold">{{ $product->name }}</h2>
            <p class="text-gray-700 mt-1">${{ $product->price }}</p>
            <div class="mt-3 flex space-x-2">
                <a href="{{ route('admin.products.edit', $product) }}" class="px-4 py-1 bg-yellow-400 text-white rounded-full hover:bg-yellow-500 transition">Edit</a>
                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-1 bg-red-500 text-white rounded-full hover:bg-red-600 transition">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <p class="text-center text-gray-600 col-span-full">No products yet.</p>
    @endforelse
</div>
@endsection
