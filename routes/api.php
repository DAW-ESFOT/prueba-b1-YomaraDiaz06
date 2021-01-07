<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::get('movies', 'MovieController@index');
Route::get('movies/{id}', 'MovieController@show');
Route::post('movies', 'MovieController@store');
Route::put('movies/{id}', 'MovieController@update');
Route::delete('movies/{id}', 'MovieController@delete');


Route::get('genres', 'GenreController@index');
Route::get('genres/{id}', 'GenreController@show');
Route::post('genres', 'GenreController@store');
Route::put('genres/{id}', 'GenreController@update');
Route::delete('genres/{id}', 'GenreController@delete');

Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@delete');
