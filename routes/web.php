<?php


use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\MerchController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\SponsorController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/', [FrontController::class, 'index'])->name('home');

Route::get('/trek tour',[FrontController::class, 'trektour'])->name('trek&tour');

// merch
Route::get('/merchandiser',[FrontController::class, 'merch'])->name('merchandiser');
Route::get('/booking',[FrontController::class, 'booking'])->name('booking');
Route::post('/booking',[FrontController::class, 'bookingstore'])->name('bookingstore');

// filter
Route::get('/tours/category/{kategori}/show', [FrontController::class, 'filterByCategory'])->name('tours.ByCategory');

// artikel show
Route::get('/dashboard/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'role:admin|contentmanager')->group(function () {
    Route::get('/tours/category/{kategori}', [TourController::class, 'filterByCategory'])->name('tours.filterByCategory');
    Route::resource('kategori', KategoriController::class);
    Route::resource('tours', TourController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('bookings', BookingController::class);
    Route::get('bookings/create/{id}', [BookingController::class, 'create'])->name('bookings.create');
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('sponsor', SponsorController::class);
    Route::resource('merch', MerchController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // register
    Route::get('register-acount', [RegisteredUserController::class, 'register'])->name('register-acount');
    Route::post('register-acount', [RegisteredUserController::class, 'store'])->name('store-acount');
    Route::get('user-acount', [UserController::class, 'index'])->name('user-acount');
});

require __DIR__ . '/auth.php';
