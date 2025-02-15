<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/transaksiP', function () {
    return view('petugas.transaksiP');
});

Route::get('/databarangP', function () {
    return view('petugas.databarangP');
});

Route::get('/datamasterP', function () {
    return view('petugas.datamasterP');
});

Route::get('/laporanP', function () {
    return view('petugas.laporanP');
});

Route::get('/beranda', function () {
    return view('admin.beranda');
});

Route::get('/datapetugas', function () {
    return view('admin.datapetugas');
});

Route::get('/transaksi', function () {
    return view('admin.transaksi');
});

Route::get('/databarang', function () {
    return view('admin.databarang');
});

Route::get('/datamaster', function () {
    return view('admin.datamaster');
});

Route::get('/laporan', function () {
    return view('admin.laporan');
});