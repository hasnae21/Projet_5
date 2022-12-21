<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; 
use Illuminate\Support\Facades\Auth;

class todolistController extends Controller
{
    // afficher on Welocome
    public function index()
    {
        $tasks = Task::all();   
         return view('welcome', compact('tasks'));
    }
    
    // public function edit($id)
    // {
    //     $task = Task::find($id);
    //     return view('dashboard', compact('task')); 
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'task_name'=>'required'
    //     ]); 
        
    //     $task = Task::find($id);
    //     $task->task_name =  $request->get('task_name');
    //     $task->save();
        
    //     return redirect('/dashboard')->with('success', 'Tache updated');
    // }
    
    public function destroy($id)
    {
        $task = Task::find($id);
        $task-> delete();

        return redirect('/dashboard')->with('success', 'Tache removed');
    } 

    public function store(Request $request)
    {
        $request->validate([
            'task_name'=>'required'
        ]); 
    
        $task = new Task();
        $task->task_name = $request->task_name;
        $task->save();
    
        return redirect('/dashboard')->with('success', 'Tache added');
    }
   
    
}
