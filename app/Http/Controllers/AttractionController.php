<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Destination;



class AttractionController extends Controller
{
    public function index() {
        $attractions = Attraction::all();
        return view('pages.attraction.indexAttraction', compact('attractions'));
    }

    public function create() 
    {
        $destination = Destination::all();
        return view( view: 'pages.attractions.create', data: compact('destinations'));
    }

    public function store(Request $request) {
         $validated = $request->validate([
        'destination_id' => 'required',
        'name'           => 'required|string|max:255',
        'description'    => 'nullable',
    ]);
        \App\Models\Attraction::create($validated);

        return redirect()->route( route: 'attraction.index')
            ->with( key:'success', value:'Attraction created successfully.');
    }
    
    public function edit($id) 
    {
        $destination = Destination::all();
        $attraction = \App\Models\Attraction::findOrFail($id);
        return view('pages.attraction.edit', compact('attraction', 'destination'));
    }

    public function update(Request $request, $id) {
         $validated = $request->validate([
        'destination_id' => 'required',
        'name'           => 'required|string|max:255',
        'description'    => 'nullable',
    ]);

        $attraction = \App\Models\Attraction::findOrFail($id);
        $attraction->update($validated);

        return redirect()->route( route: 'attraction.index')
            ->view( key: 'success', value: 'Attraction update successfully.');
    }

    public function delete($id) {
        $attraction = Attraction::find($id);
        $attraction->delete();
        return redirect('/attraction')->with('success', 'data dihapus!');
    }

   
};
