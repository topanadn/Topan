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

Route::get('/','StaticController@index')->name('home');
Route::get('profile', function () {
    return view('profile');
})->name('profil');
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::resource('article','ArticleController');
Route::resource('comments', 'CommentsController');