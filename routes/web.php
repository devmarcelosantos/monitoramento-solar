<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/home', function () {
    return redirect()->route('dashboard');
});

// Rotas de Customers (Clientes)
Route::get('/customers', 'CustomerController@index')->name('showCustomers');
Route::get('/customerAddress/{id}', 'CustomerController@findCep')->name('addressCustomer');

Route::get('/customerEdit', 'CustomerController@edit')->name('editCustomer');

Route::get('/customerCreate', 'CustomerController@create')->name('createCustomer');
Route::post('/customers', 'CustomerController@store')->name('storeCustomer');

//Route::get('/customers', function () {
//    return redirect()->route('customers.index')->name('listCustomers');
//});

//Route::get('/users/{id}/edit', 'UserController@edit')->name('userEditPage');
//Route::put('/users/{id}', 'UserController@update')->where('id', '[0-9]+');
