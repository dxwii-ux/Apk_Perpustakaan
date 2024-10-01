@extends('Halaman-utama')

@section('konten-utama')
<h3 class="text-center">Data Siswa</h3>
    <ul class="nav nav-pills d-flex mb-auto nav text-center text-white">
        <li class="">
            <a href="/tambah-data-siswa" class="nav-link active text-dark mt-2" style="background-color: #93C6E7"
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
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Kode Kelas</th>
                    <th scope="col">Kelola</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_siswa as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->kode_kelas }}</td>
                        <td>
                            <a href="/Editt/{{ $item->nis }}" class="btn text-white" style="background-color: #059C41">Edit</a>
                            <a href="/HapusSiswa/{{ $item->nis }}" class="btn btn-danger">Delete</a>
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
