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
    public function tambah(){
        return view('pages.tambah-data-siswa');
    }
    public function simpan(Request $request){
        $request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'max:13',
            'kode_kelas'=>'required',
        ]);
        $siswa = new Siswa();
        $siswa->create($request->all());
        return redirect('/data-siswa');
    }
    public function tampil($nis){
        $siswa = new Siswa();
        return view('pages.edit-data-siswa',[
            'dataSiswa'=>$siswa->find($nis)
        ]);
    }
    public function update(Request $request,$nis){
        $request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'max:13',
        ]);
        $siswa = new Siswa();
        $siswa->find($nis)->update($request->all());
        return redirect('/data-siswa');
    }
    public function Hapuss($nis)
{
    $siswa = Siswa::find($nis);
         if ($siswa) {
        $siswa->delete();
    }
    return redirect('/data-siswa');
}

}  
