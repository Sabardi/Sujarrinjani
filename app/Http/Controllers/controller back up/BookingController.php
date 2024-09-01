<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function create(Tour $id)
    {
        return view('bookings.create', compact('id'));
    }

    // public function store(Request $request)
    // {
        // $request->validate([
        //     'tours_id' => 'required|integer',
        //     'fullName' => 'required|string|max:45',
        //     'email' => 'required|email|max:45',
        //     'pasport_number' => 'required|string|max:45',
        //     'nationality' => 'required|string|max:45',
        //     'total_participan' => 'required|integer',
        //     'arrival_date' => 'required|date',
        //     'pickup_time' => 'required|date_format:H:i',
        //     'pickup_location' => 'required|string|max:45',
        //     'add_message' => 'nullable|string|max:250',
        // ]);

    //     Booking::create($request->all());

    //     return redirect()->route('bookings.index')
    //         ->with('success', 'Booking created successfully.');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'tours_id' => 'required|integer',
            'fullName' => 'required|string|max:45',
            'email' => 'required|email|max:45',
            'pasport_number' => 'required|string|max:45',
            'nationality' => 'required|string|max:45',
            'total_participan' => 'required|integer',
            'arrival_date' => 'required|date',
            'pickup_time' => 'required|date_format:H:i',
            'pickup_location' => 'required|string|max:45',
            'add_message' => 'nullable|string|max:250',
        ]);

        // Store the booking data temporarily in the session
        session(['booking_data' => $request->all()]);

        // Redirect to the transaction page
        return redirect()->route('transaksi.create');
    }


    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $tours = Tour::all(); // Load available tours
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
