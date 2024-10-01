@extends('Halaman-utama')

@section('konten-utama')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-12 mb-2 d-flex">
            <p class="text-uppercase fw-bold">Tambah Data</p>
        </div>
    </div>
    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NISN</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nis">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp">
        </div>        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode Kelas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_kelas">
        </div>        
        <button type="submit" class="btn btn-primary text-white">Simpan</button>
        <button type="submit" class="btn text-white" style="background-color: red">Batal</button>
    </form>
@endsection
