@extends('layouts.app')

@section('content')
<div class="products-section">

    <!-- Page Heading -->
    <div class="heading">
        <h1>Our Products</h1>
        <p>Check out our latest products and deals!</p>
    </div>

    <!-- Products Grid -->
    <div class="products-grid">
        @foreach($products as $product)
        <div class="product-card">

            <!-- Product Image -->
            <div class="product-image">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
            </div>

            <!-- Product Info -->
            <div class="product-info">
                <h2>{{ $product->name }}</h2>
                <p>{{ Str::limit($product->description, 80) }}</p>
                <p class="price">₹{{ $product->price }}</p>
            </div>

            <!-- Product Actions -->
            <div class="product-actions">
                <!-- Add to Cart -->
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-cart">🛒 Add to Cart</button>
                </form>

                <!-- Buy Now -->
                <form action="{{ route('payment.checkout') }}" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn-buy">⚡ Buy Now</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
