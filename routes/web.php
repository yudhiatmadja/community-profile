<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});
Route::get('/koordinatorumum', function () {
    return view('koordinatorumum');
});
Route::get('/program-kerja', function () {
    return view('programkerja');
});
Route::get('/jobdesc', function () {
    return view('jobdesc');
});
Route::get('/lokasi', function () {
    return view('lokasi');
});

Route::get('/login' , [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login' , [LoginController::class, 'authenticate']);
Route::post('/logout' , [LoginController::class, 'logout'])->name('logout');;

Route::get('/register' , [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register' , [RegisterController::class, 'store']);
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::resource('anggota', AnggotaController::class);