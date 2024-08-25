<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::with('kategori')->get();
        return view('tours.index', compact('tours'));
    }

    public function create()
    {
        return view('tours.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'kategori_id' => 'required|exists:kategoris,id',
            'image' => 'nullable|string|max:255',
        ]);

        Tour::create($request->all());

        return redirect()->route('tours.index')
            ->with('success', 'Tour created successfully.');
    }

    public function show(Tour $tour)
    {
        return view('tours.show', compact('tour'));
    }

    public function edit(Tour $tour)
    {
        return view('tours.edit', compact('tour'));
    }

    public function update(Request $request, Tour $tour)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'kategori_id' => 'required|exists:kategoris,id',
            'image' => 'nullable|string|max:255',
        ]);

        $tour->update($request->all());

        return redirect()->route('tours.index')
            ->with('success', 'Tour updated successfully.');
    }

    public function destroy(Tour $tour)
    {
        $tour->delete();

        return redirect()->route('tours.index')
            ->with('success', 'Tour deleted successfully.');
    }

    public function filterByCategory(Kategori $kategori)
    {
        // Retrieve tours filtered by the category
        $tours = Tour::where('kategori_id', $kategori->id)->get();

        // Pass the filtered tours and category to the view
        return view('tours.index', compact('tours', 'kategori'));
    }
}
