<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontEndController extends Controller
{

    public function index()
    {

      $jackets=Product::all();
return view('front-end.home',compact('jackets'));
}

public function jackets()
{

  $jackets=Product::all();
return view('front-end.jackets',compact('jackets'));
}

public function jacket()
{
  return view('front-end.jacket');
}
public function about()
{
  return view('front-end.about');
}

}

//Jackets function:   pass data through to the jackets page so it can be listed
