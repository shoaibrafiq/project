<?php

namespace App\Http\Controllers;


use App\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilmsController extends Controller
{

public function index()
{

$films = Film::all();

return view('films.index', compact('films'));

}
public function show(Film $film)
{


  $film->load('reviews.user');

return view('films.show', compact('film'));
}


}
