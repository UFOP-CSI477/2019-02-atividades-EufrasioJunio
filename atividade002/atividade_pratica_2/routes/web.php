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
Route::get('/','PaginasController@index')->name('protocols');
Route::get('/login','PaginasController@login');
Route::resource('/users', 'UserController');
Route::resource('/subjects', 'SubjectController');
Route::resource('/requets', 'RequetController');
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
