<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
<!-- Header -->
<header class="bg-blue-500 py-6">
    <div class="container mx-auto flex items-center justify-between">
        <h1 class="text-3xl font-semibold text-white">Product Management</h1>
        <nav>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
                @endif
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-500 via-blue-600 to-blue-700 text-white">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-semibold mb-4">Effortless Product Management</h2>
        <p class="text-xl mb-8">Manage your products with ease and efficiency</p>
        <a href="#features" class="bg-white text-blue-600 hover:bg-blue-700 hover:text-white py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out">Learn More</a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-semibold mb-8">Key Features</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-10">
            <!-- Feature 1 -->
            <div class="p-6 rounded-lg bg-white shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Product Catalog</h3>
                <p class="text-gray-600">Create, update, and organize your product catalog effortlessly.</p>
            </div>
            <!-- Feature 2 -->
{{--            <div class="p-6 rounded-lg bg-white shadow-lg">--}}
{{--                <h3 class="text-xl font-semibold mb-4">Inventory Management</h3>--}}
{{--                <p class="text-gray-600">Track your inventory levels and receive low-stock alerts.</p>--}}
{{--            </div>--}}
            <!-- Feature 3 -->
            <div class="p-6 rounded-lg bg-white shadow-lg">
                <h3 class="text-xl font-semibold mb-4">User-Friendly Interface</h3>
                <p class="text-gray-600">Intuitive and user-friendly interface for efficient management.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
{{--<section id="contact" class="bg-gray-200 py-16">--}}
{{--    <div class="container mx-auto text-center">--}}
{{--        <h2 class="text-3xl font-semibold mb-8">Contact Us</h2>--}}
{{--        <p class="text-gray-600 mb-8">Have questions or need assistance? Contact our support team.</p>--}}
{{--        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out">Contact Support</a>--}}
{{--    </div>--}}
{{--</section>--}}

<!-- Footer -->
<footer class="bg-gray-900 py-6 text-white">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 Product Management</p>
    </div>
</footer>
</body>
</html>
