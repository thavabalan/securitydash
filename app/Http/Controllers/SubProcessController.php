<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Process;
use App\SubProcess;
use App\Update;
use Auth;

class SubProcessController extends Controller
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
        $subprocesses = SubProcess::all();
        $processes = Process::all();
        $auth = Auth::user();
        return view('process.createsub')->withProcesses($processes)->withAuth($auth)->withSubprocesses($subprocesses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subprocess = new SubProcess;
        $subprocess->name = $request -> name;
        $subprocess->p_id = $request -> p_id;
        $subprocess->save();
        return redirect()->route('process.create');
    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subprocess = SubProcess::find($id);
        $auth = Auth::user();

        return view('process.showsub')->withSubprocess($subprocess)->withAuth($auth);
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
