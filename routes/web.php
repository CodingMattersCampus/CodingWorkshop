<?php

/**
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/login', 'login')->name('login');
Route::post('/login', "LoginController")->name('login.submit');

Route::get('/', function(){
    return "home";
})->name('home');
Route::get('/sales/dashboard', 'SalesController@chartjs');

Route::get('/sales/dashboard','SalesController@create');
Route::post('/sales/dashboard','SalesController@store');
