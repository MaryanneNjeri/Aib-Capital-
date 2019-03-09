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
Route::get('/','QueryController@create');
Route::post('/create/query', 'QueryController@store'); 
// route to export to excel

Route::get('/export/{type}', 'QueryController@export');
