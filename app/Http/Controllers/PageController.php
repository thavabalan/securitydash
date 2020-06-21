<?php

namespace App\Http\Controllers;
use App\Company;
use App\Department;
use App\Requirement;
use App\Task;
use App\Concept;
use App\Governance;
use Chart;
use Auth;

use Illuminate\Http\Request;
use App\Charts\RequirementChart;

class PageController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function index(){

        $company=Company::all()->count();
        $requirement=Requirement::all()->count();
        $department=Department::all()->count();
        $tasks=Task::all();
        $bar = new RequirementChart;
        $Department1=Department::all()->pluck('name');
        $Department2=Department::withCount('requirements')->pluck('requirements_count');
        $risk = Requirement::sum('current_risk');
        $requirement1=Requirement::all()->pluck('name');
        $requirement2=Requirement::all()->pluck('current_risk');
        $requirement3=Requirement::all()->pluck('maturity_level');
        $concepts=Concept::all()->pluck('name');
        $concepts1=Concept::withCount('requirements')->pluck('requirements_count');
        $governances=Governance::all()->pluck('name');
        $governances1=Governance::withCount('requirements')->pluck('requirements_count');
        $bar->labels(['Requirement','Vendor','Department']);
        $bar->dataset('Count','bar',[$requirement,$company,$department])->backgroundColor('#689F38');
        $bar1 = new RequirementChart;
        $bar1->labels($Department1);
        $bar1->dataset('count','pie',$Department2)->backgroundColor(collect(['#689F38','#D3D3D3', '#880E4F']));;

        $bar2 = new RequirementChart;
        $bar2->labels($requirement1);
        $bar2->dataset('Count','line',$requirement2)->color('#E53935')->backgroundColor('#E53935','#D3D3D3');
        $requirement4=json_decode($requirement1);
        $bar3 = new RequirementChart;
        $bar3->labels($requirement4);
        $bar3->dataset('count','radar',$requirement3)->backgroundColor(collect(['#689F38','#E53935', '#880E4F']));

        $bar4 = new RequirementChart;
        $bar4->labels($concepts);
        $bar4->dataset('count','doughnut',$concepts1)->backgroundColor(collect(['#689F38','#E53935', '#880E4F']));

        $bar5 = new RequirementChart;
        $bar5->labels($governances);
        $bar5->dataset('count','doughnut',$governances1)->backgroundColor(collect(['#689F38','#E53935', '#880E4F']));
        $auth = Auth::user();

        return view('index',compact('bar','bar1','bar2','bar3','bar4','bar5','tasks','risk'))->withCompany($company)->withRequirement($requirement)->withDepartment($department)->withAuth($auth);

    }

    public function chart(){
        
        $charts=Requirement::all()->count();
        $company=Company::all()->count();
        $department1=Department::all();

        $department=Department::all()->count();
        $bar = new RequirementChart;
        $bar->labels(['Requirement','Company','Vendor']);
        $bar->dataset('My dataset 1','bar',[$charts,$company,$department]);

        return view('chart',compact('charts','bar','department1'));
    }
    public function chess(){
        $auth = Auth::user();

        return view('chess.index')->withAuth($auth);
    }

    public function overview(){
        $auth = Auth::user();
        $requirements = Requirement::withCount('subrequirement')->get();
        return view('overview')->withAuth($auth)->withRequirements($requirements);
    }
    public function hoq(){
        $auth = Auth::user();
        $companies=Company::all();

        $requirements = Requirement::withCount('subrequirement')->get();
        return view('houseofquality')->withAuth($auth)->withRequirements($requirements)->withCompanies($companies);
    }
    public function bayesian(){
        $auth = Auth::user();
        $companies=Company::all();

        $requirements = Requirement::withCount('subrequirement')->get();
        return view('bayesian')->withAuth($auth)->withRequirements($requirements)->withCompanies($companies);
    }
    public function gant(){
        $auth = Auth::user();

        return view('gant.index')->withAuth($auth);;
    }

    public function pert(){

        $auth = Auth::user();

        return view('pert')->withAuth($auth);
    }

}
