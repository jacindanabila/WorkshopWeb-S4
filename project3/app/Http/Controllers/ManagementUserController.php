<?php
namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index(){
        // return "Method ini akan digunakan untuk mengambil semua data user";
        $nama = "Jacinda Olga Nabila";
        $pelajaran = ["Basis Data", "Sistem Informasi Website", "Statistika"];
        return view('home', compact('nama', 'pelajaran'));
    }
    public function create(){
        return "Method ini akan digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store(Request $request){
        return "Method ini akan digunakan untuk menciptakan data user yang baru";
    }
    public function show($id){
        return "Method ini akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }
    public function edit($id){
        return "Method ini akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" .$id;
    }
    public function update(Request $request, $id){
        return "Method ini akan digunakan untuk mengubah data user dengan id=" .$id;
    }
    public function destroy($id){
        return "Method ini akan digunakan untuk data data user dengan id=" .$id;
    }
}
