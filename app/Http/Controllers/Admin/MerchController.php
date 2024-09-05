<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Merch;
use Illuminate\Http\Request;

class MerchController extends Controller
{
    //
    public function index()
    {
        $merch = Merch::all();
        return view('admin.merch.index', compact('merch'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate as an image
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/merch'), $imageName);
            $data['image'] = 'images/merch/' . $imageName; // Save the image path in the database
        }

        Merch::create($data);

        return redirect()->route('merch.index')
            ->with('success', 'Merch created successfully.');
    }

    public function update(Request $request, Merch $merch)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate as an image
        ]);

        // Ambil data dari request, kecuali untuk gambar
        $data = $request->except(['image']);

        // Jika ada gambar baru, proses penyimpanan gambar
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($merch->image && file_exists(public_path($merch->image))) {
                unlink(public_path($merch->image));
            }

            // Simpan gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/merch'), $imageName);
            $data['image'] = 'images/merch/' . $imageName; // Perbarui jalur gambar di database
        }

        // Perbarui data model dengan data baru
        $merch->update($data);

        return redirect()->route('merch.index')
            ->with('success', 'merch updated successfully.');
    }


    public function destroy(Merch $merch)
    {
        $merch->delete();
        return redirect()->route('merch.index')
            ->with('success', 'merch deleted successfully.');
    }
}
