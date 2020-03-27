<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Auth::routes();
Route::get('/', 'TodoController@index')->name('home');
Route::post('/todo/add', 'TodoController@store')->name('addTodo');
Route::get('/destroy/{id}', 'TodoController@destroy')->name('destroyTodo');
Route::get('/edit/{id}', 'TodoController@edit')->name('editTodo');


