<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; 
use Illuminate\Support\Facades\Auth;

class todolistController extends Controller
{

    public function index()
    {
        $tasks = Task::all();   
         return view('todolist',compact('tasks'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $task = new Task();
            $task->task_name = $request->Name ;
            $task->save();
             return redirect('/todolist');
        }
        else {
            return redirect('/register');
        }
    }
}
