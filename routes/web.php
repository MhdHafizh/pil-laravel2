<?php

use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\mahasiswaController2;
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

/*Route::get('/', function () {
    return view ('home');

});

Route::get('about', function () {
    $nama = 'Mhd Hafizh Azman Matondang';
    return view ('about');
    
});

Route::get('profile', function () {
    return view ('profile');
    
});

Route::get('mahasiswa', function () {
    return view ('mahasiswa');
    
});

Route::get('tugas', function () {
    return view ('tugas');
    
});

Route::get('/', function () {
    return view ('home');

});
*/
/*Route::get('/',[mahasiswaController2::class,'index']);*/

Route::resource('/',mahasiswaController2::class);
