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
Route::get('hasil', 'kualitascontroller@hasilCheck');
Route::get('kualitas', 'kualitascontroller@index');
Route::get('kualitas/{id}/create', 'kualitascontroller@create');
route::post('kualitas','kualitascontroller@store');
Route::post('kualitas/check', 'kualitascontroller@check');

Auth::routes();

Route::get('beranda', 'berandacontroller@index');

route::get('gabah/create','gabahcontroller@create');
route::get('gabah','gabahcontroller@index');
route::get('gabah/{id}/edit','gabahcontroller@edit');
route::put('gabah/{id}','gabahcontroller@update');
route::post('gabah','gabahcontroller@store');

route::get('beras/create','berascontroller@create');
route::get('beras','berascontroller@index');
route::get('beras/{id}/edit','berascontroller@edit');
route::put('beras/{id}','berascontroller@update');
route::post('beras','berascontroller@store');

route::get('supplier','supplierController@index');
route::get('supplier/create','supplierController@create');
route::post('supplier','supplierController@store');
route::get('supplier/{id}/edit','supplierController@edit');
route::put('supplier/{id}','supplierController@update');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
