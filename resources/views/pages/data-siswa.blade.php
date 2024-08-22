@extends('layout-utama')

@section('konten-utama')
<h3 class="text-center">Isi Data Siswa</h3>
<button class="tambah-data-btn mt-2" style="background-color:#F0A8D0;" onclick="window.location.href='add_data.php'">+ Tambah Buku</button>
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Id Anggota</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Anggota</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kelas</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No Hp</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Simpan</a>
        <a href="" class="btn btn-danger">Batal</a></th>
    </tr>
  </form>
@endsection
