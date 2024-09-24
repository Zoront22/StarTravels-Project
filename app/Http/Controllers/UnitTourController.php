<?php

namespace App\Http\Controllers;

use App\Models\UnitHotel;
use App\Models\UnitTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitTourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //view data
        $data = UnitTour::all();
        //redirect user
        return view('admin/listing-tour/listing-tour-all')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/listing-tour/listing-tour-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate data
        $validateData = $request->validate([
            'name'=> 'required',
            'country'=> 'required',
            'city'=> 'required',
            'seats'=> 'required',
            'duration'=> 'required',
            'price'=> 'required',
            'embed'=> 'required',
            'details'=> 'required',
        ]);

        //insert data into database
        $unit = UnitTour::create($validateData);

        return redirect()->route('listing-tour.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update Status (active/inactive)
     */
    public function updateStatus(Request $request)
    {
        // search the element by id
        $unit = UnitTour::findOrFail($request->id);

        // Update status
        $unit->status = $request->status;
        $unit->save();

        // Return request
        return response()->json([
            'message' => 'Estado actualizado con éxito',
            'unit' => $unit,
        ], 200);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //search for the element by id
        $unit = UnitTour::find($id);

        //move the element to edit form
        return view('admin/listing-tour/listing-tour-edit', compact('unit'));
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
            'seats'=> 'required',
            'duration'=> 'required',
            'price'=> 'required',
            'embed'=> 'required',
            'details'=> 'required',
        ]);

        //update the registry
        $unit = UnitTour::find($id)->update(array_merge($request->all(), $validateData));

        return redirect()->route('listing-tour.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //search for the element by id
        $unit = UnitTour::findOrFail($id);

        //delete resource
        $unit->delete();

        //redirect user
        return redirect()->route('listing-tour.index')->with('success','Unit deleted');
    }
}
