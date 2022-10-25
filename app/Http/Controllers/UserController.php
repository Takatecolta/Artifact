<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('posts/index')->with(['users' => $user->getPaginateBylimit()]);
    }  
    
    public function show(User $user)
    {
        return view('posts/show')->with(['users' => $user]);
    }
    public function create()
    {
    return view('posts/create');
    }
    public function store(Request $request, User $user)
    {
      dd($request->all());
    }
}
?>