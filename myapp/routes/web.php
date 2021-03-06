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

Route::get('/hello', 'HelloController@getIndex');

Route::post('/hello', 'HelloController@postIndex');

Route::get('/hello/new', 'HelloController@getNew');

Route::post('/hello/new', 'HelloController@postNew');

Route::get('/hello/update', 'HelloController@getUpdate');

Route::post('/hello/update', 'HelloController@postUpdate');

Route::post('/hello/delete', 'HelloController@postDelete');