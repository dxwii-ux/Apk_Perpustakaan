@extends('Halaman-utama')

@section('konten-utama')
    <h3 class="text-center">Data Buku</h3>
    <ul class="nav nav-pills d-flex mb-auto nav text-center text-white">
        <li class="">
            <a href="/tambah-data-buku" class="nav-link active text-dark mt-2" style="background-color: #93C6E7"
                aria-current="page">
                Tambah Data
            </a>
        </li>
    </ul>
    <div class="d-flex container">

        <table class="table table-bordered border-primary border-dark mt-2 text-center">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">kode buku</th>
                    <th scope="col">judul</th>
                    <th scope="col">penulis</th>
                    <th scope="col">penerbit</th>
                    <th scope="col">tahun terbit</th>
                    <th scope="col">kelola</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->kode_buku }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->penerbit }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
                        <td>
                            <a href="/Edit/{{ $item->kode_buku }}" class="btn text-white" style="background-color: #059C41">Edit</a>
                            <a href="/Hapus/{{ $item->kode_buku }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('css')
    <style>
        body {
            background-color: rgb(230, 230, 230);
        }
    </style>
@endsection
