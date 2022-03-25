<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;


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
    return view('welcome',['nama'=>'Renaldo','jurusan'=>'SI']);
});

Route::get('/Mahasiswa',[mahasiswaController::class,'index']);

Route::get('/Mahasiswa/create',[mahasiswaController::class,'create']);

// Route::get('/Mahasiswa', function () {
//     $mhs = [
//         1=>['nama'=>'Budiono','jurusan'=>'Sistem Informasi'],
//         2=>['nama'=>'Susantiono','jurusan'=>'Sistem Informasi'],
//         3=>['nama'=>'Stevaniono','jurusan'=>'Informatika'],
//         4=>['nama'=>'gilbertono','jurusan'=>'CS'],
//     ];
//     return view('listMahasiswa')->with('mhs',$mhs);
// });