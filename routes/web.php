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
	// return '<h1>email: guomengtao@gmail.com </h1>';
    return view('welcome');
});


Route::get('/tom', function () {
	return '<h1>email: guomengtao@gmail.com </h1>';
    return view('welcome');
});

Route::get('/jack', function () {
	// return 'Hello. I am jack!';

    return view('jack', ['name' => 'GuoMengTao ','email' => 'GuoMengTao@gmail.com']);
});


Route::get('user/{id}', 'UserController@show');

Route::get('/list', 'UserController@list');
Route::get('/show', 'UserController@show');

