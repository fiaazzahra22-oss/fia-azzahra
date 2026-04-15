<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input(key: 'search');
        if ($keyword != '') {
            $destinations = Destination::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        } else {
            $destinations = Destination::orderBy('id')->paginate(5);
        }
        return view( view: 'pages.destination.indexDestinasi', data: compact('destinations'));
    }

    public function show($id)
    {
        $destination = Destination::find($id);
        return view( view: 'pages.data', data: compact('destination'));
    }
    public function create()
    {
        return view( view: 'pages.createDestination');
    }

    public function store(Request $request)
    {
       
    Destination::create($request->all());

        return redirect( to: '/destinations')->with(key: 'success', value: 'Destination created successfully.');
    }

    public function delete($id)
    {
        $destination = Destination::find($id);
        if ($destination) {
            $destination->delete();
            return redirect( to: '/destinations')->with( key: 'success', value: 'Destination deleted successfully.');
        } else {
            return redirect( to: '/destinations')->with( key: 'error', value: 'Destination not found.');
        }
    }

    public function edit($id)
    {
        $destination = Destination::find($id);
        return view('pages.editDestination', compact('destination'));
    }
    public function update(Request $request, $id)
    {
        $destination = Destination::find($id);
        if ($destination) {
            $destination->update($request->all());
            return redirect( to: '/destinations')->with('success', value: 'Destination updated successfully.');
        } else {
            return redirect( to: '/destinations')->with('error', value: 'Destination not found.');
        }
    }
}
