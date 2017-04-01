<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
     public function awal(){
    	return "Hello dari DosenController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new Dosen();
    	$dosen->nama = "Syamsul Fatah";
    	$dosen->nip = "1515015058";
    	$dosen->alamat = "JL H Hasan Basri";
    	$dosen->pengguna_id = 3;
    	$dosen->save();
    	return "Data Dosen dengan Nama {$dosen->nama} telah disimpan";
}
public function ket_dosen(){
    $keterangan = dosen::all(); // fungsi all untuk menampilkan seluruh keterangan dari dosen
    foreach ($keterangan as $ket) { //pemanggilan untuk setiap keterangan
        echo "nama :" .$ket->nama;
        echo "<br>";
        echo "di buat oleh :" .$ket->pengguna->username;
        echo "<p>";
    }
}
}