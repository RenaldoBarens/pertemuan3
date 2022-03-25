<?php

use Illuminate\Support\Facades\Route;

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

$mhs = [
    1=>['nama'=>'Budiono','jurusan'=>'Sistem Informasi'],
    2=>['nama'=>'Susantiono','jurusan'=>'Sistem Informasi'],
    3=>['nama'=>'Stevaniono','jurusan'=>'Informatika'],
];

Route::get('/', function () {
    return view('welcome',['nama'=>'Renaldo','jurusan'=>'SI']);
});

Route::get('/Mahasiswa', function () {
    return view('welcome',['nama'=>'Budiono','jurusan'=>'SI']);
});