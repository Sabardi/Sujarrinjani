<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Tour;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function tours(){
        $tours = Tour::all();
        return view('home', compact('tours'));    
    }
}
