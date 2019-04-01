<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{

    public function show(){
        $data["tasks"] = Task::all();

        return view("tasks/show",$data);
    }

}
