<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task; 
use Illuminate\Support\Facades\Auth;


class TestController extends Controller
{
    public function index()
    {
        $tasks = Task::all();   
        // affichage on dashboard
        return view('dashboard', compact('tasks'));
    }
}