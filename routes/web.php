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

Auth::routes();

// Route::get('/', function () {
//     return view('layouts.aplication');
// });

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/home', function () {
    return redirect()->route('dashboard');
});

Route::get('/redirect', 'FacebookController@redirect');
Route::get('/callback', 'FacebookController@callback');

// Route::get('/users/{id}/edit', 'UserController@edit')->name('userEditPage');
// Route::put('/users/{id}', 'UserController@update')->where('id', '[0-9]+');