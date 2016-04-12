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

Route::get('/', 'HomeController@index')->middleware('web');
Route::get('music', 'MusicController@index')->middleware('web');
Route::get('media', 'MediaController@index')->middleware('web');
Route::get('upcoming', 'UpcomingController@index')->middleware('web');
