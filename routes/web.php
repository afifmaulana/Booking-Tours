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
    return view('templates.landingpage');
});

Route::get('/admin', function () {
    return view('templates.admin');
});

Route::get('/client/login', 'Client\Auth\LoginController@showLoginForm')->name('client.login');
Route::post('/client/login', 'Client\Auth\LoginController@login')->name('client.login.submit');
Route::get('/client/logout', 'Client\Auth\LoginController@logout')->name('client.logout');
Route::get('/client/register', 'Client\Auth\RegisterController@showRegisterForm')->name('client.register');
Route::post('/client/register', 'Client\Auth\RegisterController@register')->name('client.register.submit');

Route::get('/admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Admin\Auth\LoginController@login')->name('admin.login.submit');
Route::get('/admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');


Route::group(['prefix' => 'admin'], function (){
Route::get('dashboard','Admin\DashboardController@index')->name('dashboard.admin');
Route::get('client', 'Admin\ClientController@index')->name('admin.client.index');
Route::get('client/{id}', 'Admin\ClientController@destroy')->name('admin.client.destroy');
Route::get('wisata', 'Admin\WisataController@index')->name('admin.wisata.index');
});

Route::get('/client/dashboard','Client\DashboardController@index')->name('dashboard.client');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
