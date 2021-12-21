<?php

use App\Models\Artikel;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\wanttoController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\registerController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# Homepage
Route::get('/', [homeController::class,'index']);
Route::get('/artikel', [artikelController::class,'artikel_backend']);
Route::get('/review', [reviewController::class,'index']);
Route::get('/wantto', [wanttoController::class,'index']);

Route::get('/login', [loginController::class,'login']);
Route::post('/login-user', [loginController::class,'auth']);

Route::get('/register', [registerController::class,'register']);
Route::post('/register-user', [registerController::class,'store']);

Route::get('/forget', [loginController::class,'forget']);

# Dashboard Admin
Route::get('/homeadmin', [adminController::class,'homeadmin']);
    
    # CRUD data artikel
Route::get('/dataartikeladmin', [adminController::class,'dataartikel_admin']);

Route::get('/tambahdataartikel', [artikelController::class,'create']); #insert
Route::post('/artikeltambah', [artikelController::class,'store']);
Route::post('/editdataartikel', [artikelController::class,'edit_backend']);
Route::post('/artikeldelete/{id_dataartikel}',[artikelController::class,'hapusartikel']);
Route::get('/artikelupdate/{id_dataartikel}', [artikelController::class,'editartikel']);

Route::get('/datareviewadmin', [adminController::class,'datareview_admin']);
Route::get('/datawanttoadmin', [adminController::class,'datawantto_admin']);
Route::get('/usersmanage', [userController::class,'usersmanage_backend']);

# Dashboard User
Route::get('/homeuser', [userController::class,'homeuser']);
Route::get('/datareviewuser', [userController::class,'dataartikel_user']);
Route::get('/datawanttouser', [userController::class,'datawantto_user']);

Route::get('/profiladmin', function () {
    return view('profil.admin',
    ["title" => "Profil Admin"]);
});

