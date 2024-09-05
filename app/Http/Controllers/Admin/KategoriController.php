<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.Kategori.index', compact('kategori'));
    }

    // Show the form for creating a new resource.
    // public function create()
    // {
    //     return view('Kategori.create');
    // }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate as an image

        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/kategori'), $imageName);
            $data['image'] = 'images/kategori/' . $imageName; // Save the image path in the database
        }

        Kategori::create($data);

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori created successfully.');
    }

    // Display the specified resource.
    public function show(Kategori $kategori)
    {
        return view('Kategori.show', compact('kategori'));
    }

    // Show the form for editing the specified resource.
    public function edit(Kategori $kategori)
    {
        return view('Kategori.edit', compact('kategori'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        // Ambil data dari request, kecuali untuk gambar
        $data = $request->except(['image']);

        // Jika ada gambar baru, proses penyimpanan gambar
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($kategori->image && file_exists(public_path($kategori->image))) {
                unlink(public_path($kategori->image));
            }

            // Simpan gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/kategori'), $imageName);
            $data['image'] = 'images/kategori/' . $imageName; // Perbarui jalur gambar di database
        }

        // Perbarui data model dengan data baru
        $kategori->update($data);
        return redirect()->route('kategori.index')
            ->with('success', 'Kategori updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Kategori $kategori)
    {
        try {
            $kategori->delete();
            return redirect()->route('kategori.index')
                ->with('success', 'Kategori deleted successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('kategori.index')
                ->with('error', 'Cannot delete this Kategori because it is associated with other data.');
        }
    }
}
