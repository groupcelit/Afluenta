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

Route::get('/url', function ()  {
    echo url();
});


Route::post('Ingresar','Auth\AuthController@postLogin');

Route::get('/users/confirmation/{token}','Auth\RegisterController@confirmation')->name('confirmation');

Route::get('auth/facebook', 'Auth\FacebookController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleProviderCallback');

Route::get('auth/google', 'Auth\GoogleController@redirectToProvider')->name('google.login');
Route::get('auth/google/callback', 'Auth\GoogleController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
