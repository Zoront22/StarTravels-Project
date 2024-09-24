<?php

namespace App\Http\Controllers;

use App\Models\UnitHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //view data
        $data = UnitHotel::all();
        //redirect user
        return view('admin/listing-hotel/listing-hotel-all')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/listing-hotel/listing-hotel-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'room'=> 'required',
            'type'=> 'required',
            'ac'=> 'required',
            'meal'=> 'required',
            'cancellation_charges'=> 'required',
            'capacity'=> 'required',
            'phone'=> 'required',
            'rent'=> 'required',
            'details'=> 'required',
        ]);

        //insert data into database
        $unit = UnitHotel::create($validateData);

        return redirect()->route('listing-hotel.index');
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
        $unit = UnitHotel::findOrFail($request->id);

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
        //search the element by id
        $unit = UnitHotel::find($id);

        //move the element to the view
        return view('admin/listing-hotel/listing-hotel-edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate data
        $validateData = $request->validate([
            'room'=> 'required',
            'type'=> 'required',
            'ac'=> 'required',
            'meal'=> 'required',
            'cancellation_charges'=> 'required',
            'capacity'=> 'required',
            'phone'=> 'required',
            'rent'=> 'required',
            'details'=> 'required',
        ]);

        //update the registry
        $unit = UnitHotel::find($id)->update(array_merge($request->all(), $validateData));

        return redirect()->route('listing-hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //search for the element by id
        $unit = UnitHotel::findOrFail($id);

        //delete resource
        $unit->delete();

        //redirect user
        return redirect()->route('listing-hotel.index')->with('success','Unit deleted');
    }
}
