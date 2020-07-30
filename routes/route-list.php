<?php

use App\General\Route as Route;
use App\Controllers\Controller;

Route::get('/', 'ViewController@index');

Route::post('/', 'ViewController@search');