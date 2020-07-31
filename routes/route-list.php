<?php

use App\General\Route as Route;
use App\Controllers\Controller;

Route::get('/', 'ViewController@index');
Route::get('/buscacep/obj/{id}', 'ViewController@buscaEndereco');
Route::get('/buscacep/ajax/{cep}', 'ViewController@ajaxBuscaCep');
Route::get('/buscacep/{cep}', 'ViewController@buscarCep');