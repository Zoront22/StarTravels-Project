<?php

namespace App\Http\Controllers;

use App\Models\unidadesImagenes;
use Illuminate\Http\Request;

class UnidadesImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = unidadesImagenes::all();
        return $data;
        //return view("admin.index.index", ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = unidadesImagenes::all();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $data = unidadesImagenes::all();
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show($unidadesImagenes)
    {
        $data = unidadesImagenes::all();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(unidadesImagenes $unidadesImagenes)
    {
        $data = unidadesImagenes::all();
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, unidadesImagenes $unidadesImagenes)
    {
        $data = unidadesImagenes::all();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(unidadesImagenes $unidadesImagenes)
    {
        $data = unidadesImagenes::all();
        return $data;
    }
}
