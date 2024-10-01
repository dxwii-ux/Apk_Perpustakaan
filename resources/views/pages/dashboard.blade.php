@extends('Halaman-utama')

@section('konten-utama')
<div class="container">
    <div class="row">
        {{-- <div class="col-12 mb-2 d-flex">
            <p class="text-uppercase fw-bold">Dashboard</p>
        </div> --}}
    </div>
    <div class="d-flex container">
    <div class="card text-bg-primary mb-2" style="width: 268px; height: 150px; background-color: #E0E5B6">
        <div class="card-body d-flex justify-content-between align-items-center">
          <p class="card-text mb-0">Data Buku</p>
        </div>
        <a href="/master-data" class="card-header text-dark" style="background-color: #CCD5AE; cursor: pointer;">More Info</a>
      </div>
      <div class="card text-bg-primary mb-3 ms-3" style="width: 268px; height: 150px; background-color: #E1C78F">
        <div class="card-body d-flex justify-content-between align-items-center">
          <p class="card-text mb-0">Transaksi</p>
        </div>
        <div class="card-header" style="background-color: #B0926A; cursor: pointer;">More Info</div>
      </div>
      <div class="card text-bg-primary mb-3 ms-3" style="width: 268px; height: 150px; background-color: #ADC4CE">
        <div class="card-body d-flex justify-content-between align-items-center">
          <p class="card-text mb-0">Laporan</p>
        </div>
        <div class="card-header" style="background-color: #96B6C5; cursor: pointer;">More Info</div>
      </div>
    </div>
</div>

@endsection

@section('css')
<style>
    body{
        background-color:rgb(230, 230, 230);
    }
</style>
@endsection
