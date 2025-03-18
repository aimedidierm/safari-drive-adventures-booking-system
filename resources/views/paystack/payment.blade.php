<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paystack Payment Form</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen" style="background-color: #88949e;">

    <form method="POST" action="{{ route('paystack.pay') }}" class="max-w-lg mx-auto p-8 bg-gray shadow-lg rounded-lg">
        @csrf
        <div class="mb-6">
            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
            <input type="text" name="email" value="{{Auth::user()->email}}" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                placeholder="Enter your email">
        </div>

        <div class="mb-6">
            <label for="amount" class="block text-sm font-semibold text-gray-700 mb-2">Amount</label>
            <input type="number" name="amount" id="amount" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                placeholder="Enter amount">
        </div>

        <div>
            <label for="tour">My tours:</label>
            <select name="tour" id="tour">
                <option value=""></option>
                @foreach ($travels as $item)
                    <option value="{{$item->id}}">{{$item->tour->title}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit"
            class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition duration-300">
            Pay Now
        </button>
    </form>
</body>
</html>