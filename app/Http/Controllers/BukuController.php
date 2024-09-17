<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function tambah(){
        return view('pages.tambah-data-buku');
    }

    public function simpan(Request $request){
        $buku = new buku();

        $buku->create($request->all());

        return redirect('/master-data');
    }
}
