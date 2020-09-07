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

Route::get('/', 'TeamController@index');

Route::get('/teams/:{id}', 'TeamController@show')->name('singleTeam');

Route::get('/players/:{id}', 'PlayerController@show')->name('player');

Route::get('/register', 'AuthController@registerForm');

Route::post('/register/user', 'AuthController@register');

Route::get('/login', 'AuthController@loginForm');

Route::post('/login/user', 'AuthController@login');

Route::get('/logout', 'AuthController@logout');


