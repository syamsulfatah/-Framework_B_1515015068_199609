<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuliah extends Model
{
 	protected $table = 'mahasiswa'
 	protected $fillable = ['nama','nim','alamat','pengguna'];

 	
}
