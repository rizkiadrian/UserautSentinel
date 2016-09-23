<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('disp.index');
});

Route::get('/adminar', function () {
    return view('include.admincontrol');
});



Route::get('users/indexlog', ['as' => 'users.indexlog', 'uses' => 'UsersController@indexlog']);
Route::get('sets/assignRole', ['as' => 'users.assignRole', 'uses' => 'UsersRoleController@assignRole']);
Route::get('sets/addPermission', ['as' => 'sets.addPermission', 'uses' => 'AssignRoleController@addPermission']);
Route::get('/logout', ['as' => 'home.logout', 'uses' => 'LoginController@logout']);
Route::get('/show', ['as' => 'home.tampil', 'uses' => 'LoginController@show']);
Route::get('searcharticle','ArticleController@search');
Route::get('searchuser','AdminController@search');

Route::resource('users', 'UsersController');
Route::resource('sets', 'AssignRoleController');
Route::resource('home', 'LoginController');
Route::resource('admin', 'AdminController');
Route::resource('article', 'ArticleController');

