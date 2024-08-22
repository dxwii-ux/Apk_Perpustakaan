@extends('Halaman-utama')

@section('konten-utama')
    <ul class="nav nav-pills flex mb-auto text-center text-white">
        <li class="">
            <a href="#" class="nav-link active text-dark" style="background-color: white" aria-current="page">
                Data Siswa
            </a>
        </li>
        <li class="">
            <a href="#" class="nav-link active text-dark ms-2" style="background-color: #D9D9D9" aria-current="page">
                Data Buku
            </a>
        </li>
    </ul>

    <ul class="nav nav-pills d-flex mb-auto nav text-center text-white">
        <li class="">
            <a href="#" class="nav-link active text-dark mt-2" style="background-color: #93C6E7" aria-current="page">
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
                    <th scope="col">penerbit</th>
                    <th scope="col">tahun terbit</th>
                    <th scope="col">kelola</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="" class="btn text-white" style="background-color: #059C41">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="" class="btn text-white" style="background-color: #059C41">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="" class="btn text-white" style="background-color: #059C41">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a></td>
                </tr>
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
