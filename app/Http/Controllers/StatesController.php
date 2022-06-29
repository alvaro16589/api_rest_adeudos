<?php

namespace App\Http\Controllers;

use App\Models\states;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states= States::all();
        return $states;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $states= new States();
        $states->name = $request->input('name');
        $states->save();
        echo("guardado con exito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\states  $states
     * @return \Illuminate\Http\Response
     */
    public function show(states $states)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\states  $states
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        $states = States::find($id);
        $states->name = $request->input('name');
        $states->save();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\states  $states
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $states = States::find($id);
        $states->delete();
    }
}
