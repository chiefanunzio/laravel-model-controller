<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'movController@moveFun')
       ->name('home');

Route::get('/elem/{id}', 'movController@getElem')
->name('elem');