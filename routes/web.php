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

Route::get('blog', 'PostController@index')->name('listar');

Route::get('blog/create', 'PostController@create')->name('crear');

Route::post('blog/{id}', 'PostController@store')->name('store');

Route::get('blog/{id}/edit', 'PostController@edit')->name('editpost');

Route::put('blog/{id}', 'PostController@update')->name('actualizar');

Route::get('blog/delete/{id}', 'PostController@delete')->name('eliminar');


