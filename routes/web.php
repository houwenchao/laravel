<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user',function(){return 123;});

//登录
Route::get('/login','Admin\SecurityController@login');

//登录验证
Route::post('/login-check','Admin\SecurityController@loginCheck');