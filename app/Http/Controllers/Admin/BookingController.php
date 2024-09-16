<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function index()
    {
        $bookings = Booking::with('transaksi')->latest()->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $tours = Tour::all();
        return view('bookings.edit', compact('booking', 'tours'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'tours_id' => 'required|exists:tours,id',
            'fullName' => 'required|string|max:45',
            'email' => 'required|email|max:45',
            'pasport_number' => 'required|string|max:45',
            'nationality' => 'required|string|max:45',
            'total_participan' => 'required|integer',
            'arrival_date' => 'required|date',
            'pickup_time' => 'required',
            'pickup_location' => 'required|string|max:45',
            'add_message' => 'nullable|string|max:250',
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')
            ->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')
            ->with('success', 'Booking deleted successfully.');
    }
}
