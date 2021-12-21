@extends('layouts.backendadmin')

    @section('content')
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-primary">Tambah Data Artikel</h1>
</div>

@if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
<div class="card shadow mr-5 mb-4">
    <div class="card-body">
        <form method="POST" action="/artikeltambah">
    @csrf
        <div class="col-md-3 mb-4">
        <h4 for="Judul">Judul</h4>
                <div class="value">
                    <input name="judul" type="text" required="required" placeholder="silahkan masukkan judul">
                </div>
                <div class="invalid-feedback">
            Please enter your Tittle.
          </div>
            </div>
            <div class="col-md-3 mb-3">
        <h4 for="Deskripsi">Deskripsi</h4>
                <div class="value">
                <input name="deskripsi" type="text" required="required" placeholder="silahkan masukkan deskripsi">
                </div>
            </div>
            <div class="col-md-3 mt-2">
            <input class="btn-primary" type="submit" value="Simpan Data">
</div>
          </form>
</div>
</div>
    </div>
</div>
@endsection