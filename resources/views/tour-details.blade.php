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

    <header class="bg-cover bg-center h-96" style="background-image: url('/images/image.png');">
        <div class="bg-green-800 bg-opacity-50 h-full flex flex-col justify-center items-center text-center">
            <h1 class="text-white text-5xl font-bold">{{$tour->title}}</h1>
            <p class="text-white text-xl mt-4">{{$tour->description}}</p>
        </div>
    </header>

    <section class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Tour Overview</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
            {{$tour->overview}}
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Tour Highlights</h3>
                <ul class="list-disc list-inside text-gray-700">
                    @foreach($tour->highlights as $highlight)
                    <li>{{ $highlight }}</li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Itinerary</h3>
                <ul class="list-disc list-inside text-gray-700">
                    @foreach($tour->itinerary as $step)
                    <li>{{ $step }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-12">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Additional Information</h3>
            {{$tour->additional_information}}
        </div>
    </section>

    <section class="container mx-auto px-6 py-12">
        <div class="flex justify-center">
            <a href="#"
                class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-transform transform hover:scale-105 text-xl font-semibold">Book
                Now</a>
        </div>
    </section>

</body>

</html>