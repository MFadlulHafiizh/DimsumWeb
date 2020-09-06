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
Route::get('/admin', 'adminController@dataAdmin');
Route::get('/admin/create', 'adminController@create');
Route::post('/admin', 'adminController@store');
Route::get('/admin/{id}/edit', 'adminController@edit');
Route::delete('/admin/{id}', 'adminController@destroy');
Route::patch('/admin/{id}', 'adminController@update');
