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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perform', 'PerformerController@index')->name('perform');
Route::get('user/{id}', 'UserController@show')->name('user');
Route::post('upload_profile_picture', 'UserController@profilePicture')->name('profilePicture');
Route::get('perform/setperformance', 'PerformerController@store');
Route::post('chat_store', 'ChatController@store');