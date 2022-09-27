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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/input-akun', function () {
    return view('account-input');
});

Route::get('/kelola-akun', function () {
    return view('account-management');
});

Route::get('/input-karyawan', function () {
    return view('employed-data');
});

Route::get('/kelola-karyawan', function () {
    return view('employed-management');
});

Route::get('/absensi', function () {
    return view('absensi');
});

Route::get('/input-salary', function () {
    return view('input-salary');
});

Route::get('/report-salary', function () {
    return view('report-salary');
});

Route::get('/slip-gaji', function () {
    return view('salary-slip');
});