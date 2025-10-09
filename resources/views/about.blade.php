@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <h1>About EcommerceApp</h1>
    <p>We are dedicated to providing the best shopping experience with high-quality products and excellent service.</p>
</section>

<!-- Info Cards -->
<section class="info-cards">
    <div class="card">
        <h2>Our Mission</h2>
        <p>Deliver the best online shopping experience with quality and trust.</p>
    </div>
    <div class="card">
        <h2>Our Vision</h2>
        <p>To become the most customer-centric eCommerce platform in the region.</p>
    </div>
    <div class="card">
        <h2>Our Values</h2>
        <p>Quality, Trust, Innovation, Customer Satisfaction, and Transparency.</p>
    </div>
</section>

<!-- Animated Stats -->
<section class="stats">
    <div class="stat">
        <h3 class="counter" data-target="5000">0</h3>
        <p>Products Sold</p>
    </div>
    <div class="stat">
        <h3 class="counter" data-target="1200">0</h3>
        <p>Happy Customers</p>
    </div>
    <div class="stat">
        <h3 class="counter" data-target="15">0</h3>
        <p>Awards Won</p>
    </div>
</section>

<!-- Counter Animation Script -->
<script>
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = Math.ceil(target / 200);

            if(count < target) {
                counter.innerText = count + increment;
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
</script>

@endsection
