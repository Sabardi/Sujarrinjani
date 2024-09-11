<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gambar;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    //
    public function index()
    {
        $gambar = Gambar::all();
        return view('admin.gambar.index', compact('gambar'));
    }


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

        Gambar::create($data);

        return redirect()->route('gambar.index')
            ->with('success', 'Gambar created successfully.');
    }

    // Display the specified resource.
    public function show(Gambar $gambar)
    {
        return view('Kategori.show', compact('gambar'));
    }

    // // Show the form for editing the specified resource.
    // public function edit(Gambar $gambar)
    // {
    //     return view('Kategori.edit', compact('gambar'));
    // }

    // Update the specified resource in storage.
    public function update(Request $request, Gambar $gambar)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        // Ambil data dari request, kecuali untuk gambar
        $data = $request->except(['image']);

        // Jika ada gambar baru, proses penyimpanan gambar
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($gambar->image && file_exists(public_path($gambar->image))) {
                unlink(public_path($gambar->image));
            }

            // Simpan gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/gambar'), $imageName);
            $data['image'] = 'images/gambar/' . $imageName; // Perbarui jalur gambar di database
        }

        // Perbarui data model dengan data baru
        $gambar->update($data);
        return redirect()->route('gambar.index')
            ->with('success', 'Gambar updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Gambar $gambar)
    {
        try {
            $gambar->delete();
            return redirect()->route('gambar.index')
                ->with('success', 'Gambar deleted successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('gambar.index')
                ->with('error', 'Cannot delete this Kategori because it is associated with other data.');
        }
    }
}
