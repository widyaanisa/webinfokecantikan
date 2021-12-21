@extends('layouts.backendadmin')

    @section('content')
    <div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-primary">Artikel</h1>
</div>

<div class="card shadow mb-4">

    <div
        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
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
                
             
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th> </th>
                        </tr>
                    </thead>
                    @php
    $no=0;
    @endphp
    @foreach($data as $da)
                    <tbody>
                        <tr>
                            <td>{{$da->judul}}</td>
                            <td>{{$da->deskripsi}}</td>
                            <td>
                                <a class="view" title="View" data-toggle="tooltip" href="/viewdataartikel"><i class="fas fa-eye"></i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip" href="/editdataartikel"><i class="fas fa-edit"></i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip" href="/hapusdataartikel"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div> 
    </div>
</div>


<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
    @endsection