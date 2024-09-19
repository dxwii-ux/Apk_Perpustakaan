@extends('Halaman-utama')

@section('konten-utama')
    <ul class="nav nav-pills flex mb-auto text-center text-white">
        <li class="">
            <a href="master-data" class="nav-link active text-dark" style="background-color: white" aria-current="page">
                Data Buku
            </a>
        </li>
        <li class="">
            <a href="/data-siswa" class="nav-link active text-dark ms-2" style="background-color: #D9D9D9" aria-current="page">
                Data Siswa
            </a>
        </li>
    </ul>
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
                    <th scope="col">NISN</th>
                    <th scope="col">nama siswa</th>
                    <th scope="col">alamat</th>
                    <th scope="col">no telepon</th>
                    <th scope="col">kode kelas</th>
                    <th scope="col">kelola</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->kode_kelas }}</td>
                        <td>
                            <a href="/Edit/{{ $item->nis }}" class="btn text-white" style="background-color: #059C41">Edit</a>
                            <a href="/Hapus/{{ $item->nis }}" class="btn btn-danger">Delete</a>
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
