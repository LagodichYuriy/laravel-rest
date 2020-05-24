<?php

use Illuminate\Support\Facades\Route;

use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('users', function ()
{
	return User::all();
});

Route::get('users/{id}', function ($id)
{
	return User::find($id);
});

Route::get   ('reviews',          'ReviewController@index');
Route::get   ('reviews/{review}', 'ReviewController@show');
Route::post  ('reviews',          'ReviewController@store');
Route::put   ('reviews/{review}', 'ReviewController@update');
Route::delete('reviews/{review}', 'ReviewController@delete');