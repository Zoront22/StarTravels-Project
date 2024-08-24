<?php

namespace App\Http\Controllers;

use App\Models\UnitFlight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitFlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //view data
        $data = UnitFlight::all();
        //redirect user
        return view('admin/listing-flight/listing-flight-all')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/listing-flight/listing-flight-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=> 'required',
            'country'=> 'required',
            'city'=> 'required',
            'airline'=> 'required',
            'since'=> 'required',
            'toward'=> 'required',
            'duration'=> 'required',
            'stops'=> 'required',
            'departure_date'=> 'required',
            'return_day'=> 'required',
            'class'=> 'required',
            'price'=> 'required',
            'aircraft'=> 'required',
            'features'=> 'required',
            'details'=> 'required',
        ]);

        //insert data into database
        $unit = UnitFlight::create($validateData);

        return redirect()->route('listing-flight.index');
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
        //search for the element by id
        $unit = UnitFlight::find($id);

        //move the element to edit view
        return view('admin/listing-flight/listing-flight-edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate data
        $validateData = $request->validate([
            'name'=> 'required',
            'country'=> 'required',
            'city'=> 'required',
            'airline'=> 'required',
            'since'=> 'required',
            'toward'=> 'required',
            'duration'=> 'required',
            'stops'=> 'required',
            'departure_date'=> 'required',
            'return_day'=> 'required',
            'class'=> 'required',
            'price'=> 'required',
            'aircraft'=> 'required',
            'features'=> 'required',
            'details'=> 'required',
        ]);

        //update the registry
        $unit = UnitFlight::find($id)->update(array_merge($request->all(), $validateData));

        return redirect()->route('listing-flight.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //search for the element by id
        $unit = UnitFlight::findOrFail($id);

        //unit resource
        $unit->delete();

        //redirect user
        return redirect()->route('listing-flight.index')->with('success','unit deleted');
    }
}
