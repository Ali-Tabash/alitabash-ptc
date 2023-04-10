<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site01controller extends Controller
{
    public function index()
    {
        return view('site01.index');
    }
}
