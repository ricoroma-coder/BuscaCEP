<?php

use App\General\Route as Route;
use App\Controllers\Controller;

Route::get('/', 'ViewController@index');
Route::get('/endereco', 'ViewController@endereco');

// Route::post('/buscacep', 'BuscaCepController');
Route::get('/buscacep/{cep}', 'ViewController@buscarCep');
Route::post('/endereco/buscaendereco', 'ViewController@buscarEndereco');