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
            <label for="exampleInputEmail1" class="form-label">Id Buku</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_buku" value="{{ $buku->kode_buku  }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" value="{{ $buku->judul  }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penerbit" value="{{ $buku->penulis }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penerbit" value="{{ $buku->penerbit }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $buku->tahun_terbit }}" name="tahun_terbit">
        </div>
        <button type="submit" class="btn btn-primary text-white">Simpan</button>
        <button type="submit" class="btn text-white" style="background-color: red">Batal</button>
    </form>
@endsection
