<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');


Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('/task', 'TaskController');
    Route::resource('/category', 'CategoryController');
    Route::get('/category/{category}/tasks', 'CategoryController@tasks');
});
