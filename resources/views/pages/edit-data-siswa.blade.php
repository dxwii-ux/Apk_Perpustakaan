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
            <label for="" class="form-label">NISN</label>
            <input type="text" class="form-control" name="nis" value="{{ $dataSiswa->nis  }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $dataSiswa->nama  }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{ $dataSiswa->alamat }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">No Telepon</label>
            <input type="text" class="form-control" value="{{ $dataSiswa->no_telp }}" name="no_telp">
        </div>
        <button type="submit" class="btn btn-primary text-white">Simpan</button>
        <button type="submit" class="btn text-white" style="background-color: red">Batal</button>
    </form>
@endsection
