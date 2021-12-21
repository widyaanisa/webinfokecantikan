@extends('layouts.backendadmin')

    @section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">User Management</h1>
      

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-12">
                            <a type="button" class="btn btn-info add-new" href="/tambahdataartikel"><i class="fa fa-plus"></i> Add New</a>
                        </div>
                    </div>
                </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Domisili</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                </thead>
                @php
    $no=0;
    @endphp
    @foreach($datauser as $du)
                <tbody>
                    <tr>
                        <td>{{$du->nama}}</td>
                        <td>{{$du->domisili}}</td>
                        <td>{{$du->tanggallahir}}</td>
                        <td>{{$du->email}}</td>
                        <td>{{$du->username}}</td>
                        <td>{{$du->password}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            
        </div>
    </div>
</div>
</div>
                <!-- /.container-fluid -->
                @endsection


