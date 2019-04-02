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

Route::get('/', 'ProjectController@show');
Route::get('/project/update/{id}', 'ProjectController@update');
Route::get('/project/create', 'ProjectController@create');
Route::post('/project/create/new', 'ProjectController@new');
Route::get('/project/delete/{id}', 'ProjectController@delete');
Route::get('/project/{id}', 'ProjectController@edit');

Route::get('/tasks', 'TaskController@show');
Route::get('/tasks/{id}', 'TaskController@edit');
Route::get('/tasks/create', 'TaskController@create');
Route::get('/tasks/update', 'TaskController@update');
Route::get('/tasks/delete', 'TaskController@delete');
