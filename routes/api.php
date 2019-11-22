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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('foods/recipe', 'FoodsController@index');
Route::post('foods/recipe', 'FoodsController@create');

Route::get('foods/recipe/{id}', 'FoodsController@select');
Route::post('foods/recipe/{id}', 'FoodsController@update');
Route::delete('foods/recipe/{id}', 'FoodsController@destroy');
