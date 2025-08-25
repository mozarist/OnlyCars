<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merchandise = Merchandise::orderBy("created_at", "desc")->paginate(10);
        return view('merchandise.merchandise', compact('merchandise'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchandise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_merchandise' => 'required|string',
            'gambar_merchandise' => 'nullable|image|mimes:jpg,jpeg,png,jfif,webp|max:5120',
            'harga_merchandise' => 'required|integer',
            'deskripsi_merchandise' => 'required|string'
        ]);

        if ($request->hasFile('gambar_merchandise')) {
            $path = $request->file('gambar_merchandise')->store('images', 'public');
            $validatedData['gambar_merchandise'] = $path;
        }

        Merchandise::create($validatedData);

        return redirect()->route('merchandise.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $merchandise = Merchandise::findOrFail($id);
        return view('merchandise.show', compact('merchandise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merchandise = Merchandise::findOrFail($id);
        return view('merchandise.edit', compact('merchandise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $merchandise = Merchandise::findOrFail($id);

        $validatedData = $request->validate([
            'nama_merchandise' => 'required|string',
            'gambar_merchandise' => 'nullable|image|mimes:jpg,jpeg,png,jfif,webp|max:5120',
            'harga_merchandise' => 'required|integer',
            'deskripsi_merchandise' => 'required|string'
        ]);

        if ($request->hasFile('gambar_merchandise')) {
            if ($merchandise->gambar_merchandise) {
                Storage::disk('public')->delete($merchandise->gambar_merchandise);
            }
            $path = $request->file('gambar_merchandise')->store('images', 'public');
            $validatedData['gambar_merchandise'] = $path;
        }

        $merchandise->update($validatedData);

        return redirect()->route('merchandise.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $merchandise = Merchandise::findOrFail($id);

        if ($merchandise->gambar_merchandise) {
            Storage::disk('public')->delete($merchandise->gambar_merchandise);
        }

        $merchandise->delete();
        return redirect()->route('merchandise.index');
    }
}