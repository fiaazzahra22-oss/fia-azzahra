<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        
        if ($keyword != '') {
            $destinations = Destination::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        } else {
            $destinations = Destination::orderBy('id')->paginate(5);
        }

        return view('pages.destination.indexDestinasi', compact('destinations'));
    }

    public function show($id)
    {
        $destination = Destination::findOrFail($id);
        // Pastikan file ini ada di resources/views/pages/destination/data.blade.php
        return view('pages.destination.data', compact('destination'));
    }

    public function create()
    {
        // Menampilkan form tambah (tanpa perlu mencari $id)
        return view('pages.destination.createDestination');
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
        ]);

        Destination::create($validated);

        return redirect()->route('destination.index')
            ->with('success', 'Destination created successfully.');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        // Pastikan file ini ada di resources/views/pages/destination/editDestination.blade.php
        return view('pages.destination.editDestination', compact('destination'));
    }
    
    public function update(Request $request, $id) 
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
        ]);

        $destination = Destination::findOrFail($id);
        $destination->update($validated);

        return redirect()->route('destination.index')
            ->with('success', 'Destination updated successfully.');
    }

    public function delete($id)
    {
        $destination = Destination::find($id);

        if ($destination) {
            $destination->delete();
            return redirect()->route('destination.index')
                ->with('success', 'Destination deleted successfully.');
        }

        return redirect()->route('destination.index')
            ->with('error', 'Destination not found.');
    }
}