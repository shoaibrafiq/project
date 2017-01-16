<?php

namespace App\Http\Controllers;

use App\Film;
use App\Review;
use App\User;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{

  public function store(Request $request, Film $film)
    {

$this->validate($request, [

'body' => 'required'

]);


  $review = new Review($request->all());

//$film->by(Auth::user());
  //$review->user_id = 1;

$film->addReview($review, 1);


return back();

    }

public function edit(Review $review)
{

return view('reviews.edit', compact('review'));


}

 public function delete(Review $review){


$review->delete();
return back();
}



public function update(Request $request, Review $review)
{

$review->update($request->all());

return back();

}


}
