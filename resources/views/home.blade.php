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
        <div class="bg-green-800 bg-opacity-50 h-full flex flex-col justify-center items-center">
          <h1 class="text-5xl text-white uppercase mb-4 text-center" style="text-shadow: 0 0.3rem 0.5rem rgba(0,0,0,0.1); animation: fadeIn 0.2s linear backwards 0.2s;">
            🚍 Adventure is worthwhile
          </h1>
          <p class="text-3xl text-white py-2 text-center" style="animation: fadeIn 0.2s linear backwards 0.4s;">
             Explore the World with Safari-Drive Adventures
          </p>
        </div>
      </header>      

    <section class="container mx-auto px-6 py-8">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Our Services</h2>
        
        <div class="flex gap-4 overflow-x-auto">
          
          <div class="flex-none w-40 p-2 text-center bg-green-600 cursor-pointer hover:bg-green-700">
            <img src="images/home-icon1.png" alt="Adventure" class="h-16 mx-auto">
            <h3 class="text-white text-sm mt-1">Adventure</h3>
          </div>
          <div class="flex-none w-40 p-2 text-center bg-green-600 cursor-pointer hover:bg-green-700">
            <img src="images/home-icon2.png" alt="Tour Guide" class="h-16 mx-auto">
            <h3 class="text-white text-sm mt-1">Tour Guide</h3>
          </div>
          <div class="flex-none w-40 p-2 text-center bg-green-600 cursor-pointer hover:bg-green-700">
            <img src="images/home-icon3.png" alt="Tracking" class="h-16 mx-auto">
            <h3 class="text-white text-sm mt-1">Tracking</h3>
          </div>
          <div class="flex-none w-40 p-2 text-center bg-green-600 cursor-pointer hover:bg-green-700">
            <img src="images/home-icon4.png" alt="Hiking" class="h-16 mx-auto">
            <h3 class="text-white text-sm mt-1">Hiking</h3>
          </div>
          <div class="flex-none w-40 p-2 text-center bg-green-600 cursor-pointer hover:bg-green-700">
            <img src="images/home-icon5.png" alt="Camp Fire" class="h-16 mx-auto">
            <h3 class="text-white text-sm mt-1">Camp Fire</h3>
          </div>
          <div class="flex-none w-40 p-2 text-center bg-green-600 cursor-pointer hover:bg-green-700">
            <img src="images/home-icon6.png" alt="Off Road" class="h-16 mx-auto">
            <h3 class="text-white text-sm mt-1">Off Road</h3>
          </div>
          <div class="flex-none w-40 p-2 text-center bg-green-600 cursor-pointer hover:bg-green-700">
            <img src="images/home-icon7.png" alt="Camping" class="h-16 mx-auto">
            <h3 class="text-white text-sm mt-1">Camping</h3>
          </div>
        </div>
      </section>   
      
      <section class="container mx-auto px-6 text-center py-12">
        <div class="offer bg-white text-gray-700 p-8 rounded-lg shadow-lg">
            <h3 class="text-4xl font-bold uppercase mb-4">Up to 50% Off</h3>
            <p class="text-lg mb-6 max-w-lg mx-auto">
                We Have Crazy Offers for All Our Customers. <br>
                Grab Your Ticket as Early As Now.
            </p>
            <a href="/tours" 
            class="bg-green-600 text-white hover:bg-green-700 font-bold px-6 py-3 rounded-lg transition-colors">
                Book Now
            </a>
        </div>
    </section>
    
    <section class="container mx-auto px-6 py-8">
        <h2 class="text-3xl font-semibold text-gray-800">Featured Tours</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            @foreach ($tours as $tour)
            <div
                class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/' . ($tour->image ? $tour->image : 'image.png')) }}" alt="Tour 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">{{$tour->title}}</h3>
                    <p class="text-gray-600 mt-2">{{$tour->description}}</p>
                    <a href="/tour-details/{{$tour->id}}"
                        class="text-green-600 hover:text-green-700 mt-4 inline-block">Learn More</a>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        @if ($tours->isNotEmpty())
        <div class="flex justify-center">
            <a href="/tours"
                class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-transform transform hover:scale-105 text-xl font-semibold">
                More tours</a>
        </div>
        @endif
    </section>

    <section class="container mx-auto px-6 py-12" id="about-us">

        <div class="w-full bg-gray-100 p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">About Us 🚌</h2>
            <p class="text-gray-700 text-lg leading-relaxed">
                Safari-Drive Adventures is a leading travel agency offering a wide range of tours and travel packages 
                to exotic destinations around the world. Our buses, marked by the iconic orange color, are known for 
                their comfort and reliability. </p>
                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    This platform allows tour operators and travel agencies to create detailed trip itineraries that cater to 
                    the specific preferences of their clients. By incorporating a variety of travel services such as flights, hotels, and excursions, 
                    the system ensures that every traveler enjoys a personalized and seamless vacation experience. 🏞️</p>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Our Mission</h3>
                <p class="text-gray-700 leading-relaxed mb-6">Our mission is to provide unforgettable travel experiences, connecting 
                    people to the wonders of the world. 🌍</p>
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Our Vision</h3>
                <p class="text-gray-700 leading-relaxed">Our vision is to be the leading provider of authentic 
                    and immersive travel experiences, rooted in sustainability, cultural exchange, and unparalleled service. 🌍</p>    
        </div>
    </section>    
       

    <section class="container mx-auto px-6 py-12" id="contact-us">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Contact Us 📧</h2>
        <form class="bg-white shadow-md rounded-lg p-6 transform hover:scale-105 transition-transform duration-300 ">
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
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" crossorigin="anonymous"></script>

    <section class="container text-gray-800 py-12 px-6 text-center mt-8">
        <div class="bg-gray max-w-4xl mx-auto relative rounded-lg shadow-lg p-6">
            <div class="flex flex-wrap justify-center items-center gap-6 mb-4">
                <a href="tel:+254759452517" class="flex items-center gap-2 text-lg text-gray-700 hover:text-green-600">
                    <i class="fas fa-phone text-green-600"></i> +254 759452517
                </a>
                <a href="mailto:safaridrive7@gmail.com" class="flex items-center gap-2 text-lg text-gray-700 hover:text-green-600">
                    <i class="fas fa-envelope text-green-600"></i> safaridrive7@gmail.com
                </a>
                <div class="flex gap-6">
                    <a href="https://facebook.com" target="_blank" class="text-gray-700 hover:text-green-600 transition-colors">
                        <i class="fa-brands fa-facebook-f text-2xl"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-gray-700 hover:text-green-600 transition-colors">
                        <i class="fa-brands fa-twitter text-2xl"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="text-gray-700 hover:text-green-600 transition-colors">
                        <i class="fa-brands fa-instagram text-2xl"></i>
                    </a>
                </div>
            </div>
            <hr class="border-t border-black w-1/2 mx-auto mb-4">
            <h1 class="text-2xl font-normal text-black">
                Created By <span class="text-green-600">Mercy</span> | Your All-Time Developer!
            </h1>
        </div>
    </section>
    
       
    
</body>

</html>