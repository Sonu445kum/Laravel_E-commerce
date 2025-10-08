@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10 px-4">
    <h1 class="text-3xl font-extrabold text-center mb-10 text-black-700 tracking-wide">Our Products</h1>

    <!--  Product Cards Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        @foreach($products as $product)
            <div 
                class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-indigo-300/50 hover:-translate-y-1 transition-all duration-300 cursor-pointer border border-gray-100"
                onclick="openModal('{{ $product->id }}')"
            >
                <!--  Product Image -->
                <div class="w-full bg-white flex justify-center items-center p-4 h-[220px]">
                    <img 
                        src="{{ $product->image }}" 
                        alt="{{ $product->name }}" 
                        class="max-h-[180px] w-auto object-contain transition-transform duration-300 hover:scale-105"
                    >
                </div>

                <!--  Product Info -->
                <div class="px-4 pb-4">
                    <h2 class="text-base font-semibold text-gray-800 truncate">{{ $product->name }}</h2>
                    <p class="text-gray-500 text-sm mt-1">{{ Str::limit($product->description, 50) }}</p>
                    <p class="text-green-600 font-bold mt-2 text-lg">₹{{ $product->price }}</p>

                    <button class="mt-3 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                        View Details
                    </button>
                </div>
            </div>

            <!-- 🔹 Product Modal -->
            <div id="modal-{{ $product->id }}" class="hidden fixed inset-0 bg-black/60 flex justify-center items-center z-50 transition-opacity duration-300">
                <div class="bg-white rounded-2xl shadow-2xl p-6 w-11/12 md:w-2/3 lg:w-1/2 relative animate-fadeIn">
                    <button onclick="closeModal('{{ $product->id }}')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="flex justify-center items-center w-full md:w-1/2 bg-gray-50 p-4 rounded-xl">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="h-[350px] w-auto object-contain rounded-lg shadow-sm">
                        </div>

                        <div class="flex-1">
                            <h2 class="text-2xl font-bold text-indigo-700">{{ $product->name }}</h2>
                            <p class="text-gray-600 mt-3 leading-relaxed">{{ $product->description }}</p>
                            <p class="text-green-600 font-extrabold text-2xl mt-4">₹{{ $product->price }}</p>

                            <div class="flex gap-4 mt-6">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-5 py-2 rounded-lg shadow-md transition">
                                     Add to Cart
                                </button>
                                <button class="bg-orange-600 hover:bg-orange-700 text-black px-5 py-2 rounded-lg shadow-md transition">
                                     Buy Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!--  Modal Animation + JS -->
<script>
    function openModal(id) {
        document.getElementById(`modal-${id}`).classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeModal(id) {
        document.getElementById(`modal-${id}`).classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
</script>

<style>
    /* Smooth fade-in animation for modal */
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
    .animate-fadeIn {
        animation: fadeIn 0.3s ease-out;
    }
</style>
@endsection
