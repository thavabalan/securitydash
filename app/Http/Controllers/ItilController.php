<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itil;
use Auth;

class ItilController extends Controller
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
        $itils = Itil::all();
        $auth = Auth::user();
        return view('itil.create')->withItils($itils)->withAuth($auth);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itil = new Itil;
       $itil->name = $request -> name;
       $itil->save();
       return redirect()->route('itil.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itil = Itil::find($id);
        $auth = Auth::user();

        return view('itil.show')->withItil($itil)->withAuth($auth);
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
        $itil = Itil::find($id);
        $itil ->requirements()->detach();
        $itil->delete();
        return redirect()->route('itil.create');



    }
}
