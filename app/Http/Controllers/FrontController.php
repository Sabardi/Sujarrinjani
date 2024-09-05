<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Merch;
use App\Models\Sponsor;
use App\Models\Tour;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $tours = Tour::limit(6)->get();
        $sponsor = Sponsor::all();
        return view('home', compact('tours', 'sponsor'));
    }

    public function trektour()
    {
        // $tours = Tour::all();
        $kategori = Kategori::with('tours')->get();
        $tours = Tour::with('kategori')->get();
        return view('trektour', compact( 'tours', 'kategori'));
    }

    // filter berdasarkan kategori tour nya
    public function filterByCategory(Kategori $kategori)
    {
        // Retrieve tours filtered by the category
        $tours = Tour::where('kategori_id', $kategori->id)->get();

        // Pass the filtered tours and category to the view
        return view('toures', compact('tours'));
    }

    public function artikel(Artikel $artikel)
    {
        return view('artikel', compact('artikel'));
    }

    public function merch()
    {
        $merch = Merch::all();
        return view('merch', compact('merch'));
    }

}
