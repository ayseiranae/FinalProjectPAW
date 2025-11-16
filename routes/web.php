<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiStokController;

Route::get('/', function(){ return redirect()->route('barang.index'); });

Route::resource('pemasok', PemasokController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('jabatan', JabatanController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('barang', BarangController::class);
Route::resource('transaksi_stok', TransaksiStokController::class);


