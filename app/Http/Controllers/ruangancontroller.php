<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{
    //
    public function awal()
    {
    	return "Hello dari ruangancontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$ruangan = new ruangan();
    	$ruangan->title = 'Lab 411b';
    	$ruangan->save();
    	return "Data Title {$ruangan->title} Telah Disimpan";
    }
}
