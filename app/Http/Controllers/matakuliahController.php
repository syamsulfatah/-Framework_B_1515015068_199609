<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahController extends Controller
{
    //
      public function awal()
    {
    	return "Hello dari matakuliahcontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->title = 'Framework';
    	$matakuliah->keterangan = 'Wajib';
    	$matakuliah->save();
    	return "Data Nama matakuliah {$matakuliah->title} Telah Disimpan";
    }
}
