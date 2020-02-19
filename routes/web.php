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

Route::view('/', 'welcome')->name('welcome');
Route::view('/reports','reports')->name('post.reports');
Route::view('/contact','contact')->name('user.contact');
Route::get('/user-posts','UserController@index')->name('user.posts');

Route::resource('post','PostController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

