<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('kategori', KategoriController::class);

// Route to filter tours by category
Route::get('/tours/category/{kategori}', [TourController::class, 'filterByCategory'])->name('tours.filterByCategory');


Route::resource('tours', TourController::class);

Route::resource('payments', PaymentController::class);

Route::resource('bookings', BookingController::class);
