<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','alamat'];

    public function pengguna()
 	{
 		return $this->Belongsto(pengguna::class);
 	}
 	public function jadwal_matakuliah(){
 		return $this->hasMany(jadwal_matakuliah::class); //salah satu contoh dari one to many dari mahasiswa (one) ke relasi jadwal matakuliah (many)
 	}
}
