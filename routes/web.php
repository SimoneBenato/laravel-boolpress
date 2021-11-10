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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function(){
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::resource('posts', 'PostController');
});

Route::resource('posts', 'PostController');