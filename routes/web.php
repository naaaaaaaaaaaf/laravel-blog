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
Route::get('entries/form', 'BlogController@form')->name('entries_form');
Route::post('entries/post', 'BlogController@post')->name('entries_post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
