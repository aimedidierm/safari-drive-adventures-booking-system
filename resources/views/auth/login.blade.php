<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Safari-Drive Adventures</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <x-homepage-navbar />

    <section class="container mx-auto px-6 py-12 flex justify-center items-center">
        <div
            class="bg-white shadow-lg rounded-lg p-8 w-full md:w-1/3 transform hover:scale-105 transition-transform duration-300">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Login 🔐</h2>
            @if($errors->any())
            <span style="color: red;">{{$errors->first()}}</span>
            @endif
            <form method="POST" action="/auth/login">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email" name="email"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                        required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" name="password"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                        required>
                </div>

                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox text-green-600">
                        <span class="ml-2 text-sm text-gray-700">Remember Me</span>
                    </label>
                    <a href="#" class="text-sm text-green-600 hover:underline">Forgot Password?</a>
                </div>

                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-green-600 text-white w-full py-2 rounded-lg hover:bg-green-700 transition-transform transform hover:scale-105 text-xl font-semibold">Login</button>

                </div>
            </form>

            <div class="text-center mt-6">
                <p class="text-sm text-gray-700">Don't have an account?
                    <a href="#" class="text-green-600 hover:underline">Sign Up</a>
                </p>
            </div>
        </div>
    </section>

</body>

</html>