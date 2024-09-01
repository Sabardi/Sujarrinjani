<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TransaksiController;

use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;

// Route::get('/kategori', function () {
//     return view('Kategori.index');
// });

// Route to filter tours by category
Route::get('/tours/category/{kategori}', [TourController::class, 'filterByCategory'])->name('tours.filterByCategory');

Route::get('/', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('artikels', ArtikelController::class);


Route::middleware('auth')->group(function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('tours', TourController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('bookings', BookingController::class);
    Route::get('bookings/create/{id}', [BookingController::class, 'create'])->name('bookings.create');
    Route::resource('transaksi', TransaksiController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // register
    Route::get('register-acount', [RegisteredUserController::class, 'register'])->name('register-acount');
    Route::post('register-acount', [RegisteredUserController::class, 'store'])->name('store-acount');
});
require __DIR__ . '/auth.php';
