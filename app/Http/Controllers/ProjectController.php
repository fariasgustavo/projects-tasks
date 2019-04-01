<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;
use App\Project;
use App\Task;

class ProjectController extends Controller
{   
    public function show(){
        $data["projects"] = Project::all();
        return view('projects/show',$data);
    }

    public function edit(int $id){
        $data["project"] = Project::where("id",$id)->first();
        $data["tasks"] = Task::where("projects_id",$id)->get();

        return view('projects/edit',$data);
    }
}
