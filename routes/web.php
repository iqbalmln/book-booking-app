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

Route::redirect('/', '/dashboard');

/**
 * Path related to Authentication routes.
 * 
 */

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@authenticate')->name('login');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@register')->name('register');

Route::post('/logout', 'LogoutController@logout')->name('logout');

/**
 * Paths related to Application routes.
 * 
 */

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');