<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Requirement;
use App\SubRequirement;
class SubrequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $functions = SubRequirement::all();
       $requirements = Requirement::all();
       $auth = Auth::user();
       return view('requirement.function')->withFunctions($functions)->withAuth($auth)->withRequirements($requirements);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subprocess = new SubRequirement;
        $subprocess->name = $request -> name;
        $subprocess->req_id = $request -> req_id;
        $subprocess->start_time = $request -> start_time;
        $subprocess->end_time = $request -> end_time;
        $subprocess->latest_start_time = $request -> latest_start_time;
        $subprocess->latest_end_time = $request -> latest_end_time;
        $subprocess->save();
        return redirect()->route('function.create');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
