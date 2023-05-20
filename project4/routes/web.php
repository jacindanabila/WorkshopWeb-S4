<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
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

// Route::group(['namespace' => 'Frontend'], function()
//     {
//         Route::resource('home', 'HomeController');
//     }
// );
/** membuat route grup bagian/folder Frontend, rute grup ini mencakup pada DashboardController.
 * URL yang akan menguhubungkan ke HomeController yaitu home.
 */


Route::group(['namespace' => 'Backend'], function()
    {
        Route::resource('dashboard', 'DashboardController');
    }
);
/** membuat route grup bagian/folder Backend, rute grup ini mencakup pada DashboardController.
 * URL yang akan menguhubungkan ke DashboardController yaitu dashboard.
 */