<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Details - Safari-Drive Adventures</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <x-homepage-navbar />

    <!-- Tour Hero Section -->
    <header class="bg-cover bg-center h-96" style="background-image: url('/images/image.png');">
        <div class="bg-green-800 bg-opacity-50 h-full flex flex-col justify-center items-center text-center">
            <h1 class="text-white text-5xl font-bold">🌍 Nairobi National Park Safari Adventure</h1>
            <p class="text-white text-xl mt-4">Discover the heart of the Nairobi National Park with an unforgettable
                tour</p>
        </div>
    </header>

    <!-- Tour Details Section -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Tour Overview</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
            Our Nairobi National Park Safari Adventure is designed to give you an immersive experience of one of the
            most iconic
            wildlife destinations in the world. From the incredible annual migration to spotting the Big Five, this tour
            is a once-in-a-lifetime opportunity. 🦁🐘🦓
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Highlights -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Tour Highlights</h3>
                <ul class="list-disc list-inside text-gray-700">
                    <li>🚍 Full-day guided safari tour</li>
                    <li>🦁 Witness the great migration and the Big Five</li>
                    <li>🏕️ Accommodation in luxury safari camps</li>
                    <li>🍽️ All meals included (traditional African cuisine)</li>
                    <li>📸 Photography opportunities at every stop</li>
                </ul>
            </div>

            <!-- Itinerary -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Itinerary</h3>
                <p class="text-gray-700 mb-4"><strong>Day 1:</strong> Arrival at Nairobi National Park, evening game
                    drive.</p>
                <p class="text-gray-700 mb-4"><strong>Day 2:</strong> Full day game drive, visiting key wildlife areas.
                </p>
                <p class="text-gray-700 mb-4"><strong>Day 3:</strong> Morning safari and return to base camp.</p>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="mt-12">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Additional Information</h3>
            <p class="text-gray-700 leading-relaxed">This tour is suitable for all ages, and families are welcome.
                Safari vehicles are equipped with comfortable seating, and there will be plenty of rest stops throughout
                the day. 🏞️</p>
            <p class="text-gray-700 leading-relaxed mt-4">Please ensure to bring sunscreen, a hat, and a good camera.
                Binoculars are highly recommended for wildlife viewing. 🦒</p>
        </div>
    </section>

    <!-- Book Now Button -->
    <section class="container mx-auto px-6 py-12">
        <div class="flex justify-center">
            <a href="#"
                class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-transform transform hover:scale-105 text-xl font-semibold">Book
                Now</a>
        </div>
    </section>

</body>

</html>