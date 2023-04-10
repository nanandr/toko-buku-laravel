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

Route::get('login', 'LoginController@index');

Route::get('/', 'HomeController@index');
Route::get('/search', 'HomeController@search');
Route::get('/book/description/{id_buku}', 'BukuController@desc');
Route::get('/book/add', 'BukuController@form');
Route::post('/book/add/loading', 'BukuController@add');

Route::middleware('auth')->group(function(){
    
});
