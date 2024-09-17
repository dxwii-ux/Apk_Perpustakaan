@extends('Halaman-pengunjung')

@section('konten-pengunjung')
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand text-dark">Daftar Buku</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <ul class="nav nav-pills d-flex mb-auto nav text-center text-white">
            <li class="">
                <a class="nav-link active text-dark mt-2" style="background-color: #93C6E7" aria-current="page">Terfavorit</a>
            </li>
        </ul>
        <div id="card" class="d-flex flex-wrap">
            <div class="card mt-4" style="width: 14rem; margin-right: 20px;">
                <img src="/image/gusdur.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card mt-4" style="width: 14rem; margin-right: 20px;">
                <img src="/image/bj.habibi.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card mt-4" style="width: 14rem; margin-right: 20px;">
                <img src="/image/mohammad.jpg" class="card-img-top" alt="...">
            </div>
            <div id="card" class="d-flex">
                <div class="card mt-4" style="width: 14rem; margin-right: 20px;">
                    <img src="/image/soekarno.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <ul class="nav nav-pills d-flex mb-auto nav text-center text-white">
            <li class="">
                <a class="nav-link active text-dark mt-2" style="background-color: #93C6E7" aria-current="page">Terbaru</a>
            </li>
        </ul>
        <div id="card" class="d-flex flex-wrap">
            <div class="card mt-4" style="width: 14rem; margin-right: 20px;">
                <img src="/image/gusdur.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card mt-4" style="width: 14rem; margin-right: 20px;">
                <img src="/image/bj.habibi.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card mt-4" style="width: 14rem; margin-right: 20px;">
                <img src="/image/5.jpg" class="card-img-top" alt="...">
            </div>
            <div id="card" class="d-flex">
                <div class="card mt-4" style="width: 14rem; margin-right: 20px;">
                    <img src="/image/5.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css-pengunjung')
    <style>
        body {
            background-color: rgb(230, 230, 230);
        }
    </style>
@endsection
