<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; //digunakan untuk menangani HTTP Request seperti mengambilai nilai input atau menentukan method request

//----------------- ACARA 5 -----------------
//---Route Default---
// Route::get('/', function() {    
//     return view('welcome');     
// });
/** get merupakan jenis method yang akan dijalankan ketika alamat URL akan diakses.
 * '/' merupakan alamat URL dimana tanda slash yang mengacu pada root folder.
 * return view('welcome') maksudnya route akan menjalankan folder view yang mengarah pada welcome.php 
 */


//---Metode Route yang Tersedia---
// Route::get('/login', function () {                                      
//     return view('login');           
// });
/** get merupakan jenis method yang akan dijalankan ketika alamat URL akan diakses.
 * '/' merupakan alamat URL dimana tanda slash yang mengacu pada root folder.
 * return view('login') maksudnya route akan menjalankan folder view yang mengarah pada login.blade.php
 */


//---CSRF Protection---
// Route::POST('/login_proses', function (Request $request) {
//     dd($request);
// });
/** POST merupakan jenis method yang akan dijalankan untuk mengirimkan data melalui form login_proses.
 * mengambil data dari field input dalam bentuk metode POST, data yang diinputkan oleh client akan disimpan dalam parameter $request.
 * fungsi dd($request) digunakan untuk mengosongkan objek $request dan menampilkan semua detail permintaan.
 */


//---Redirect Route---
// Route::get('/there', function () { 
//     return "ini page untuk latihan route redirect";
// });
// Route::redirect('/here', '/there');
/** '/there' merupakan alamat URL tujuan.
 * '/here' merupakan alamat URL asal yang nantinya jika diakses akan diarahkan ke halana '/there'.
*/


//---Route View---
// Route::view('/welcome', 'welcome', ['title' => 'Jacinda']); 
/** route akan diarahkan ke folder view yang menuju pada file welcome dan mengubah variabel title dengan nilai Jacinda.
 * sebelumnya title pada file welcome diubah menjadi {{$title}} terlebih dahulu
*/


//----------------- ACARA 6 -----------------
//---Parameter Opsional---
// Route::get('users/{id?}', function($id = null) { 
//     return "Welcome " .$id; 
// });
/** route akan diarahkan ke URL users. segmen {$id} berarti adalah parameter bernama id dan bersifat opsional yg memiliki arti bahwa 
 * parameter tersebut bisa ada ataupun tidak dalam URL. 
 * function($id = null) berarti bahwa parameter $id bersifat opsional dan memiliki nilai null.
 * return "Welcome " .$id; maksudnya string "welcome" akan ditampilkan gabung nilai dari $id. namun jika $id bernilai null maka string yg ditampilkan adalah "welcome".
*/ 

// Route::get('users/{id?}', function($id = 'Jacin') {
//     return "Welcome " .$id;
// });
/** route akan diarahkan ke URL users. segmen {$id} berarti adalah parameter bernama id dan bersifat opsional yg memiliki arti bahwa 
 * parameter tersebut bisa ada ataupun tidak dalam URL. 
 * function($id = 'Jacin') berarti bahwa parameter $id bersifat opsional dan memiliki nilai Jacin.
 * return "Welcome " .$id; maksudnya string "welcome" akan ditampilkan gabung nilai dari $id yaitu Jacin dan akan menjadi "Welcome Jacin".
*/ 


//---Reguler Expression Constraint--- 
// ((membatasi format penulisan parameter route dengan method where))
// Route::get('users/{name?}', function($name) {   
//    return "Welcome " .$name;
// })->where('name','[A-Za-z]+');
/** router akan diarahkan ke root users/parameter $name dan akan ditampilkan "Welcome $name" dimana $name baru akan muncul jika format 
 * penulisan nilai parameter name termasuk dalam karakter huruf A-Z atau a-z tanpa ada angka atau karakter lain.
 */ 


