<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'siteController@index')->name('index');
Route::get('/profile', 'siteController@profile')->name('profile');
Route::get('/meeting/{id}', 'siteController@meeting')->name('meeting')->middleware('auth');
Route::get('/user/{id}','siteController@findUser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
