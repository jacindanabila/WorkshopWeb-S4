<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/session/create', 'App\Http\Controllers\SessionController@create');

// Route::get('/session/show', 'App\Http\Controllers\SessionController@show');

// Route::get('/session/delete', 'App\Http\Controllers\SessionController@delete');

// Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');

// Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
// Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/cobaerror/{nama?}', 'App\Http\Controllers\CobaController@index');
