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

Route::get('/show', "TaskController@show");
Route::get('/showtaskdetail/{id}', "TaskController@get");
Route::get('/create', "TaskController@create");
// Route::post('/create', "TaskController@addtask");
Route::get('/create', "TaskController@testMutator");
