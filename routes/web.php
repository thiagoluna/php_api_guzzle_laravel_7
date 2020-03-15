<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@index')->name('index');
Route::resource('users', 'UserController');
