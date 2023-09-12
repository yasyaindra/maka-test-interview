<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->address);
        $user = User::create([
            'name' => $request->name,
            'address' => $request->address,
            'image' => $request->file('image')->store('asset/user','public')
        ]);



        return $user;

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user = User::where('id', $user->id)->get();
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();


        if($request->file('image')){
            $data['image'] = $request->file('image')->store('assets/user', 'public');
        }

        $user = User::findOrFail($user->id);

        // dd($request->name);

        $user->update($data);

        return $user;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        $response = [
                'message'=>"Data berhasil dihapus",
                'data'=> $user,
        ];

        return $response;
    }

    public function search(Request $request) {

        $user = User::query();

        if($request->name){
            $user->where('name', 'like', '%'.$request->name.'%');
        }
        
        if($request->address) {
            $user->where('address', 'like', '%'.$request->address.'%');
        }

        return $user->first();

    }
}
