<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DataBuku;
use App\Http\Controllers\DataController;
use App\Http\Controllers\pengunjung;
use App\Http\Controllers\SiswaController;
use App\Models\buku;
use Illuminate\Support\Facades\Route;

Route::get('/',[pengunjung::class,'pengunjung']);

Route::get('/Halaman-pengunjung', function () {
    return view('Halaman-pengunjung');
});

// route::get('/dashboard',function(){
//     return view('pages.dashboard');
// });

route::get('/master-data',function(){
    $buku = new buku();

    $data = [
        'buku'=>$buku->all()
    ];
    return view('pages.master-data',$data);
});

route::get('/laporan',function(){
    return view('pages.laporan');
});

route::get('/transaksi',function(){
    return view('pages.transaksi');
});

route::get('/tampilanLogin',function(){
    return view('pages.tampilanLogin');
});

route::get('/tambah',[SiswaController::class,'tambah']);
route::post('/tambah',[SiswaController::class,'simpan']);
route::get('/edit{nis}',[SiswaController::class,'tampil']);
route::post('/edit{nis}',[SiswaController::class,'update']);
route::get('/delete{nis}',[SiswaController::class,'delete']);

Route::get('/Edit/{Kode_buku}',[BukuController::class,'edit']);
Route::post('/Edit/{Kode_buku}',[BukuController::class,'update']);

// route::get('/master-data',function(){
//     return view('pages.master-data');
// });

route::get('/tambah-data-buku',[BukuController::class,'tambah']);
route::post('/tambah-data-buku',[BukuController::class,'simpan']);

route::get('/Hapus/{kode_buku}',[BukuController::class,'Hapus']);

route::get('/fiksi',function(){
    return view('pages.fiksi');
});

route::get('/nonFiksi',function(){
    return view('pages.nonFiksi');
});