/*---Global Constraints--- 
((membatasi format penulisan parameter route dengan method pattern))
pada App/Providers/RouteServiceProvider.php tambahkan  
        Route::pattern('name', '[A-Za-z]+');        
*/
// Route::get('users/{name?}', function($name) {   
//     return "Welcome " .$name;
// });
//dengan ini penulisan route hanya bisa dilakukan dengan format huruf saja.


//---Encoded Forward Slashes---
// Route::get('users/{name?}', function($name = "jacinda") {
//     return "Welcome " .$name;
// })->where('name','.*'); 
/** router akan diarahkan ke root users/parameter name, nilai dari parameter name diizikan menggunakan karakter / untuk mencari rute baru */


//----------------- ACARA 7 -----------------
//---Named Route---
// Route::view('/login', 'login',['title' => "Login Page"]) 
//     ->name('login');

//---Generate URL ke Route Bersama---
// Route::get('/user', function() {
//     //generating URLs
//     $url = route('users');
// })->where('id', '.*');
// Route::get('/user', function($id = "jacinda") {
//     return "Welcome " .$id;
// })->where('id', '.*')->name('users');
// jika menuliskan url /user maka akan dialihkan ke route yang bernama users

// Route::get('/user', function($id = "jacinda") {
//     //generating URLs
//     $url = route('users', [
//         'id' => $id,
//     ]);
//     //generating redirect
//     return redirect()->route('users', [
//         'id' => $id,
//     ]);
// })->where('id','.*');
// jika route bernama mempunyai parameter, kita dapat menggunakan parameter tersebut sebagai argumen kedua dalam fungsi route.



//----------------- ACARA 8 -----------------
//---Middlewere---
// Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
//     Route::get('/users', function(){
//         return 'ini halaman /admin/users';
//     });
//     Route::get('/home', function(){
//         return 'ini halaman /admin/home';
//     });
//     Route::get('/report', function(){
//         return 'ini halaman /admin/report';
//     });
// });
/** tambahkan middleware ‘auth’ ke dalam group prefix ‘admin’. Hal ini bertujuan agar jika user mengakses salah satu rute dalam grup
 * ‘admin’ (users, home, report), maka middleware alan dijalankan terlebih dahulu sebelum request dijalankan oleh controller. Jadi jika 
 * user belum melakukan login maka middleware ‘auth’ akan meminta user login terlebih dahulu sebelum mengakses rute
 * yang ada dalam grup ‘admin’. 
 */


//---Namespace---
// Route::namespace('Admin')->group(function () {
//     // Controllers within the "App\Http\Controllers\Admin" namespace
//     Route::get('Home', 'HomeController@index');
//     Route::get('Report', 'ReportController@index');
// });
/** membuat namespace admin pada grup routing dan menambahkan 2 rute dengan controller yaitu, HomeController dan ReportController. Untuk mengakses rute tersebut dari browser kia dapat 
 * mengakses URL ‘/home’ dan ‘/report’ yang akan diarahkan ke index masing-masing controller.
 */


//---Subdomain Routing---
// Route::domain('jacinda.myapp.com')->group(function() {
//     Route::get('user/{id}', function () {
//         return 'coba';
//     });
// });
/** membuat grup rute yang terkait dengan subdomain tertentu dari aplikasi jacinda.myapp.com.
 * jadi jika mengakses URL http://jacinda.myapp.com/user/12 makan akan ditampilkan string "coba".
 */

 
//---Route Prefix---
/** Contoh, jika kita memiliki beberapa route yang harus diawali dengan ‘/admin, kita dapat membuat group routing dengan awalan ‘user’ dan menentukan rute mana
 * saja yang termasuk dalam group tersebut. Dengan cara tersebut masing-masing
 * halaman dapat di akses dengan URL ‘/admin/users, ‘/admin/home, dan ‘/admin/report.
 */
// Route::prefix('admin')->group(function () {
    // Route::get('/users', function(){
    //     return 'ini halaman /admin/users';
    // });
    // Route::get('/home', function(){
    //     return 'ini halaman /admin/home';
    // });
    // Route::get('/report', function(){
    //     return 'ini halaman /admin/report';
    // });
// });