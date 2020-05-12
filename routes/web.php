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

Route::get('/cabang', 'CabangController@index');
Route::get('/cabang/insert','CabangController@insert');
Route::post('/cabang/store', 'CabangController@store');
Route::get('/cabang/edit/{id}','CabangController@edit');
Route::post('/cabang/update','CabangController@update');
Route::get('/cabang/delete/{id}', 'CabangController@delete');
