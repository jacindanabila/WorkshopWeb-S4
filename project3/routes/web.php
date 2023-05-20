<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Controllers\ManagementUserController;
use Illuminate\Support\Facades\Auth;

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

//----------------- ACARA 10 -----------------
//---Membuat Controller dan Menambahkan Alamat URL
// Route::get('user', 'ManagementUserController@index'); 
// user adalah URL yang akan menghubungkan ke ManagementUserController

//---Menambahkan alamat URL baru yang menghubungkan dengan method ManagementUserController tanpa mendeklarasikan banyak URL---
// Route::prefix('management')->group(function(){
//      Route::get('user', ManagementUserController::class);
//      Route::resource('user', ManagementUserController::class);
// });
// ganti get menjadi resources agar saat menambahkan url baru tidak perlu mendeklarasikan url lagi
// resources ini berfungsi mengenerate route default yang dimiliki user

//----------------- ACARA 11 -----------------
//---Membuat View Sederhana---
// Route::get("/home", function() {
//     return view("home");
// });
//---Membuat View Blade--
//tambahkan @extends dan @section pada file resources/views/home.blade.php
//tambahkan @yield pada file resources/views/layout/app.blade.php
//---Membuat View Dengan Parameter---
//ubah method index pada ManagementUserController.php
//tambahkan sintaks pada home.blade.php


//----------------- ACARA 12 -----------------
//---Membuat Model Melalui Artisan---
//php artisan make:model DetailProfil: membuat model DetailProfile

Route::get('/welcome', function () {
    return view('welcome');
});

;