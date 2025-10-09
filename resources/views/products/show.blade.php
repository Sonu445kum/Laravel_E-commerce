@extends('layouts.app')

@section('content')
<div class="px-4 py-10 max-w-7xl mx-auto">

    <div class="bg-white shadow-2xl rounded-2xl p-8 flex flex-col lg:flex-row gap-10 transition hover:shadow-indigo-300/40">

        <!-- Left Section - Product Image -->
        <div class="flex-1 flex justify-center items-center">
    <img src="{{ $product->image }}" alt="{{ $product->name }}"
         class="max-w-[100px] max-h-[100px] w-auto object-contain rounded-2xl border border-gray-300 hover:scale-105 transition-transform duration-300 cursor-pointer shadow-sm">
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
                <button class="flex items-center justify-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-white text-lg lg:text-xl font-semibold px-6 py-3 rounded-lg shadow-md transition hover:scale-105">
                    🛒 Add to Cart
                </button>

                <button class="flex items-center justify-center gap-2 bg-orange-600 hover:bg-orange-700 text-white text-lg lg:text-xl font-semibold px-6 py-3 rounded-lg shadow-md transition hover:scale-105">
                    ⚡ Buy Now
                </button>

                <a href="{{ route('products.index') }}"
                   class="inline-flex items-center justify-center gap-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-lg lg:text-xl font-medium px-6 py-3 rounded-lg shadow-sm transition hover:scale-105">
                   ← Back to Products
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Optional: Zoom modal for product image -->
<script>
const productImage = document.querySelector('.object-contain.cursor-pointer');
if(productImage) {
    productImage.addEventListener('click', () => {
        const modal = document.createElement('div');
        modal.className = 'fixed inset-0 bg-black/70 flex justify-center items-center z-50';
        modal.innerHTML = `<img src="${productImage.src}" class="max-h-[90vh] w-auto rounded-xl shadow-2xl animate-fadeIn cursor-pointer">`;
        document.body.appendChild(modal);
        document.body.classList.add('overflow-hidden');

        modal.addEventListener('click', () => {
            modal.remove();
            document.body.classList.remove('overflow-hidden');
        });
    });
}
</script>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
    animation: fadeIn 0.3s ease-out;
}
</style>
@endsection
