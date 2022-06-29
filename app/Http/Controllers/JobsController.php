<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = DB::table('jobs')->orderBy('id')
             ->join('users', 'jobs.iduser', '=', 'users.id')
             ->join('job_types', 'jobs.idtype', '=', 'job_types.id')
             ->join('states', 'jobs.idstate', '=', 'states.id')
             ->select('jobs.*', 'users.nameac', 'job_types.name as type', 'states.name as state')
             ->get();
        return $jobs;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jobs = new Jobs();
        $jobs->title = $request->input('title');
        $jobs->detail = $request->input('detail');
        $jobs->date = $request->input('date');
        $jobs->price = $request->input('price');
        $jobs->idtype = $request->input('idtype');
        $jobs->iduser = $request->input('iduser');
        $jobs->idstate = $request->input('idstate');
        $jobs->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $job)
    {
        $jobs = Jobs::find($job);
        $jobs->title = $request->input('title');
        $jobs->detail = $request->input('detail');
        $jobs->date = $request->input('date');
        $jobs->price = $request->input('price');
        $jobs->idtype = $request->input('idtype');
        $jobs->iduser = $request->input('iduser');
        $jobs->idstate = $request->input('idstate');
        $jobs->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy($job)
    {
        $jobs = Jobs::find($job);
        $jobs->delete();
    }
}
