<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy("created_at","desc")->paginate(10);
        return view('event.event', compact('events'));
    }

    public function create()
    {
        return view('event.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_event' => 'required|string',
            'gambar_event' => 'nullable|image|mimes:jpg,jpeg,png,jfif,webp|max:5120',
            'tanggal_event' => 'required|date',
            'deskripsi_event' => 'required|string',
            'lokasi_event' => 'required|string',
        ]);

        if ($request->hasFile('gambar_event')) {
            $path = $request->file('gambar_event')->store('images', 'public');
            $validatedData['gambar_event'] = $path;
        }
        ;

        Event::create($validatedData);

        return redirect()->route('events.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
