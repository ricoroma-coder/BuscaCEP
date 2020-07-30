<?php

use App\General\Route as Route;
use App\Controllers\Controller;

Route::get('/', 'ViewController@index');
Route::get('/endereco', 'ViewController@endereco');

Route::post('/', 'ViewController@buscarCep');
Route::post('/endereco', 'ViewController@buscarEndereco');