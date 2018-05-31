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


Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/rooms', 'RoomController@index')->name('rooms');

Route::get('/room/{id}', 'RoomController@view')->name('view_room');

Route::get('/book/{id}', 'RoomController@book')->name('book_room');


