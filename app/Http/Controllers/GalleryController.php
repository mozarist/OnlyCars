<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::orderBy("created_at", "desc")->paginate(10);
        return view('gallery.gallery', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_gallery' => 'required|string',
            'gambar_gallery' => 'nullable|image|mimes:jpg,jpeg,png,jfif,webp|max:5120',
            'tanggal_gallery' => 'required|date'
        ]);

        if ($request->hasFile('gambar_gallery')) {
            $path = $request->file('gambar_gallery')->store('images', 'public');
            $validatedData['gambar_gallery'] = $path;
        }
        ;

        Gallery::create($validatedData);

        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery = Gallery::findOrFail($id);

        $validatedData = $request->validate([
            'nama_gallery' => 'required|string',
            'gambar_gallery' => 'nullable|image|mimes:jpg,jpeg,png,jfif,webp|max:5120',
            'tanggal_gallery' => 'required|date'
        ]);

        if ($request->hasFile('gambar_gallery')) {
            if ($gallery->gambar_gallery) {
                Storage::disk('public')->delete($gallery->gambar_gallery);
            }
            ;
            $path = $request->file('gambar_gallery')->store('images', 'public');
            $validatedData['gambar_gallery'] = $path;
        }
        ;

        $gallery->update($validatedData);

        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->gambar_gallery) {
            Storage::disk('public')->delete($gallery->gambar_gallery);
        }

        $gallery->delete();
        return redirect('gallery');
    }
}
