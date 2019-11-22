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

Route::get('foods/recipe', 'FoodsController@index');
Route::post('foods/recipe', 'FoodsController@create');

Route::get('foods/recipe/{id}', 'FoodsController@select');
Route::post('foods/recipe/{id}', 'FoodsController@update');
Route::delete('foods/recipe/{id}', 'FoodsController@destroy');
