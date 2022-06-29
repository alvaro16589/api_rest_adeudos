<?php

namespace App\Http\Controllers;

use App\Models\jobTypes;
use Illuminate\Http\Request;

class JobTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobTypes = JobTypes::all();
        return $jobTypes;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jobTypes = new JobTypes();
        $jobTypes->name = $request->input('name');
        $jobTypes->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jobTypes  $jobTypes
     * @return \Illuminate\Http\Response
     */
    public function show(jobTypes $jobTypes)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jobTypes  $jobTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $jobType)
    {
        $jobTypes = JobTypes::find($jobType);
        $jobTypes->name = $request->input('name');
        $jobTypes->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jobTypes  $jobTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy($jobType)
    {
        $jobTypes = JobTypes::find($jobType);
        $jobTypes->delete();
    }
}
