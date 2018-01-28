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

Route::get('/gg','GGController@index');
Route::post('/gg','GGController@insert');
Route::get('/gg/{id}/edit','GGController@edit');
Route::put('/gg/{id}','GGController@update');
Route::delete('/gg/{id}','GGController@destroy');
