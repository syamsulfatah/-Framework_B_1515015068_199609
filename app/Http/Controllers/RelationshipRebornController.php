<?php

namespace App\Http\Controllers;

use App\Dosen;

class RelationshipRebornController extends Controller
{
    public function ujiHas()
    {
        $data = dosen::has('dosen_matakuliah')->get();
        dd($data);
    }

    public function ujiDoesntHave()
{
    $data = dosen::doesntHave('dosen_matakuliah')->get();
    dd($data);
}


}

