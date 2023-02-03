<?php

use Illuminate\Support\Facades\Route;


// untuk tampilan awal yaitu dashboard ketika sudah login berbasis bootstrap
Route::get('/view', function () {
    return view('view');
});

// untuk master data perusahaan
Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@index');
Route::get('/mahasiswa/create', 'App\Http\Controllers\MahasiswaController@create');
Route::post('/mahasiswa/store', 'App\Http\Controllers\MahasiswaController@store');
Route::get('/mahasiswa/destroy/{id}', '\App\Http\Controllers\MahasiswaController@destroy');
Route::get('/mahasiswa/edit/{id}', 'App\Http\Controllers\MahasiswaController@edit');
Route::post('/mahasiswa/update', 'App\Http\Controllers\MahasiswaController@update');







require __DIR__.'/auth.php';



