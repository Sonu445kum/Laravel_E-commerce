@extends('layouts.app')

@section('content')
<div class="product-show-section">

    <!-- Product Container -->
    <div class="product-show-card">

        <!-- Left - Product Image -->
        <div class="product-show-image">
            <img src="{{ $product->image }}" alt="{{ $product->name }}">
        </div>

        <!-- Right - Product Details -->
        <div class="product-show-details">
            <h1>{{ $product->name }}</h1>
            <p class="description">{{ $product->description }}</p>

            <div class="ratings">
                <span class="rating-badge">4.5 ★</span>
                <span class="rating-text">(245 ratings & 60 reviews)</span>
            </div>

            <div class="price-section">
                <span class="price">₹{{ $product->price }}</span>
                <p class="tax-info">Inclusive of all taxes</p>
            </div>

            <div class="additional-info">
                <p><strong>Slug:</strong> {{ $product->slug }}</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>
                <p><strong>Category:</strong> {{ $product->category }}</p>
            </div>

            <!-- Action Buttons -->
            <div class="product-buttons">
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-cart">🛒 Add to Cart</button>
                </form>

                <form action="{{ route('payment.checkout') }}" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn-buy">⚡ Buy Now</button>
                </form>

                <a href="{{ route('products.index') }}" class="btn-back">← Back to Products</a>
            </div>
        </div>
    </div>
</div>
@endsection
