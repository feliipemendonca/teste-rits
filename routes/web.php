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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['registe' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => 'auth'], function () {
	Route::get('/', 'HomeController@index')->name('home');
	Route::resource('user', 'ae\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ae\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ae\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ae\ProfileController@password']);

	Route::resource('conteudo', 'admin\ContentsController', ['except' => ['show']]);

});

