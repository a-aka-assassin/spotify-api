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

Route::get('/', "SearchController@index");
Route::post('/search', "SearchController@search");

Route::get('/artist/{id}', "SearchController@artist");

Route::get('/track/{id}', "SearchController@track");

Route::get('/album/{id}', "SearchController@album");
