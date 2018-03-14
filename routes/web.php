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
// using admin cos am working on an lte panel

Route::get('adminPanel','adminController@adminPanel');

// Route::get('admin','UsersController@blade');
Route::get('users','UsersController@index');
Route::get('users/create','UsersController@create');
Route::post('users', 'UsersController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','ProfileController@profile');
Route::post('/profile','ProfileController@avatar');

Route::resource('articles', 'ArticlesController');

