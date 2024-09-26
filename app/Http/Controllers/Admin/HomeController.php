<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Mengambil data booking per bulan
        $bookingsPerMonth = Booking::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month');

        // Mengambil data transaksi per bulan
        $transaksiPerMonth = Transaksi::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month');

        // Inisialisasi array kosong untuk booking dan transaksi
        $bookings = array_fill(1, 12, 0);
        $transaksi = array_fill(1, 12, 0);

        // Isi data booking dan transaksi sesuai bulan yang ada
        foreach ($bookingsPerMonth as $month => $count) {
            $bookings[$month] = $count;
        }

        foreach ($transaksiPerMonth as $month => $count) {
            $transaksi[$month] = $count;
        }

        // Mengirim data ke view
        $data = [
            'months' => range(1, 12), // Bulan 1 hingga 12
            'bookings' => array_values($bookings),
            'transaksi' => array_values($transaksi),
        ];

        return view('admin.dashboard', compact('data'));
    }

}
