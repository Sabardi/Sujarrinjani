<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kategori;
use App\Models\Merch;
use App\Models\Sponsor;
use App\Models\Tour;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $tours = Tour::limit(6)->get();
        $sponsor = Sponsor::all();
        return view('home', compact('tours', 'sponsor'));
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
        return view('formbooking');
    }

    public function bookingstore(Request $request)
    {
        $nomer_boking = 'BKSJR-' . strtoupper(date('Ymd-His') . uniqid());
        // Validasi data
        $validatedData = $request->validate([
            'tours_id' => 'required',
            'fullName' => 'required',
            'email' => 'required|email',
            'pasport_number' => 'required',
            'nationality' => 'required',
            'total_participan' => 'required|integer',
            'arrival_date' => 'required|date',
            'pickup_time' => 'required',
            'pickup_location' => 'required',
            'add_message' => 'nullable',
        ]);

        // Simpan booking ke database
        $validatedData['kode_booking'] = $nomer_boking;
        $booking = Booking::create($validatedData);

        // Format pesan untuk WhatsApp
        $message = "Booking Details:\n";
        $message .= "Name: " . $request->fullName . "\n";
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
    }
}
