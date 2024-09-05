<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safari-Drive Adventures</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <x-homepage-navbar />

    <header class="bg-cover bg-center h-96" style="background-image: url('/images/image.png');">
        <div class="bg-green-800 bg-opacity-50 h-full flex justify-center items-center">
            <h1 class="text-white text-4xl font-bold animate-fade-in">🚍 Explore the World with Safari-Drive Adventures
            </h1>
        </div>
    </header>

    <section class="container mx-auto px-6 py-8">
        <h2 class="text-3xl font-semibold text-gray-800">Featured Tours</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div
                class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="/images/image.png" alt="Tour 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">🌍 Safari in Nairobi National Park</h3>
                    <p class="text-gray-600 mt-2">Experience the beauty of the Nairobi National Park...</p>
                    <a href="/tour-details" class="text-green-600 hover:text-green-700 mt-4 inline-block">Learn More</a>
                </div>
            </div>
            <div
                class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="/images/image.png" alt="Tour 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">🌍 Safari in Nairobi National Park</h3>
                    <p class="text-gray-600 mt-2">Experience the beauty of the Nairobi National Park...</p>
                    <a href="/tour-details" class="text-green-600 hover:text-green-700 mt-4 inline-block">Learn More</a>
                </div>
            </div>
            <div
                class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="/images/image.png" alt="Tour 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">🌍 Safari in Nairobi National Park</h3>
                    <p class="text-gray-600 mt-2">Experience the beauty of the Nairobi National Park...</p>
                    <a href="/tour-details" class="text-green-600 hover:text-green-700 mt-4 inline-block">Learn More</a>
                </div>
            </div>
        </div>
        <br>
        <div class="flex justify-center">
            <a href="/tours"
                class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-transform transform hover:scale-105 text-xl font-semibold">
                More tours</a>
        </div>
    </section>

    <section class="container mx-auto px-6 py-12" id="about-us">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">About Safari-Drive Adventures 🚌</h2>
        <p class="text-gray-700 leading-relaxed mb-6">Safari-Drive Adventures is a leading travel agency offering a wide
            range of tours and travel packages to exotic destinations around the world. Our buses, marked by the iconic
            green color, are known for their comfort and reliability. 🏞️</p>
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h3>
        <p class="text-gray-700 leading-relaxed">Our mission is to provide unforgettable travel experiences, connecting
            people to the wonders of the world. 🌍</p>
    </section>

    <section class="container mx-auto px-6 py-12" id="contact-us">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Contact Us 📧</h2>
        <form class="bg-white shadow-md rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" placeholder="Your Name"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" placeholder="Your Email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                <textarea id="message" rows="4" placeholder="Your Message"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors duration-300">Send
                    Message</button>
            </div>
        </form>
    </section>

</body>

</html>