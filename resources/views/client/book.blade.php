@extends('layout')

@section('content')

<x-client-navbar />
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Book Your Tour 🚍</h5>

        <form action="/client/booking" method="POST"
            class="bg-white shadow-md rounded-lg p-10 transform hover:scale-100 transition-transform duration-300">
            @csrf

            <div class="mb-4">
                <label for="tour" class="block text-gray-700 text-sm font-bold mb-2">Select Tour</label>
                <select id="tour" name="tour_id"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    @foreach ($tours as $tour)
                    <option value="{{ $tour->id }}" {{ isset($id) && $tour->id == $id ? 'selected' : '' }}>
                        {{ $tour->title }}, {{ $tour->price }} KES per person
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                    <input type="text" id="name" value="{{Auth::User()->name}}"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                        disabled>
                </div>

                <div class="w-full md:w-1/3 px-3">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                    <input type="text" id="name" value="{{Auth::User()->phone}}"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                        disabled>
                </div>
            </div>

            <div class="mb-4">
                <label for="people" class="block text-gray-700 text-sm font-bold mb-2">Number of People</label>
                <input type="number" id="people" name="seat" min="1" max="10" value="1"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Payment Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-transform transform hover:scale-105 text-xl font-semibold">Confirm
                    Booking</button>
            </div>
        </form>
    </div>
</div>
@stop