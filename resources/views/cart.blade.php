@extends('layouts.app')

@section('content')
<div class="cart-section">

    <h1>Your Cart</h1>
    <p>Review your items and proceed to checkout.</p>

    @if(count($cart) > 0)
    <div class="cart-items">
        @foreach($cart as $id => $item)
        <div class="cart-item">
            <div class="item-info">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                <div class="item-details">
                    <h2>{{ $item['name'] }}</h2>
                    <p>Quantity: {{ $item['quantity'] }}</p>
                </div>
            </div>
            <div class="item-action">
                <p class="item-price">₹{{ $item['price'] * $item['quantity'] }}</p>
                <form action="{{ route('cart.remove', $id) }}" method="POST">
                    @csrf
                    <button class="remove-btn">Remove</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Total & Checkout -->
    <div class="cart-summary">
        <p class="total">
            Total: ₹{{ array_sum(array_map(fn($i) => $i['price'] * $i['quantity'], $cart)) }}
        </p>

        <!-- Stripe Checkout Form -->
        <form action="{{ route('payment.checkout') }}" method="POST">
            @csrf
            <input type="hidden" name="amount" value="{{ array_sum(array_map(fn($i) => $i['price'] * $i['quantity'], $cart)) }}">
            <button type="submit" class="checkout-btn">Proceed to Checkout</button>
        </form>
    </div>
    @else
    <p class="empty-cart">Your cart is empty.</p>
    @endif
</div>
@endsection
