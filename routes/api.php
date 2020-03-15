<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (){
    Route::get('/users', 'Api\UserController@listAll')->name('api.users.listall');
    Route::get('/user/{user}', 'Api\UserController@listOne')->name('api.users.listOne');
});