@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10 px-4">
    <h1 class="text-3xl font-extrabold mb-8 text-gray-900">Your Cart</h1>

    @if(count($cart) > 0)
    <div class="grid grid-cols-1 gap-6">
        @foreach($cart as $id => $item)
        <div class="flex justify-between items-center bg-white rounded-lg shadow p-4">
            <div class="flex items-center gap-4">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-contain">
                <div>
                    <h2 class="font-semibold">{{ $item['name'] }}</h2>
                    <p class="text-gray-500">Quantity: {{ $item['quantity'] }}</p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-green-600 font-bold">₹{{ $item['price'] * $item['quantity'] }}</p>
                <form action="{{ route('cart.remove', $id) }}" method="POST">
                    @csrf
                    <button class="text-red-500 hover:underline mt-2">Remove</button>
                </form>
            </div>
        </div>
        @endforeach

        <div class="mt-6 text-right">
            <p class="text-xl font-bold">
                Total: ₹{{ array_sum(array_map(fn($i) => $i['price'] * $i['quantity'], $cart)) }}
            </p>
            <a href="{{ route('checkout') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg">
                Proceed to Checkout
            </a>
        </div>
    </div>
    @else
    <p class="text-gray-600">Your cart is empty.</p>
    @endif
</div>
@endsection