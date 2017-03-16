<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mahasiswacontroller.php extends Controller
{
    //
     public function awal()
    {
    	return "Hello dari mahasiswacontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Syamsul Fatah';
    	$mahasiswa->nim = '1515015068';
    	$mahasiswa->alamat = 'Jl. H.Hasan Basri';
    	$mahasiswa->pengguna_id = '1';
    	$mahasiswa->save();
    	return "Data Nama mahasiswa {$mahasiswa->nama} Telah Disimpan";
    }
}
