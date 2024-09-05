<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    //
    public function index()
    {
        $sponsor = Sponsor::all();
        return view('admin.sponsor.index', compact('sponsor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:45',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Handle image uploads

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/sponsor'), $imageName);
            $data['image'] = 'images/sponsor/' . $imageName; // Save the image path in the database
        }

        Sponsor::create($data);

        return redirect()->route('sponsor.index')->with('success', 'sponsor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sponsor $sponsor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sponsor $sponsor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        //
        $request->validate([
            'name' => 'required|string|max:45',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

         // Ambil data dari request, kecuali untuk gambar
         $data = $request->except(['image']);

         // Jika ada gambar baru, proses penyimpanan gambar
         if ($request->hasFile('image')) {
             // Hapus gambar lama jika ada
             if ($sponsor->image && file_exists(public_path($sponsor->image))) {
                 unlink(public_path($sponsor->image));
             }

             // Simpan gambar baru
             $imageName = time() . '.' . $request->image->extension();
             $request->image->move(public_path('images/sponsor'), $imageName);
             $data['image'] = 'images/sponsor/' . $imageName; // Perbarui jalur gambar di database
         }

         // Perbarui data model dengan data baru
         $sponsor->update($data);

         return redirect()->route('sponsor.index')
             ->with('success', 'sponsor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sponsor $sponsor)
    {
        $sponsor->delete();
        return redirect()->route('sponsor.index')
            ->with('success', 'sponsor deleted successfully.');
    }
}
