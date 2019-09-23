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

Route::get('/todos',[
	'uses' => 'TodosController@index',
	'as' => 'todos'
]);

Route::post('/create/todo', 'TodosController@store');

Route::get('/delete/todo/{id}', [
	'uses' => 'TodosController@delete',
	'as' => 'todo.delete',
]);

Route::get('/update/todo/{id}', [
	'uses' => 'TodosController@update',
	'as' => 'todo.update',
]);

Route::post('/save/todo/{id}', [
	'uses' => 'TodosController@save',
	'as' => 'todo.save',
]);

Route::get('/completed/todo/{id}', [
	'uses' => 'TodosController@completed',
	'as' => 'todo.completed',
]);