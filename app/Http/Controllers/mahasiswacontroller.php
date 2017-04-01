<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;
use App\pengguna;

class MahasiswaController extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController"; 
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = "Syamsul Fatah";
    	$mahasiswa->nim = "1515015068";
    	$mahasiswa->alamat = "Perjuangan 07";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";

    }    
    public function mahasiswa()
    {
        $mahasiswa = mahasiswa::find(1);

            echo"Nama: " .$mahasiswa->nama;
            echo"<br>";
            echo"Username: " .$mahasiswa->pengguna->username; 
        }

}
