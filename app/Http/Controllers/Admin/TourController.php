<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //
    public function index()
    {
        $tours = Tour::with('kategori')->get();
        $kategoris = Kategori::withCount('tours')->get();
        return view('admin.tours.index', compact('tours', 'kategoris'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.tours.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'kategori_id' => 'required|exists:kategoris,id',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate as an image
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/tours'), $imageName);
            $data['image'] = 'images/tours/' . $imageName; // Save the image path in the database
        }

        Tour::create($data);

        return redirect()->route('tours.index')
            ->with('success', 'Tour created successfully.');
    }

    public function show(Tour $tour)
    {
        return view('admin.tours.show', compact('tour'));
    }

    public function edit(Tour $tour)
    {
        $kategoris = Kategori::all();
        return view('admin.tours.edit', compact('tour', 'kategoris'));
    }

    public function update(Request $request, Tour $tour)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'kategori_id' => 'required|exists:kategoris,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate as an image
        ]);

        // Ambil data dari request, kecuali untuk gambar
        $data = $request->except(['image']);

        // Jika ada gambar baru, proses penyimpanan gambar
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($tour->image && file_exists(public_path($tour->image))) {
                unlink(public_path($tour->image));
            }

            // Simpan gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/tours'), $imageName);
            $data['image'] = 'images/tours/' . $imageName; // Perbarui jalur gambar di database
        }

        // Perbarui data model dengan data baru
        $tour->update($data);

        return redirect()->route('tours.index')
            ->with('success', 'Tour updated successfully.');
    }


    public function destroy(Tour $tour)
    {
        try {
            $tour->delete();
            return redirect()->route('tours.index')
                ->with('success', 'Tour deleted successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('tours.index')
                ->with('error', 'Cannot delete this toures because it is associated with other data.');
        }


        return redirect()->route('tours.index')
            ->with('success', 'Tour deleted successfully.');
    }


    public function filterByCategory(Kategori $kategori)
    {
        // Retrieve tours filtered by the category
        $tours = Tour::where('kategori_id', $kategori->id)->get();

        // Pass the filtered tours and category to the view
        return view('admin.tours.kategoridetail', compact('tours', 'kategori'));
    }
}
