<?php

Auth::routes();

Route::get('/', function () {
    return view('/auth/login'); //welcome.blade.php
});

Route::get('master', function () {
    return view('/layouts/master'); //master template
});


Route::get('about', function () {
    return view('welcome'); //about.blade.php
});



Route::get('/sampah', 'SampahController@index');
Route::post('/sampahbaru', 'SampahController@store');
Route::get('/sampahbaru ', 'SampahController@create');
Route::delete('/sampah/{id}', 'SampahController@delete');

Route::get('/home', 'HomeController@dashboard')->name('beranda');

Route::post('/daftar',  'DaftarController@store');
Route::get('/daftar', 'DaftarController@create');

Route::get('/nasabah', 'NasabahController@index');
Route::get('/nasabah/{username}', 'NasabahController@show');
Route::delete('/nasabah/{username}', 'DaftarController@delete');

Route::get('/transaksi', 'TransaksiMasukController@index');


Route::post('/setor',  'TransaksiMasukController@store');
Route::get('/setor', 'TransaksiMasukController@create');

Route::post('/tarik',  'TransaksiKeluarController@store');
Route::get('/tarik', 'TransaksiKeluarController@create');
