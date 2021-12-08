@extends('layouts.backendadmin')

    @section('content')
    <div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-primary">Review</h1>
</div>

<div class="card shadow mb-4">

    <div
        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Review</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Durasi Pemakaian Produk</th>
                            <th>Foto</th>
                            <th>Rate</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NUTRISHE INTENSIVE BRIGHT & GLOW SERUM </td>
                            <td>Muka jadi lebih lembab, bekas jerawat berkurang</td>
                            <td>2 Bulan</td>
                            <td><img src="images/product_01.jpg" width="120px"></td>
                            <td>
                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                <a class="view" title="View" data-toggle="tooltip"><i class="fas fa-eye"></i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
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