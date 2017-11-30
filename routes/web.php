<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/home', function () {
    return redirect()->route('dashboard');
});

// Rotas de Customers (Clientes)
Route::get('/customers', 'CustomerController@index')->name('showCustomers'); // Exibir tabela com clientes
Route::get('/customerAddress{id}', 'CustomerController@findCep')->name('addressCustomer'); // Exibir endereço do cliente
Route::get('/customerContact{id}', 'CustomerController@showContact')->name('contactCustomer'); // Exibir contato do cliente
Route::get('/customerEdit{id}', 'CustomerController@edit')->name('editCustomer')->where('id', '[0-9]+'); // Exibir tela para editar cliente
Route::get('/customerCreate', 'CustomerController@create')->name('createCustomer'); // Exibir tela para inserir cliente
Route::post('/customers', 'CustomerController@store')->name('storeCustomer'); // Criar cliente
Route::put('/customer{id}', 'CustomerController@update')->name('updateCustomer')->where('id', '[0-9]+'); // Atualizar cliente
Route::delete('/customer{id}', 'CustomerController@delete')->name('deleteCustomer')->where('id', '[0-9]+'); // Deletar Cliente