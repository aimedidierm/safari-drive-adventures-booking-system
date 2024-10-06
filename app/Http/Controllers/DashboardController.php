<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function client()
    {
        $totalTours = Tour::count();
        $totalBookings = Booking::where('user_id', Auth::id())->count();
        $totalUsers = User::count();
        $latestBookings = Booking::latest()->where('user_id', Auth::id())->get();

        $bookingsData = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [20, 25, 40, 35, 50]
        ];

        $usersData = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [5, 10, 15, 20, 30]
        ];
        return view('client.dashboard', compact('totalTours', 'totalBookings', 'totalUsers', 'latestBookings', 'bookingsData', 'usersData'));
    }

    public function admin()
    {
        $totalTours = Tour::count();
        $totalBookings = Booking::count();
        $totalUsers = User::count();
        $latestBookings = Booking::latest()->get();
        $latestBookings->load('client');

        $bookingsData = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [20, 25, 40, 35, 50]
        ];

        $usersData = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [5, 10, 15, 20, 30]
        ];
        return view('admin.dashboard', compact('totalTours', 'totalBookings', 'totalUsers', 'latestBookings', 'bookingsData', 'usersData'));
    }
}
