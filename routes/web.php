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

Route::get('/', function () {
    return view('UTS/home');
   
});
Route::get('/', function () {
    return view('UTS/produk');
   
});



Route::get('about', function () {
    //$nama = 'Muhammad Hafizh Azman Matondang';
    //$prodi = 'Teknologi Informasi';
    //return view('about')->with('nama', $nama);
    return view('about');
   
});

Route::get('profile', function () {
    $nama = 'Muhammad Hafizh Azman Matondang';
    return view('profile')->with('nama', $nama);
   
});

Route::get('mahasiswa', function () {
    $npm = [123,124,125,126];
    $nama = ['Muhammad','Hafizh','Azman','Matondang'];
    $jumlah = count($npm);
    return view('mahasiswa',compact('npm','jumlah','nama'));  
    
});