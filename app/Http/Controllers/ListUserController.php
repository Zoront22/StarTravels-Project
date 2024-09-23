<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ListUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = DB::select('select * from users');
        $user = User::all();
        return view('admin/users/users-list')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.users-create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'birth' => 'required',
        ]);

        $user = User::create($validateData);

        return route('users.index');
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
        // Search the element by id
        $user = User::find($id);

        // return view
        return view('admin.users.users-edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate data
        $validateData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'birth' => 'required',
        ]);

        // update the registry
        $user = User::find($id)->update(array_merge($request->all(), $validateData));

        // redirect
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // find the element by id
        $users = User::findOrFail($id);

        // delete resource
        $users->delete();

        return redirect()->route('users.index')->with('success', 'user eliminated');
    }
}
