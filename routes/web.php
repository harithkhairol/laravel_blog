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

Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/edit/{post}', 'PostController@edit');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts','PostController@store');

Route::patch('/editPost/{post}','PostController@postEdit');

Route::get('/posts/delete/{post}', 'PostController@delete');


Route::get('/posts/{post}', 'PostController@show');

Route::get('posts/tags/{tag}', 'TagsController@index');


Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');


Route::get('/login','SessionsController@create')->name('login');

Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');