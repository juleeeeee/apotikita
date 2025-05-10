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
Route::auth();

Route::group(['middleware'=>'auth'], function() {
Route::get('/', function () {
    return view('index');
});

Route::get('pegawai', 'PegawaiController@index');
Route::get('pegawai/add', 'PegawaiController@create');
Route::post('pegawai/add', 'PegawaiController@store');
Route::get('pegawai/{id}/edit', 'PegawaiController@edit');
Route::patch('pegawai/{id}/edit', 'PegawaiController@update');
Route::get('/pegawai/{id}/destroy','PegawaiController@destroy');


Route::get('obat', 'ObatController@index');
Route::get('obat/add', 'ObatController@create');
Route::post('obat/add', 'ObatController@store');
Route::get('obat/{id}/edit', 'ObatController@edit');
Route::patch('obat/{id}/edit', 'ObatController@update');
Route::get('/obat/{id}/destroy','ObatController@destroy');

Route::get('pembayaran', 'PembayaranController@index');
Route::get('pembayaran/add', 'PembayaranController@create');
Route::post('pembayaran/add', 'PembayaranController@store');
Route::get('pembayaran/{id}/edit', 'PembayaranController@edit');
Route::patch('pembayaran/{id}/edit', 'PembayaranController@update');
Route::get('/pembayaran/{id}/destroy','PembayaranController@destroy');
});