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

    public function create(){
        return view('projects/create');
    }

    public function update(Request $request){
        $project = Project::find($id);

        $project->description = $request->description;
        $project->title = $request->title;

        return redirect()->with("status","Project updated!");
    }

    public function delete(int $id){
        Project::where("id",$id)->delete();

        return redirect("/")->with("status","Project deleted!");
    }

    public function new(Request $request){
        $project = new Project;

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $project->description = $request->description;
        $project->title = $request->title;
        
        $project->save();

        return redirect("project/create")->with("status","Project created!");
    }
}
