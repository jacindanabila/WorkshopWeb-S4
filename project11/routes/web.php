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

Route::get('/upload', 'App\Http\Controllers\UploadController@upload')->name('upload');
Route::post('/upload/proses', 'App\Http\Controllers\UploadController@proses_upload')->name('upload.proses');
Route::post('/upload/proses', 'App\Http\Controllers\UploadController@resize_upload')->name('upload.resize');

Route::get('/dropzone', 'App\Http\Controllers\UploadController@dropzone')->name('dropzone');
Route::post('/dropzone/store', 'App\Http\Controllers\UploadController@dropzone_store')->name('dropzone.store');

Route::get('/pdf_upload', 'App\Http\Controllers\UploadController@pdf_upload')->name('pdf.upload');
Route::post('/pdf/store', 'App\Http\Controllers\UploadController@pdf_store')->name('pdf.store');