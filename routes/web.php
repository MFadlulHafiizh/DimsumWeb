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
    return view('welcome');
});

Route::get('/produk', 'ProdukController@calldata');
Route::get('/produk/search', 'ProdukController@search');
Route::get('/produk/{id}/detail', 'ProdukController@getDetail');

Route::get('/admin', 'adminController@index')->name('admin');
Route::get('/admin/create', 'adminController@create');
Route::post('/admin', 'adminController@store');
Route::get('/admin/{id}/edit', 'adminController@edit');
Route::delete('/admin/{id}', 'adminController@destroy');
Route::patch('/admin/{id}', 'adminController@update');
Auth::routes(['register'=>false, 'reset'=>false]);
