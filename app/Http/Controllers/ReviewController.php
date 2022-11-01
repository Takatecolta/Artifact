<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ReviewController extends Controller
{
    public function create()
    {
    return view('reviews/create');
    }
    public function store(Request $request, Review $review)
    {
    $input = $request['review'];
    $review->fill($input)->save();
    return redirect('/' . $review->id);
    }
}
