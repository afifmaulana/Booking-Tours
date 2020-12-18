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

Route::get('/client/login', 'Client\Auth\LoginController@showLoginForm')->name('client.login');
Route::post('/client/login', 'Client\Auth\LoginController@login')->name('client.login.submit');
Route::get('/client/logout', 'Client\Auth\LoginController@logout')->name('client.logout');
Route::get('/client/register', 'Client\Auth\RegisterController@showRegisterForm')->name('client.register');
Route::post('/client/register', 'Client\Auth\RegisterController@register')->name('client.register.submit');

Route::get('/client/dashboard','Client\DashboardController@index')->name('dashboard.client');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
