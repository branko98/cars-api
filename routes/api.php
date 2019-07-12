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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('/login', 'Auth\LoginController@authenticate');

Route::post('/register', 'Auth\RegisterController@register');

Route::middleware('jwt')->get('/cars', 'CarsController@index');

Route::middleware('jwt')->post('/cars', 'CarsController@store');

Route::middleware('jwt')->get('/cars/{id}', 'CarsController@show');

Route::middleware('jwt')->put('/cars/{id}', 'CarsController@update');

Route::middleware('jwt')->delete('/cars/{id}', 'CarsController@destroy');
