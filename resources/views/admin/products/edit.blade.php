@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-purple-700">Edit Product</h1>

<form action="{{ route('admin.products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label class="block font-medium">Name</label>
        <input type="text" name="name" class="w-full border rounded px-3 py-2" value="{{ $product->name }}" required>
    </div>
    <div class="mb-4">
        <label class="block font-medium">Slug</label>
        <input type="text" name="slug" class="w-full border rounded px-3 py-2" value="{{ $product->slug }}" required>
    </div>
    <div class="mb-4">
        <label class="block font-medium">Description</label>
        <textarea name="description" class="w-full border rounded px-3 py-2" rows="4" required>{{ $product->description }}</textarea>
    </div>
    <div class="mb-4">
        <label class="block font-medium">Price</label>
        <input type="number" step="0.01" name="price" class="w-full border rounded px-3 py-2" value="{{ $product->price }}" required>
    </div>
    <div class="mb-4">
        <label class="block font-medium">Image URL</label>
        <input type="text" name="image" class="w-full border rounded px-3 py-2" value="{{ $product->image }}" required>
    </div>
    <div class="mb-4">
        <label class="block font-medium">Stock</label>
        <input type="number" name="stock" class="w-full border rounded px-3 py-2" value="{{ $product->stock }}" required>
    </div>
    <div class="mb-4">
        <label class="block font-medium">Category</label>
        <input type="text" name="category" class="w-full border rounded px-3 py-2" value="{{ $product->category }}" required>
    </div>
    <button type="submit" class="px-6 py-2 bg-yellow-400 text-white rounded-full hover:bg-yellow-500 transition">Update Product</button>
</form>
@endsection
