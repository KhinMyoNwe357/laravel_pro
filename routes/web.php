<?php

use App\Receipes;

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
	dd(app('test'));
});

Route::resource('receipe', 'ReceipesController');
Route::get('home', 'HomeController@index');

Auth::routes();