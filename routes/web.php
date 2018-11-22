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

Route::get('/', function () {
    return view('index');
})->name("index");

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/cart', "CartController@index");
Route::post('/cart/addItem/{id}', "CartController@addItem");
Route::post('/cart/setQuantity/{id}', "CartController@setQuantity");
Route::post('/cart/destroy/{id}', "CartController@destroy");

Route::resource('/products', 'ProductController');

