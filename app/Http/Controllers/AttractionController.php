<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;
use App\Models\category;

class AttractionController extends Controller
{
    public function index() {
        $attraction = Attraction::all();
        return view('pages.attraction.indexAttraction', compact('attraction'));
    }

    public function create() {
        return view('pages.attraction.create');
    }

    public function store(Request $request) {
        Attraction:: create($request->all());
        return redirect('/attraction')->with('success', 'data tersimpan!');
    }
    
    public function edit($id) {
        $attraction = Attraction::find($id);
        return view('pages.attraction.edit', compact('attraction'));
    }

    public function update(Request $request, $id) {
        $attraction = Attraction::find($id);
        $attraction->update($request->all());
        return redirect('/attraction')->with('success', 'data diupdate!');
    }

    public function delete($id) {
        $attraction = Attraction::find($id);
        $attraction->delete();
        return redirect('/attraction')->with('success', 'data dihapus!');
    }

}
