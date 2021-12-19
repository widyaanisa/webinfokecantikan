@extends('layouts.backendadmin')

    @section('content')
    <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Profile Admin</h6>
                            <div class="dropdown no-arrow"> 
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> 
                                </a> 
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" 
                                    aria-labelledby="dropdownMenuLink">  
                                    <a class="dropdown-item" href="editprofiladmin.html"><i class="fas fa-user-edit fa-sm fa-fw mr-2"></i>Edit Profile</a>  
                                </div> 
                            </div> 
                        </div>
                        <div class="card-body">
                            <div class="row" style="height:100%">
                                <div class="col-md-3">
                                    <div class="profile-img">
                                        <img class="rounded-circle mt-3" src="../img/photoprofil2.jpg" alt=""/>
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="container">
                                        <form>
                                            <div class="form-group">
                                                <label for=fullName>Nama Lengkap</label>
                                                <input type="text" class="form-control" id="fullName" readonly value="Widya Anisa">
                                            </div>
                                            <div class="form-group">
                                                <label for=email>Email</label>
                                                <input type="email" class="form-control" id="email"  readonly value="Admin1@gmail.com">
                                            </div>
                                            <div class="form-group">
                                                <label for=jabatan>Jabatan</label>
                                                <input type="text" class="form-control" id="jabatan" readonly value="Admin">
                                            </div>
                                            <div class="form-group ">
                                                <label for=tempatlahir>Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempatlahir" readonly value="Jakarta">
                                            </div>
                                            <div class="form-group ">
                                                <label for=tanggallahir>Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tanggallahir" readonly value="1999-07-05">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

    
 @endsection