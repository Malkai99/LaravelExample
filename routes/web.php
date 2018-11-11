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
    return view('formulario.index');
});
Route::resource('user', 'UserController');
Route::get('/user/{slug}/edit', 'UserController@edit')->name('user.edit');
Route::get('/user/destroy/{id}', 'UserController@destroy')->name('user.destroy');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
