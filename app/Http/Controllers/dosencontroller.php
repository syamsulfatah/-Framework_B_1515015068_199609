<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class dosencontroller.php extends Controller
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
 		$dosen_matakuliah = new dosen_matakuliah();
 		$dosen->nama = 'Edy Fedora';
 		$dosen->nip = '1';
 		$dosen->pengguna_id = '1';
 		$dosen->save();
 		return "Data Dosen_id ($dosen->nama) Telah Disimpan";
 	}

}
