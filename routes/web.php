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

Route::get('/home', function () {
    return view('biodata1');
});

// variabel
Route::get('/about', function () {
    $nama = "Hardyansyah Maulana Sidik";
    $jeniskelamin = "Laki-Laki";
    $alamat = "Rancamanyar";
    $pendidikan = "SMK";
    $pekerjaan = "Menjaga Dunia";
    return view('biodata2', compact('nama','jeniskelamin','alamat','pendidikan','pekerjaan'));
});

Route::get('/kontak', function () {
    return view('biodata3');
});

//parameter
Route::get('/about2/{nama}/{jeniskelamin}/{alamat}/{pendidikan}/{pekerjaan}', function (Request $request,$nama,$jeniskelamin,$alamat,$pendidikan,$pekerjaan) {
    $nama2 = $nama;
    $jeniskelamin2 = $jeniskelamin;
    $alamat2 = $alamat;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    return view('param', compact('nama2','jeniskelamin2','alamat2','pendidikan2','pekerjaan2'));
});
