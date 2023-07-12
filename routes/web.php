<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\akuntansitransaksiController@index');
    Route::get('akuntansitransaksi', 'App\Http\Controllers\akuntansitransaksiController@index');
    
    Route::get('akuntansitransaksi/tambah', 'App\Http\Controllers\akuntansitransaksiController@tambah');
    Route::post('akuntansitransaksi/tambah_proses', 'App\Http\Controllers\akuntansitransaksiController@tambah_proses');
    Route::get('akuntansitransaksi/edit/{id}', 'App\Http\Controllers\akuntansitransaksiController@edit');
    Route::post('akuntansitransaksi/edit_proses', 'App\Http\Controllers\akuntansitransaksiController@edit_proses');
    Route::get('akuntansitransaksi/delete/{id}', 'App\Http\Controllers\akuntansitransaksiController@delete');
    
    Route::get('mahasiswaferdi', 'App\Http\Controllers\MahasiswaFerdiController@index');
    Route::get('mahasiswaferdi/tambah', 'App\Http\Controllers\MahasiswaFerdiController@tambah');
    Route::post('mahasiswaferdi/tambah_proses', 'App\Http\Controllers\MahasiswaFerdiController@tambah_proses');
    Route::get('mahasiswaferdi/edit/{id}', 'App\Http\Controllers\MahasiswaFerdiController@edit');
    Route::post('mahasiswaferdi/edit_proses', 'App\Http\Controllers\MahasiswaFerdiController@edit_proses');
    Route::get('mahasiswaferdi/delete/{id}', 'App\Http\Controllers\MahasiswaFerdiController@delete');


    Route::get('prodifathul', 'App\Http\Controllers\ProdifathulController@index');
    Route::get('prodifathul/tambah', 'App\Http\Controllers\ProdifathulController@tambah');
    Route::post('prodifathul/tambah_proses', 'App\Http\Controllers\ProdifathulController@tambah_proses');
    Route::get('prodifathul/edit/{id}', 'App\Http\Controllers\ProdifathulController@edit');
    Route::post('prodifathul/edit_proses', 'App\Http\Controllers\ProdifathulController@edit_proses');
    Route::get('prodifathul/delete/{id}', 'App\Http\Controllers\ProdifathulController@delete');

