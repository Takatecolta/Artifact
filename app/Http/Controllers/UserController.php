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
        $input = $request['post'];
        $review->fill($input)->save();
        return redirect('/posts/' . $user->id);
    }
    
    public function edit(User $user)
    {
        return view('posts/edit')->with(['user' => $user]);
    }
    
    public function update(PostRequest $request, User $user)
    {
        $input_user = $request['user'];
        $user->fill($input_user)->save();

        return redirect('/posts/' . $user->id);
    }
    
    public function delete(User $user)
    {
        $user->delete();
        return redirect('/');
    }
}
?>