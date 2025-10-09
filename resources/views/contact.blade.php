@extends('layouts.app')

@section('content')

<section class="contact-section">
    <h1>Contact Us</h1>
    <p>We’d love to hear from you! Send us a message and we will get back to you as soon as possible.</p>

    <!-- Success Message -->
    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <input type="text" name="name" id="name" required placeholder="Your Name">
            <label for="name">Your Name</label>
        </div>

        <!-- Email -->
        <div class="form-group">
            <input type="email" name="email" id="email" required placeholder="Your Email">
            <label for="email">Your Email</label>
        </div>

        <!-- Message -->
        <div class="form-group">
            <textarea name="message" id="message" rows="5" required placeholder="Your Message"></textarea>
            <label for="message">Your Message</label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-btn">Send Message</button>
    </form>
</section>

@endsection
