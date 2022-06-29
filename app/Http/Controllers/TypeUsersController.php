<?php

namespace App\Http\Controllers;

use App\Models\typeUsers;
use Illuminate\Http\Request;

class TypeUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeUsers = TypeUsers :: all();
        return $typeUsers;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typeUsers = new TypeUsers();
        $typeUsers->name = $request->input('name');
        $typeUsers->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\typeUsers  $typeUsers
     * @return \Illuminate\Http\Response
     */
    public function show(typeUsers $typeUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\typeUsers  $typeUsers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $typeUser)
    {
        $typeUsers = TypeUsers::find($typeUser);
        $typeUsers->name = $request->input('name');
        $typeUsers->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\typeUsers  $typeUsers
     * @return \Illuminate\Http\Response
     */
    public function destroy($typeUser)
    {
        $typeUsers = TypeUsers::find($typeUser);
        $typeUsers->delete();
    }
}
