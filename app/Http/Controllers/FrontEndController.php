<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function index()
    {
return view('front-end.home');
}

public function jackets()
{
return view('front-end.jackets');
}

public function jacket()
{
  return view('front-end.jacket');
}

}
