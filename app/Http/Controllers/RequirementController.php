<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirement;
use App\Category;
use App\Concept;
use App\Governance;
use App\Itil;
use Auth;

class RequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $requirements = Requirement::all();
        $auth = Auth::user();
        return view('requirement.index')->withRequirements($requirements)->withAuth($auth);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $requirements = Requirement::all();
        $categories = Category::all();
        $concepts = Concept::all();
        $governances = Governance::all();
        $itils = Itil::all();
        $auth = Auth::user();
        
        return view('requirement.create')->withRequirements($requirements)->withCategories($categories)->withConcepts($concepts)->withGovernances($governances)->withItils($itils)->withAuth($auth);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requirement = new Requirement;
        $requirement -> name = $request -> name;
        $requirement -> business_priority = $request -> business_priority;
        $requirement -> current_risk = $request -> current_risk;
        $requirement -> c_id = $request -> category;
        $requirement -> maturity_level = $request -> maturity_level;
        $requirement -> save();
        $requirement -> dependency()->sync($request->dependency,false);
        $requirement -> concepts()->sync($request->concept,false);
        $requirement -> governance()->sync($request->governance,false);
        $requirement -> itils()->sync($request->itils,false);

        return redirect()->route('requirement.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requirement = Requirement::find($id);
        $auth = Auth::user();

        return view('requirement.show')->withRequirement($requirement)->withAuth($auth);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $requirement = Requirement::find($id);
      $categories = Category::all();
      $cats = array();
      foreach ($categories as $category) {
          $cats[$category->id] = $category->name;
      }
      $concepts = Concept::all();
      $con = array();
      foreach ($concepts as $concept) {
          $cons[$concept->id] = $concept->name;
      }
      $governances = Governance::all();
      $gov = array();
      foreach ($governances as $governance) {
          $gov[$governance->id] = $governance->name;
      }  
      $itils = Itil::all();
      $iti = array();
      foreach ($itils as $itil) {
          $iti[$itil->id] = $itil->name;
      }  
      $auth = Auth::user();

      return view('requirement.edit')->withRequirement($requirement)->withCategories($cats)->withConcepts($cons)->withGovernances($gov)->withItils($iti)->withAuth($auth);
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
        $requirement = Requirement::find($id);
      $requirement->name = $request->input('name');
      $requirement->business_priority = $request->input('business_priority');
      $requirement->current_risk = $request->input('current_risk');
      $requirement->maturity_level = $request->input('maturity_level');
      $requirement->c_id = $request->input('category');
      $requirement->save();
     
      return redirect()->route('requirement.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $requirement = Requirement::find($id);
        $requirement ->dependency()->detach();
        $requirement ->companies()->detach();
        $requirement ->departments()->detach();
        $requirement ->concepts()->detach();
        $requirement ->governance()->detach();
        $requirement ->itils()->detach();




        $requirement->delete();
        return redirect()->route('requirement.create');
    }
}
