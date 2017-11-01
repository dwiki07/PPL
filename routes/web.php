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
Route::get('/dash', function () {
    return view('dash');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/kualitas', 'tambah_kualitas@index');
route::post('kualitas','tambah_kualitas@store');
Route::post('/kualitas/check', 'tambah_kualitas@check');
Auth::routes();

route::get('gudang/create','gudangcontroller@create');
route::get('gudang','gudangcontroller@index');
route::get('/gudang/{id_gabah}/edit','gudangcontroller@edit');
route::put('/gudang/{id_gabah}','gudangcontroller@update');
route::post('gudang','gudangcontroller@store');
route::delete('/gudang/{id_gabah}','gudangcontroller@destroy');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
