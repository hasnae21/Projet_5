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
        // affichage on Welocome
         return view('welcome', compact('tasks'));
    }

    public function store(Request $request)
    {
            $task = new Task();
            $task->task_name = $request->Name ;
            $task->save();
             return redirect('/dashboard');
    }
    
}
