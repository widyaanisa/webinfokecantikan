@extends('layouts.backendadmin')

    @section('content')
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-primary">Edit Data Artikel</h1>
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
  
<div class="card shadow mb-4">
    <div class="card-body">
        <form method="post" action="/editdataertikel">
        @csrf
            <div class="form-row">
                <div class="inputJudul">Judul</div>
                <div class="value">
                    <input name="judul" required value="{{ $data->judul }}" type="text" required="required" placeholder="silahkan masukkan judul">
                </div>
            </div>
            <div class="form-row">
                <div class="name">Deskripsi</div>
                <div class="value">
                <input name="deskripsi" required value="{{ $data->deskripsi }}" type="text" required="required" placeholder="silahkan masukkan deskripsi">
                </div>
            </div>
            <input type="submit" value="Edit Data">
            
        </form>
        
</div>
</div>
    </div>
</div>

@endsection