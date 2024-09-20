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
  
    public function edit($Kode_buku){
        $buku = new buku();
        return view('pages.edit-data-buku', ['buku' => $buku->find($Kode_buku)]);
    }

    public function update(Request $request, $Kode_buku){
        $buku = new buku();
        $buku->find($Kode_buku)->update($request->all());
        return redirect('/master-data');
    }

    public function Hapus($kode_buku){
        $buku = new buku();
        $buku->find($kode_buku)->delete();
        return redirect('/master-data');
    }
}
