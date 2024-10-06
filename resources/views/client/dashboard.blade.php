@extends('layout')

@section('content')

<x-client-navbar />
<div class="p-4 sm:ml-64">
    <h2 class="text-3xl font-semibold text-gray-800 mb-8">Dashboard Overview</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Total Tours</h3>
            <p class="text-5xl font-bold text-green-600">{{ $totalTours }}</p>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Total Bookings</h3>
            <p class="text-5xl font-bold text-green-600">{{ $totalBookings }}</p>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Total Users</h3>
            <p class="text-5xl font-bold text-green-600">{{ $totalUsers }}</p>
        </div>
    </div>

    <h2 class="text-3xl font-semibold text-gray-800 my-8">Recent Activity</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="bg-white shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Bookings Over Time 📊</h3>
            <canvas id="bookingsChart" width="400" height="200"></canvas>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">New Users 🧑‍🤝‍🧑</h3>
            <canvas id="usersChart" width="400" height="200"></canvas>
        </div>
    </div>

    <h2 class="text-3xl font-semibold text-gray-800 my-8">Latest Bookings</h2>
    <div class="bg-white shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-700 text-left">
                    <th class="py-2 px-4">Booking ID</th>
                    <th class="py-2 px-4">Tour Name</th>
                    <th class="py-2 px-4">Customer Name</th>
                    <th class="py-2 px-4">Date</th>
                    <th class="py-2 px-4">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($latestBookings as $booking)
                <tr class="border-b text-gray-600">
                    <td class="py-2 px-4">{{ $booking->id }}</td>
                    <td class="py-2 px-4">{{ $booking->tour->title }}</td>
                    <td class="py-2 px-4">{{ $booking->client->name }}</td>
                    <td class="py-2 px-4">{{ $booking->created_at }}</td>
                    <td class="py-2 px-4">
                        @if($booking->status == 'confirmed')
                        <span class="text-green-600">Confirmed</span>
                        @else
                        <span class="text-red-600">Pending</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const bookingsData = @json($bookingsData);

    const bookingsChart = new Chart(document.getElementById('bookingsChart'), {
        type: 'line', 
        data: {
            labels: bookingsData.labels,
            datasets: [{
                label: 'Bookings',
                data: bookingsData.data, 
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const usersData = @json($usersData); 

    const usersChart = new Chart(document.getElementById('usersChart'), {
        type: 'bar', 
        data: {
            labels: usersData.labels,
            datasets: [{
                label: 'New Users',
                data: usersData.data,
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@stop