<?php

namespace App\Http\Controllers;
use App\Task;
use App\Link;
use Illuminate\Http\Request;

class GanttController extends Controller
{
    public function get(){
        $tasks = new Task();
        $links = new Link();
 
        return response()->json([
            "data" => $tasks->orderBy('sortorder')->get(),
            "links" => $links->all()
        ]);
    }
}
