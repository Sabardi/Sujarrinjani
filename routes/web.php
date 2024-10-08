<?php


use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\HomeController as AdminController;
use App\Http\Controllers\Admin\GambarController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\MerchController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\SponsorController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FrontController as HalamanDepan;
use App\Http\Controllers\FrontController as BookingFront;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/trek tour', [FrontController::class, 'trektour'])->name('trek&tour');
Route::get('/merchandiser', [FrontController::class, 'merch'])->name('merchandiser');
Route::get('/booking & pay', [BookingFront::class, 'booking'])->name('booking');
// booking
Route::post('/booking', [BookingFront::class, 'bookingstore'])->name('bookingstore');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// merch


// booking from tours
Route::get('/booking/{tour}/tours', [BookingFront::class, 'bookingtours'])->name('bookingtours');

// filter
Route::get('/tours/category/{kategori}/show', [FrontController::class, 'filterByCategory'])->name('tours.ByCategory');

Route::get('/tours/detail/{tour}/show', [HalamanDepan::class, 'detialtours'])->name('tours.detail');

// transaksi
Route::get('konfirmasi/transaksi/{transaksi}', [FrontController::class, 'transaksi'])->name('konrimasi.transaksi');
// update transaksi
Route::put('konfirmasi/transaksi/{transaksi}', [FrontController::class, 'updateTransaksi'])->name('konfirmasi.transaksi');

// artikel show
Route::get('/dashboard/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');





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
    Route::resource('gambar', GambarController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // register
    Route::get('register-acount', [RegisteredUserController::class, 'register'])->name('register-acount');
    Route::post('register-acount', [RegisteredUserController::class, 'store'])->name('store-acount');
    Route::get('user-acount', [UserController::class, 'index'])->name('user-acount');
    // Route::get('user-acount/{user}/edit', [UserController::class, 'edit'])->name('user-acount.edit');
    // Route::put('user-acount/{user}', [UserController::class, 'update'])->name('user-acount.update');
    Route::delete('user-acount/{user}', [UserController::class, 'destroy'])->name('user-acount.destroy');
});

require __DIR__ . '/auth.php';

// public function index()
// {
//     // Data dummy atau ambil data asli dari database
//     $users = User::selectRaw('DATE(created_at) as date, COUNT(*) as count')
//                 ->groupBy('date')
//                 ->orderBy('date')
//                 ->get();

//     // Ekstraksi data untuk Chart.js
//     $labels = $users->pluck('date');  // Array of dates
//     $data = $users->pluck('count');   // Array of user counts

//     return view('statistics.index', compact('labels', 'data'));
// }
