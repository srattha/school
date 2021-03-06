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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/','ViewController@home')->name('home');
Route::get('/history','ViewController@history')->name('history');
Route::get('/staff','ViewController@staff')->name('staff');
Route::get('media_group', 'ViewController@media_group')->name('media_group');
Route::get('media', 'ViewController@media')->name('media');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::get('/admin-index', 'AdminController@index')->name('admin_home');
Route::get('/admin-user', 'AdminController@user')->name('admin_user');
Route::get('/admin-news', 'AdminController@news')->name('admin_news');
Route::get('/admin-student', 'AdminController@student')->name('admin_student');
