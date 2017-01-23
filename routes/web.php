<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// The route FrontEndController is linked to all front end pages which are for the clients side
Route::get('/', 'FrontEndController@index')->name('home');
Route::get('/jackets', 'FrontEndController@jackets')->name('jackets');
Route::get('/jacket', 'FrontEndController@jacket')->name('jacket');
Route::get('/about', 'FrontEndController@about')->name('about');
Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {
  route::get('/', function () {
    return view('admin.index');
  })->name('admin.index');

//the routes for product and category is for the admin side

  Route::resource('product', 'ProductsController');
Route::resource('category', 'CategoriesController');
});
