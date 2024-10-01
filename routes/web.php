<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TourController;
use App\Models\Tour;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tours = Tour::latest()->take(3)->get();
    return view('home', compact('tours'));
});
Route::view('/about-us', 'about-us');
Route::get('/tours', [TourController::class, 'showMore']);
Route::get('/tour-details/{id}', [TourController::class, 'show']);
Route::view('/book-tour', 'book-tour');
Route::view('/contact-us', 'contact-us');

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::group(["prefix" => "auth", "as" => "auth."], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
});

Route::group(["prefix" => "admin", "middleware" => "auth", "as" => "admin."], function () {
    Route::get('/', [DashboardController::class, 'admin']);
    Route::resource('/tours', TourController::class)->only('index', 'store', 'destroy');
    Route::resource('/booking', BookingController::class)->only('index');
    Route::resource('/clients', ClientsController::class)->only('index');
    Route::view('/profile', 'auth.profile');
});

Route::group(["prefix" => "client", "middleware" => "auth", "as" => "client."], function () {
    Route::get('/', [DashboardController::class, 'client']);
    Route::resource('/tours', TourController::class)->only('index');
    Route::get('/booking', [BookingController::class, 'index']);
    Route::view('/profile', 'auth.profile');
});
