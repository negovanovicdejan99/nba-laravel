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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/teams', 'TeamController@index');
    Route::get('/', function () {
        return redirect('teams');
    });
    Route::post('/teams/:{id}/comment', 'CommentController@store')->name('addComment')->middleware('checkComment');
    Route::get('/teams/:{id}', 'TeamController@show')->name('singleTeam');
    Route::get('/players/:{id}', 'PlayerController@show')->name('player');
    Route::get('/logout', 'AuthController@logout');
    Route::get('/forbidden-comment', 'CommentController@forbiddenComment')->name('forbidden-comment');
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register/user', 'AuthController@register');
    Route::get('/login', 'AuthController@loginForm')->name('login');
    Route::post('/login/user', 'AuthController@login');
});









