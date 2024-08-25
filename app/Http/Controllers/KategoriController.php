<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('Kategori.index', compact('kategori'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('Kategori.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        Kategori::create($request->all());

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

        $kategori->update($request->all());

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori deleted successfully.');
    }
}
