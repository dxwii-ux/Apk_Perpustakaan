<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Halaman-utama');
});

route::get('/dashboard',function(){
    return view('pages.dashboard');
});

route::get('/master-data',function(){
    return view('pages.master-data');
});

route::get('/laporan',function(){
    return view('pages.laporan');
});

route::get('/transaksi',function(){
    return view('pages.transaksi');
});

route::get('/login',function(){
    return view('pages.login');
});

route::get('/data-buku',function(){
    return view('pages.data-buku');
});
