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

//--------Admin---------//
Route::get('/', function () {
    return view('admin\welcome');
});

Route::get('/input-akun', function () {
    return view('admin\account-input');
});

Route::get('/kelola-akun', function () {
    return view('admin\account-management');
});

Route::get('/input-karyawan', function () {
    return view('admin\employed-data');
});

Route::get('/kelola-karyawan', function () {
    return view('admin\employed-management');
});

Route::get('/absensi', function () {
    return view('admin\absensi');
});

Route::get('/input-salary', function () {
    return view('admin\input-salary');
});

Route::get('/report-salary', function () {
    return view('admin\report-salary');
});

Route::get('/slip-gaji', function () {
    return view('admin\salary-slip');
});


//--------Karyawan---------//
Route::get('/home-kar', function () {
    return view('karyawan\home');
});

Route::get('/absensi-kar', function () {
    return view('karyawan\absensi');
});

Route::get('/salary-kar', function () {
    return view('karyawan\salary');
});

Route::get('/recognition', function () {
    return view('karyawan\face-absensi');
});


//--------Login---------//
Route::get('/login', function () {
    return view('login');
});

