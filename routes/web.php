<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get("/siswa/{id}/{nama}", function ($id,$nama) {
// //     return "<h1>Saya siswa id $id dengan nama $nama</h1>";
// // })->where(['id'=>'[0-9]+','nama'=>'[A-Za-z]+']);

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('siswa/{id}', [SiswaController::class,'detail'])->where(['id','[0-9]+']);

// Route::get("/guru/{id}/{nama}", function ($id,$nama) {
//     return "<h1>Saya GURU id $id dengan nama $nama</h1>";
// })->where(['id'=>'[0-9]+','nama'=>'[A-Za-z]+']);

Route::get('kelas', [GuruController::class, 'index']);
Route::get('kelas/{id}', [GuruController::class,'detail'])->where(['id'=>'[0-9]+','nama'=>'[A-Za-z]+']);

// Route::get('/', [HalamanController::class,'index']);
// Route::get('/tentang', [HalamanController::class,'tentang']);
// Route::get('/kontak', [HalamanController::class,'kontak']);