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

Route::get('/hello', function(){
    return "Welcome to biobangla blog";
});

Route::get('/login', 'UserAuthenticationController@index');
Route::post('/login', 'UserAuthenticationController@attemptLogin');

Route::get('/logout', 'UserAuthenticationController@logout');

Route::get('/home', 'BlogController@index');