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

Auth::routes();

Route::group(['namespace' => 'backend', 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    //roles
    Route::resource('roles', 'RoleController');

    //pemohon
    Route::resource('pemohon','PemohonController');
    Route::get('pemohon-ajax','PemohonController@indexAjax');

    //user
    Route::resource('users', 'UserController');
    Route::get('roles/check/{id}','RoleController@check')->name('roles.check');
});
