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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']], function () {

Route::auth();

Route::get('/films', 'HomeController@index');

Route::get('films', 'FilmsController@index');
Route::get('films/{film}', 'FilmsController@show');

Route::post('films/{film}/reviews', 'ReviewsController@store');

Route::patch('reviews/{review}', 'ReviewsController@update');

});
