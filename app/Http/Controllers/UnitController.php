<?php

namespace App\Http\Controllers;


use App\Models\Unit ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Unit::all();
        //return $data;
        // DB::select('select * from unit');
        return view('admin/listing-car/listing-car-all')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/listing-car/listing-car-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=> 'required',
            'country'=>'required',
            'city'=>'required',
            'model'=> 'required',
            'manufacture'=> 'required',
            'year'=> 'required',
            'capacity'=> 'required',
            'driver' => 'required',
            'rent'=> 'required',
            'rent_type'=> 'required',
            'images'=> 'required|image',
            'features'=> 'required',
            'details'=> 'required',
        ]);

        // $unit = new Unit();
        // $unit->name = $request->name;
        // $unit->country = $request->country;
        // $unit->city = $request->city;

        // image submit
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('cars', 'storage');
            // $path = storage::disk('cars')->put('image', file_get_contents($request->file($images)->getPathname()) ); // Store the image in the specified director
            // $validateData['images'] = $path; // Add the image path to the validated data
            $url = storage::url($path);

            // return back()->with('success', 'Imagen subida con éxito')->with('url', $url);
        }

        //$unit->save();

        $unit = Unit::create($validateData);
        // DB::table('unit')->insert([
        //     'name'=> $validateData['name'],
        //     'country'=> $validateData['country'],
        //     'city'=> $validateData['city'],
        //     'model'=> $validateData['model'],
        //     'manufacture'=> $validateData['manufacture'],
        //     'year'=> $validateData['year'],
        //     'capacity'=> $validateData['capacity'],
        //     'driver'=> $validateData['driver'],
        //     'rent'=> $validateData['rent'],
        //     'rent_type'=> $validateData['rent_type'],
        //     'features'=> $validateData['features'],
        //     'details'=> $validateData['details'],
        // ]);

        return redirect()->route('listing-car.index')->with('success','form sending');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Update Status (active/inactive)
     */
    public function updateStatus(Request $request)
    {
        // search the element by id
        $unit = Unit::findOrFail($request->id);

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
        //search for the element bi id
        $unit = Unit::find($id);

        //move the element to edit form
        return view('admin/listing-car/listing-car-edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate data
        $validateData = $request->validate([
            'name'=> 'required',
            'country'=>'required',
            'city'=>'required',
            'model'=> 'required',
            'manufacture'=> 'required',
            'year'=> 'required',
            'capacity'=> 'required',
            'driver' => 'required',
            'rent'=> 'required',
            'rent_type'=> 'required',
            'features'=> 'required',
            'details'=> 'required',
        ]);

        //update the registry
        $unit = Unit::find($id)->update(array_merge($request->all(), $validateData));
        //DB::table('unit')->where('id', $id)->update([
        //    'name'=> $validateData['name'],
        //    'country'=> $validateData['country'],
        //    'city'=> $validateData['city'],
        //    'model'=> $validateData['model'],
        //    'manufacture'=> $validateData['manufacture'],
        //    'year'=> $validateData['year'],
        //    'capacity'=> $validateData['capacity'],
        //    'driver'=> $validateData['driver'],
        //    'rent'=> $validateData['rent'],
        //    'rent_type'=> $validateData['rent_type'],
        //    'features'=> $validateData['features'],
        //    'details'=> $validateData['details'],
        //]);

        return redirect()->route('listing-car.index')->with('success','updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //search for the element by id
        $unit = Unit::findOrFail($id);
        //DB::table('unit')->wheres('id', $id)->delete();

        //delete resource
        $unit->delete();

        //redirect user
        return redirect()->route('listing-car.index')->with('success','unit eliminated');
    }
}
