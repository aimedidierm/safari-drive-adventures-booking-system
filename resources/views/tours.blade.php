<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours - Safari-Drive Adventures</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <x-homepage-navbar />

    <!-- Tours List -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Our Tours 🏕️</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Tour Card -->
            <div
                class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="/images/image.png" alt="Tour 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">🌍 Safari in Nairobi National Park</h3>
                    <p class="text-gray-600 mt-2">Experience the beauty of the Nairobi National Park...</p>
                    <a href="/tour-details" class="text-green-600 hover:text-green-700 mt-4 inline-block">Learn More</a>
                </div>
            </div>
            <!-- Repeat similar blocks for other tours -->
        </div>
    </section>

</body>

</html>