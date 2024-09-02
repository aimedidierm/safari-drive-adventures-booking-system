<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safari-Drive Adventures</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-green-600">Safari-Drive Adventures</a>
            <div>
                <a href="#" class="text-gray-800 mx-2 hover:text-green-600 transition-colors">Home</a>
                <a href="#" class="text-gray-800 mx-2 hover:text-green-600 transition-colors">About Us</a>
                <a href="#" class="text-gray-800 mx-2 hover:text-green-600 transition-colors">Tours</a>
                <a href="#" class="text-gray-800 mx-2 hover:text-green-600 transition-colors">Contact Us</a>
                <a href="#"
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-cover bg-center h-96" style="background-image: url('https://example.com/hero.jpg');">
        <div class="bg-green-800 bg-opacity-50 h-full flex justify-center items-center">
            <h1 class="text-white text-4xl font-bold animate-fade-in">🚍 Explore the World with Safari-Drive Adventures
            </h1>
        </div>
    </header>

    <!-- Featured Tours -->
    <section class="container mx-auto px-6 py-8">
        <h2 class="text-3xl font-semibold text-gray-800">Featured Tours</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <!-- Tour Card -->
            <div
                class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="/images/image.png" alt="Tour 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">🌍 Safari in Serengeti</h3>
                    <p class="text-gray-600 mt-2">Experience the beauty of the Serengeti...</p>
                    <a href="#" class="text-green-600 hover:text-green-700 mt-4 inline-block">Learn More</a>
                </div>
            </div>
            <!-- Repeat similar blocks for other tours -->
        </div>
    </section>

</body>

</html>