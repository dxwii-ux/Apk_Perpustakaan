<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function pengunjung(){
        $siswa = new Siswa();
        return view('pages.data-siswa',[
            'data_siswa'=>$siswa->all()
        ]);
    }

    
}
