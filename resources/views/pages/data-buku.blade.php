@extends('Halaman-utama')

@section('konten-utama')
<div class="row">
    <div class="col-12 mb-2 d-flex">
        <p class="text-uppercase fw-bold">Dashboard</p>
    </div>
</div>
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Id Buku</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Pengarang</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn" style="background-color: red">Submit</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
