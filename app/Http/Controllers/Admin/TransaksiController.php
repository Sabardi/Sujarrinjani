<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //
    public function index()
    {
        $transaksis = Transaksi::with('booking.tour')->get();
        return view('admin.transaksis.index', compact('transaksis'));
    }

    public function create()
    {
        $bayar = Payment::all();
        return view('transaksis.create', compact('bayar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Bookings_id' => 'required|integer',
            'payment_id' => 'required|integer',
            'status' => 'required|string',
        ]);

        // Assuming payment is successful
        if ($request->status == 'Paid') {
            // Retrieve the booking data from the session
            $bookingData = session('booking_data');

            // Create the booking
            $booking = Booking::create($bookingData);

            // Create the transaction
            Transaksi::create([
                'Bookings_id' => $booking->id,
                'payment_id' => $request->payment_id,
                'status' => $request->status,
            ]);

            // Clear the session
            session()->forget('booking_data');

            return redirect()->route('bookings.index')
                ->with('success', 'Booking and transaction completed successfully.');
        } else {
            return redirect()->route('transaksi.create')
                ->with('error', 'Payment failed. Please try again.');
        }
    }


    public function show(Transaksi $transaksi)
    {
        return view('transaksis.show', compact('transaksi'));
    }

    public function edit(Transaksi $transaksi)
    {
        return view('transaksis.edit', compact('transaksi'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'order_id' => 'required|integer',
            'payment_method' => 'required|string|max:45',
            'status' => 'required|string|max:45',
            'amount' => 'required|numeric',
        ]);

        $transaksi->update($request->all());

        return redirect()->route('transaksis.index')->with('success', 'Transaksi updated successfully.');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksis.index')->with('success', 'Transaksi deleted successfully.');
    }
}
