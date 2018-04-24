<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('hello', function() {
    return "Welcome to biobangla blog";
});

/*
Route::get('/login', 'UserAuthenticationController@index');
Route::post('/login', 'UserAuthenticationController@attemptLogin');

Route::get('/logout', 'UserAuthenticationController@logout');
*/

Route::get('/', 'WebpagesController@index');
Route::get('events', 'WebpagesController@events');
Route::get('projects', 'WebpagesController@projects');
Route::get('partnarship', 'WebpagesController@partnarship');
Route::get('about', 'WebpagesController@about');
Route::get('team', 'WebpagesController@team');
Route::get('contact', 'WebpagesController@contact');
Route::get('blog', 'BlogController@index');
Route::get('blog/{id}', 'BlogController@show');

/*
// admin user authentication
Route::get('/admin/login', 'BlogController@show');
Route::post('/admin/login', 'BlogController@show');       //middleware from this
Route::get('/admin/logout', 'BlogController@show');

// admin user profile
Route::get('/admin/profile', 'Controller@method');
Route::post('/admin/profile', 'Controller@method');

//user creation
Route::get('/admin/user/add', 'Controller@method');
Route::post('/admin/user/add', 'Controller@method');

// blog operation
Route::get('/admin/blog/add', 'Controller@method');
Route::get('/admin/blog/add', 'Controller@method');
Route::get('/admin/blog/edit', 'Controller@method');
Route::post('/admin/blog/edit', 'Controller@method');
Route::post('/admin/blog/delete', 'Controller@method');
*/