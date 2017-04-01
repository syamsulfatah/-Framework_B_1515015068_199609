<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen_matakuliah;
use App\Matakuliah;

class dosen_matakuliahController extends Controller
{
     public function awal(){
    	return "Hello dari Dosen matakuliahController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen_matakuliah = new Dosen_matakuliah();
    	$dosen_matakuliah->dosen_id = 1;
    	$dosen_matakuliah->matakuliah_id = 1;
    	$dosen_matakuliah->save();
    	return "Data Dosen Matakuliah dengan id Dosen {$dosen_matakuliah->dosen_id} telah disimpan";
}
public function semua_dosen() {
    $dosen = dosen_matakuliah::all(); //fungsi all di gunakan untuk memanggil semua data
    foreach ($dosen as $dos) { //penggunaan for each bermakna untuk setiap, yang artinya akan di lakukan perulangan terus menerus sampai di temukan
        echo "nama dosen :" .$dos->dosen->nama; //$dos di gunakan untk memanggil semua nama di dosen
        echo "<br>";
        echo "NIP :" .$dos->dosen->nip; //digunakan untuk memanggil variable $dos dosen dimana table dosen berelasi dengan table dosen matakuliah
        echo "<p>";}

}

public function semua_matkul() {
    $dosen = dosen_matakuliah::first(); // fungsi first di gunakan untuk menampilkan data yang pertama
        echo "nama dosen :" .$dosen->dosen->nama; 
        echo "<br>";
        //echo "Matkul :" .$dosen->matakuliah->title; // di gunakan untuk memanggil tittle untuk matakuliah
        $matkul = $dosen->matakuliah_id;

        echo "<br>"; 
        echo "Mengajar pada matakuliah : " .matakuliah::where('id', '=', $matkul)
                        ->select('title')
                        ->get();
    }


}