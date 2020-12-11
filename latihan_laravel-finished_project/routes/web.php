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

Route::get('/home', 'HomeController@index')->name('home');

//Route for Product
Route::get('/product', 'productController@index');
Route::get('/product/create', 'productController@create');
Route::post('/product/insert', 'productController@store');
Route::get('/product/{id}', 'productController@show');

//Route for Transaction
Route::get('/transaction', 'transactionController@index');
Route::get('/transaction/create', 'transactionController@create');
Route::post('transaction/insert', 'transactionController@store');
Route::get('/transaction/{id}', 'transactionController@show');
