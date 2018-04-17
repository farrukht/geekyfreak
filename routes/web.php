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
Route::view('/news', 'news');
Route::view('/comics', 'comics');
Route::view('/manga', 'manga');
Route::view('/movies', 'movies');
Route::view('/contacts', 'contacts');
