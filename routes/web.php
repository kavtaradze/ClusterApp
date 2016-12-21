<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', "MainController@index");
Route::post('create', 'MainController@create');
Route::get('archives', 'MainController@archives');
Route::get('archive/{note}', 'MainController@archive');
Route::get('present/{note}', 'MainController@present');
Route::get('complete/{note}', 'MainController@complete');
Route::get('current/{note}', 'MainController@current');
Route::get('delete/{note}', 'MainController@delete');
