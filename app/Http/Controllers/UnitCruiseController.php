<?php

namespace App\Http\Controllers;

use App\Models\UnitCruise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitCruiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //data view
        $data = UnitCruise::all();
        return view('admin/listing-cruise/listing-cruise-all')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/listing-cruise/listing-cruise-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //var data
        //return "awedfasdf";
        try {

            $validateData = $request->validate([
                'name'=> 'required',
                'country'=>'required',
                'city'=>'required',
                'model'=> 'required',
                'manufacturer'=> 'required',
                'year'=> 'required',
                'capacity'=> 'required',
                'length'=> 'required',
                'rent'=> 'required',
                'rent_type'=> 'required',
                'cabins'=> 'required',
                'crew'=> 'required',
                'features'=> 'required',
                'details'=> 'required',
            ]);

            //insert data - (PROBLEM)
            $unit = UnitCruise::create($validateData);

            //return user
            return redirect()->route('listing-cruise.index')->with('success','form submit');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }


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
        $unit = UnitCruise::findOrFail($request->id);

        // Update status
        $unit->status = $request->status;
        $unit->save();

        // Return request
        return response()->json([
            'message' => 'Status Updated',
            'unit' => $unit,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //search for the element bi id
        $unit = UnitCruise::find($id);

        //move the element to edit form
        return view('admin/listing-cruise/listing-cruise-edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate data
        try {

            $validateData = $request->validate([
                'name'=> 'required',
                'country'=>'required',
                'city'=>'required',
                'model'=> 'required',
                'manufacturer'=> 'required',
                'year'=> 'required',
                'capacity'=> 'required',
                'length'=> 'required',
                'rent'=> 'required',
                'rent_type'=> 'required',
                'cabins'=> 'required',
                'crew'=> 'required',
                'features'=> 'required',
                'details'=> 'required',
            ]);

            //insert data - (PROBLEM)
            $unit = UnitCruise::find($id)->update(array_merge($request->all(), $validateData));

            //return user
            return redirect()->route('listing-cruise.index')->with('success','form submit');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //search for the element by id
        $unit = UnitCruise::findOrFail($id);
         //delete resource
        $unit->delete();
         //redirect user
        return redirect()->route('listing-cruise.index')->with('success','unit eliminated');
    }
}
