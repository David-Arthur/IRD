<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Route::get('/',
//     ['as' => 'home',
//     'middleware' => 'role:admin',
//     'uses' => 'PageController@index']);

Route::get('/', function () {
    return view('home', ['page_title' => 'Internation Revolving Doors']);
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/register/complete', 'Auth\AuthController@getRegisterComplete');

Route::get('product/', 'ProductController@getProduct');
Route::get('product/type/{slug}', 'ProductController@getType');


Route::get('finduser', 'MapController@showMap');
Route::get('reps','RepsController@index');
Route::post('reps/find', 'RepsController@find');
Route::get('reps/find/state/{id}', 'RepsController@show');

Route::get('contact','ContactController@getContact');
Route::post('contact','ContactController@postContact');

Route::get('about','AboutController@getAbout');

Route::get('reps/add', 'RepsController@create');
Route::post('reps/add', 'RepsController@store');
