<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= DB::table('users')->orderBy('id')
        ->join('type_users', 'users.idtype', '=', 'type_users.id')
        ->join('states', 'users.idstate', '=', 'states.id')
        ->select('users.*', 'users.nameac', 'type_users.name as type', 'states.name as state')
        ->get();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->input('name');
        $users->lastname = $request->input('lastname');
        $users->nameac = $request->input('nameac');
        $users->idtype = $request->input('idtype');
        $users->idstate = $request->input('idstate');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->lastname = $request->input('lastname');
        $users->nameac = $request->input('nameac');
        $users->idtype = $request->input('idtype');
        $users->idstate = $request->input('idstate');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
    }
}
