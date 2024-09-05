<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Tour - Safari-Drive Adventures</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <x-homepage-navbar />

    <!-- Book Tour Form -->
    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Book Your Tour 🚍</h2>
        <form class="bg-white shadow-md rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
            <!-- Personal Information -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                <input type="text" id="name" placeholder="Enter your full name"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email address"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                <input type="tel" id="phone" placeholder="Enter your phone number"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>

            <!-- Tour Selection -->
            <div class="mb-4">
                <label for="tour" class="block text-gray-700 text-sm font-bold mb-2">Select Tour</label>
                <select id="tour"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    <option value="Nairobi National Park">🌍 Nairobi National Park Safari Adventure</option>
                    <option value="masai">🏞️ Masai Mara Wildlife Experience</option>
                    <option value="kilimanjaro">🗻 Kilimanjaro Mountain Trek</option>
                </select>
            </div>

            <!-- Date and Number of People -->
            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Preferred Date</label>
                <input type="date" id="date"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>

            <div class="mb-4">
                <label for="people" class="block text-gray-700 text-sm font-bold mb-2">Number of People</label>
                <input type="number" id="people" min="1" max="10" value="1"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-transform transform hover:scale-105 text-xl font-semibold">Confirm
                    Booking</button>
            </div>
        </form>
    </section>

</body>

</html>