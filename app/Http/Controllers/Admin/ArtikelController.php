<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Tour;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    public function index()
    {
        $artikels = Artikel::with('tour')->get();
        $toures = Tour::all();
        return view('admin.artikels.index', compact('artikels', 'toures'));
    }

    public function create()
    {
        return view('admin.artikels.create');
    }

    public function show(Artikel $artikel)
    {
        return view('admin.artikels.show', compact('artikel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tours_id' => 'required',
            'quote' => 'required|string|max:45',
            'itinerary' => 'required',
            'paragrap1_day1' => 'required',
            'paragrap2_day1' => 'nullable',
            'paragrap1_day2' => 'required',
            'paragrap2_day2' => 'nullable',
            'paragrap1_day3' => 'required',
            'paragrap2_day3' => 'nullable',
            'paragrap1_day4' => 'nullable',
            'paragrap2_day4' => 'nullable',
            'day1_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'day2_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'day3_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'day4_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = $request->all();

        // Handle image uploads
        for ($i = 1; $i <= 4; $i++) {
            $imageField = 'day' . $i . '_image';
            if ($request->hasFile($imageField)) {
                $imageName = time() . "_day{$i}." . $request->$imageField->extension();
                $request->$imageField->move(public_path('images/artikel'), $imageName);
                $data[$imageField] = 'images/artikel/' . $imageName;
            }
        }

        Artikel::create($data);

        return redirect()->route('artikels.index')->with('success', 'Artikel created successfully.');
    }


    public function edit(Artikel $artikel)
    {
        return view('admin.artikels.edit', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'tours_id' => 'required',
            'quote' => 'required|string|max:45',
            'itinerary' => 'required',
            'paragrap1_day1' => 'required',
            'paragrap2_day1' => 'nullable',
            'paragrap1_day2' => 'required',
            'paragrap2_day2' => 'nullable',
            'paragrap1_day3' => 'required',
            'paragrap2_day3' => 'nullable',
            'paragrap1_day4' => 'nullable',
            'paragrap2_day4' => 'nullable',
            'day1_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'day2_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'day3_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'day4_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = $request->all();

        // Handle image uploads
        for ($i = 0; $i <= 4; $i++) {
            $imageField = 'day' . $i . '_image';
            if ($request->hasFile($imageField)) {
                $imageName = time() . "_day{$i}." . $request->$imageField->extension();
                $request->$imageField->move(public_path('images/artikel'), $imageName);
                $data[$imageField] = 'images/artikel/' . $imageName;
            }
        }

        $artikel->update($data);

        return redirect()->route('artikels.index')->with('success', 'Artikel updated successfully.');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('artikels.index')->with('success', 'Artikel deleted successfully.');
    }
}
