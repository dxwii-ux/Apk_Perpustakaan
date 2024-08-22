@extends('layout-utama')

@section('konten-utama')
<h3 class="text-center">Data Peminjaman </h3>
<div class="container">
    <button class="tambah-data-btn" style="background-color:#F0A8D0;" onclick="window.location.href='add_data.php'">+ Tambah Data</button>
</div>
    <div class="d-flex container mt-2">
        <table class="table" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th scope="col" style="border: 1px solid black;">No</th>
                    <th scope="col"style="border: 1px solid black;">Id</th>
                    <th scope="col"style="border: 1px solid black;">NIS</th>
                    <th scope="col"style="border: 1px solid black;">Tanggal Pinjam</th>
                    <th scope="col"style="border: 1px solid black;">Tanggal Kembali</th>
                    <th scope="col"style="border: 1px solid black;">Kelola</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" style="border: 1px solid black;">1</th>
                    <td style="border: 1px solid black;">B001</td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a></th>
                </tr>
                <tr>
                    <th scope="row" style="border: 1px solid black;">2</th>
                    <td style="border: 1px solid black;">B002</td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a></th>
                </tr>
                <tr>
                    <th scope="row" style="border: 1px solid black;">3</th>
                    <td style="border: 1px solid black;">B003</td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a></th>
                </tr>
                <tr>
                    <th scope="row" style="border: 1px solid black;">4</th>
                    <td style="border: 1px solid black;">B004</td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a></th>
                </tr>
                <tr>
                    <th scope="row" style="border: 1px solid black;">4</th>
                    <td style="border: 1px solid black;">B004</td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;"></td>
                    <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a></th>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
