<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReviewRequest; 



class ReviewController extends Controller
{
    public function index(Review $review)
    {
        return view('reviews/index')->with(['reviews' => $review->getPaginateByLimit()]);
    }
    
    public function show(Review $review)
    {
        return view('reviews/show')->with(['reviews' => $review]);
    }
    
    public function create()
    {
        return view('reviews/create');
    }
    public function store(Request $request, Review $review)
    {
    $input = $request['review'];
    $input['user_id'] = Auth::id();
    $review->fill($input)->save();
    return redirect('/reviews/' . $review->id);
    }
    
    public function edit(Review $review)
    {
        return view('reviews/edit')->with(['reviews' => $review]);
    }
    
    public function update(ReviewRequest $request, Review $review)
    {
        $input_review = $request['review'];
        $input_review['user_id'] = Auth::id();
        $review->fill($input_review)->save();

        return redirect('/reviews/' . $review->id);
    }
    
    public function delete(Review $review)
    {
        $review->delete();
        return redirect('/reviews/index');
    }
}
