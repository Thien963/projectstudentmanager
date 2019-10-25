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

use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/students', 'Admin\StudentsController@index');
Route::get('/students/create', 'Admin\StudentsController@create');
Route::get('/students/{id}/edit', 'Admin\StudentsController@edit');
Route::get('/students/{id}/delete', 'Admin\StudentsController@delete');

Route::get('/students', 'Admin\StudentsController@store');
Route::get('/students/{id}', 'Admin\StudentsController@update');
Route::get('/students/{id}/delete', 'Admin\StudentsController@destroy');
