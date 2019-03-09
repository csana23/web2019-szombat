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

Route::get('/', 'BlogPostController@index');
Route::get('/uj', 'BlogPostController@create');
Route::post('/uj', 'BlogPostController@store');
Route::get('/posztok/{id}', 'BlogPostController@show');
Route::get('/szerkesztes/{id}', 'BlogPostController@edit');
Route::post('/szerkesztes/{id}', 'BlogPostController@update');
Route::post('/komment/{id}', 'BlogPostController@saveComment');
