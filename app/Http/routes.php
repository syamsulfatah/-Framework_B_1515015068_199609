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
    return view ("hello-world");
});

Route::get('pengguna/{pengguna}',function($pengguna)
{
    return view ("hello-world dari pengguna $pengguna");
});

Route::get('kelas_b/framework/{mhs?}', function ($anonim){
    return view ("Selamat Datang");
});


