<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //
    public function transaksi($bookingId, $kodeBooking)
    {
        $payment = Payment::all();
        $booking = Booking::find($bookingId);
        return view('transaksis.create', compact('payment', 'booking', 'kodeBooking'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'Bookings_id' => 'required|integer',
            'payment_id' => 'required|integer',
            'status' => 'required|string',
        ]);

        Transaksi::create($request->all());

        return redirect()->back()->with('success', 'Transaction created successfully!');
    }
}
