<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function create()
    {
        return view('gets/index');
    }
    
    public function setting()
    {
        return view('gets/setting');
    }
}
