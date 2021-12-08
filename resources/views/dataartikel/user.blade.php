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
                            <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cantik dengan serum Nutrieshe</td>
                            <td>NUTRISHE INTENSIVE BRIGHT & GLOW SERUM 
                            Nutrishe Intensive Bright & Glow Serum adalah serum ringan yang mengandung AlphaArbutin yang membantu meminimalkan darkspot, kulit tidak merata, mengurangi kulit kusam dan mencerahkan kulit. Serum ini juga diresapi dengan ekstrak Brown Seaweed (algae) yang mengandung protein untuk mensuplai sel kulit dengan hidrasi ekstra untuk kulit bercahaya. Bahan lain dalam serum ini adalah Centella Asiatica yang dikenal sebagai bahan penyembuh. Ini membantu memperkuat penghalang kulit, melawan jerawat, menghidrasi dan menenangkan.</td>
                            <td><img src="images/product_01.jpg" width="240px"></td>
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