<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function (){
    return view ("Welcome ");
});

Route::get('hello-world', function (){
    return ("hello-world");
});

// Route::get('pengguna/{pengguna}',function($pengguna)
// {
//     return view ("hello-world dari pengguna $pengguna");
// });

Route::get('kelas_b/framework/{mhs?}', function ($anonim){
    return ("Selamat Datang");
});

	Route::get('pengguna','PenggunaController@awal');
	Route::get('pengguna/tambah','PenggunaController@tambah');

	Route::get('dosen','dosenController@awal');
	Route::get('dosen/tambah','dosenController@tambah');

	Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
	Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');


	Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');
	Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');


	Route::get('mahasiswa','mahasiswaController@awal');
	Route::get('mahasiswa/tambah','mahasiswaController@tambah');

	Route::get('ruangan','ruanganController@awal');
	Route::get('ruangan/tambah','ruanganController@tambah');



