<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task; 
use Illuminate\Support\Facades\Auth;


class TestController extends Controller
{
    // afficher on dashboard
    public function index()
    {
        $tasks = Task::all();   
        return view('dashboard', compact('tasks'));
    }
}
