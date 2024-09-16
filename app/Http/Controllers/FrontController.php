<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kategori;
use App\Models\Merch;
use App\Models\Payment;
use App\Models\Sponsor;
use App\Models\Tour;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $tours = Tour::limit(6)->get();
        $sponsor = Sponsor::all();
        return view('home', compact('tours', 'sponsor'));
    }

    public function detialtours(Tour $tour)
    {
        return view('tourdetail', compact('tour'));
    }
    public function trektour()
    {
        // $tours = Tour::all();
        $kategori = Kategori::with('tours')->get();
        $tours = Tour::with('kategori')->get();
        return view('trektour', compact('tours', 'kategori'));
    }

    // filter berdasarkan kategori tour nya
    public function filterByCategory(Kategori $kategori)
    {
        // Retrieve tours filtered by the category
        $tours = Tour::where('kategori_id', $kategori->id)->get();

        // Pass the filtered tours and category to the view
        return view('toures', compact('tours'));
    }


    public function merch()
    {
        $merch = Merch::all();
        return view('merch', compact('merch'));
    }

    public function booking()
    {
        $tours = Tour::with('kategori')->get();
        $payment = Payment::with('transaksi')->get();
        return view('formbooking', compact('tours', 'payment'));
    }

    public function bookingtours(Tour $tour)
    {
        $payment = Payment::with('transaksi')->get();
        return view('formbookingTours',  compact('tour', 'payment'));
    }

    public function bookingstore(Request $request)
    {
        $nomer_boking = 'BKSJR-' . strtoupper(date('Ymd-His') . uniqid());

        // Validasi data
        $validatedData = $request->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'pasport_number' => 'required',
            'nationality' => 'required',
            'tours_id' => 'required',
            'total_participan' => 'required|integer',
            'add_message' => 'nullable',
            'arrival_date' => 'required|date',
            'pickup_time' => 'required',
            'pickup_location' => 'required',
        ]);

        DB::beginTransaction(); // Mulai transaction

        try {
            // Simpan booking ke database
            $validatedData['kode_booking'] = $nomer_boking;
            $booking = Booking::create($validatedData);

            // Simpan transaksi ke database
            $transaksi = new Transaksi();
            $transaksi->bookings_id = $booking->id; // Ambil ID dari booking yang baru disimpan
            $transaksi->payment_id = $request->payment_id; // Ambil dari form input
            $transaksi->status = 'unpaid'; // Status default unpaid
            $transaksi->save();

            DB::commit(); // Commit jika tidak ada error

            // Format pesan untuk WhatsApp
            $message = "Booking Details:\n";
            $message .= "Name: " . $request->fullName . "\n";
            $message .= "kode booking: " . $nomer_boking . "\n";
            $message .= "Email: " . $request->email . "\n";
            $message .= "Passport Number: " . $request->pasport_number . "\n";
            $message .= "Nationality: " . $request->nationality . "\n";
            $message .= "Total Participants: " . $request->total_participan . "\n";
            $message .= "Arrival Date: " . $request->arrival_date . "\n";
            $message .= "Pickup Time: " . $request->pickup_time . "\n";
            $message .= "Pickup Location: " . $request->pickup_location . "\n";
            $message .= "Additional Message: " . $request->add_message . "\n";
            // Format URL WhatsApp
            $whatsappUrl = 'https://wa.me/6287863968484?text=' . urlencode($message);

            // Redirect ke WhatsApp
            return redirect()->away($whatsappUrl);
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback jika terjadi error
            return redirect()->back()->withErrors(['error' => 'Booking failed, please try again.']);
        }
    }


    public function transaksi($booking, $kode_booking)
    {
        $booking = Booking::where('kode_booking', $kode_booking)->first();
        $transaksi = Transaksi::where('bookings_id', $booking->id)->first();
        return view('transaksis.create', compact('booking', 'transaksi'));
    }
}
