<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class taskscontroller extends Controller
{
    public function index()
    {

        return view('layout.task');
    }
    // public function index()
    // {


    //     $tasks = DB::table('tasks')->where('name','like','Task%')->get();

    //     return view('contact', compact('tasks'));
    // }

    // public function show($id)
    // {
    //     $tasks = DB::table('tasks')->find($id);

    //     return view('index',compact('task'));
    // }

}
