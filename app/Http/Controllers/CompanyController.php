<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Requirement;
use Auth;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $companies = Company::all();
        $auth = Auth::user();
        return view('company.create')->withCompanies($companies)->withAuth($auth);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $company = Company::find($id);
        $requirements = Requirement::all();
        $auth = Auth::user();
        return view('company.show')->withCompany($company)->withRequirements($requirements)->withAuth($auth);
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
        $company = Company::find($id);
        $company->requirements()->attach($request->r_id,['status'=>$request->status,'tool_used'=>$request->tool_used,'level_of_maturity'=>$request->level_of_maturity,'linux_covered'=>$request->linux_covered,'windows_covered'=>$request->windows_covered,'clients_covered'=>$request->clients_covered,'servers_covered'=>$request->servers_covered,'terminal_c_drive_covered'=>$request->terminal_c_drive_covered,'pti'=>$request->pti,'response_time_c'=>$request->response_time_c,'response_time_i'=>$request->response_time_i,'performance_issue'=>$request->performance_issue,'mean_time_to_response_c'=>$request->mean_time_to_response_c,'mean_time_to_response_i'=>$request->mean_time_to_response_i,'cost'=>$request->cost,'contract_expiry_date'=>$request->contract_expiry_date,'license_required'=>$request->license_required,'hyperlink_documentation'=>$request->hyperlink_documentation,'comments'=>$request->comments]);
        return redirect()->route('company.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('company.create');
    }

    public function upload(Request $request){
        $company = new Company;
        $company -> name = $request -> name;
        $company ->save();

        return redirect()->route('company.create');
    }
}
