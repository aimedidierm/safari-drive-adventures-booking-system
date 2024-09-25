<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about-us', 'about-us');
Route::view('/tours', 'tours');
Route::view('/tour-details', 'tour-details');
Route::view('/book-tour', 'book-tour');
Route::view('/contact-us', 'contact-us');

Route::view('/login', 'auth.login')->name('login');

Route::group(["prefix" => "auth", "as" => "auth."], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
});

Route::group(["prefix" => "admin", "middleware" => "auth", "as" => "admin."], function () {
    Route::get('/', function () {
        return 'Welcom Admin!';
    });
});

Route::group(["prefix" => "client", "middleware" => "client", "as" => "client."], function () {
    Route::get('/', function () {
        return 'Welcom Client!';
    });
});
