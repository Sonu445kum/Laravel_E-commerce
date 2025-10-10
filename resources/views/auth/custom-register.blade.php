<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | EcommerceApp</title>

    <!-- Tailwind CDN (optional if using Tailwind) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS for Auth Pages -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
       <!-- Footer CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    {{-- Include Navbar --}}
    @include('layouts.navigation')

    {{-- Signup Form Content --}}
    <main class="flex-grow flex justify-center items-center py-16">
        <div class="auth-container bg-white p-10 rounded-xl shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Create Account</h2>
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
                @csrf
                <input type="text" name="name" placeholder="Name" required class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="email" name="email" placeholder="Email" required class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="password" name="password" placeholder="Password" required class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="bg-blue-600 text-white py-3 rounded font-semibold hover:bg-blue-700 transition-colors">Sign Up</button>
            </form>
            <p class="mt-4 text-center text-gray-600">
                Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
            </p>
        </div>
    </main>

    {{-- Include Footer --}}
    @include('layouts.footer')

</body>
</html>
