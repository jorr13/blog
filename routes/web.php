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
Route::get('blog/{id?}', 'PostController@index')->name('listar');

Route::post('blog', 'PostController@create')->name('store');

Route::post('blog/{id}', 'PostController@update')->name('actualizar');

Route::get('blog/{id}/delete', 'PostController@delete')->name('eliminar');



