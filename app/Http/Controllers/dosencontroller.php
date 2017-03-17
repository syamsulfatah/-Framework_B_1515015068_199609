<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
class dosenController extends Controller
{
    //
    public function awal()
 	{
 		return "Hello dari dosencontroller";

 	}
 	public function tambah()
 	{
 		return $this->simpan();
 	}
 	public function simpan()
 	{
 		$dosen = new dosen();
 		$dosen->nama = 'Edy Fedora';
 		$dosen->nip = '1';
 		$dosen->alamat = 'jln perjuangan 7';
 		$dosen->pengguna_id = '1';
 		$dosen->save();
 		return "Data Dosen_id ($dosen->nama) Telah Disimpan";
 	}

}
