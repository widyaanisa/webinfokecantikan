<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\wanttoController;

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

# FrontEnd
Route::get('/', [homeController::class,'index']);
Route::get('/artikel', [artikelController::class,'index']);
Route::get('/review', [reviewController::class,'index']);
Route::get('/wantto', [wanttoController::class,'index']);
Route::get('/login', [loginController::class,'index']);

Route::get('/register', function () {
    return view('register',
    ["title" => "Sign Up"]);
});

Route::get('/forget', function () {
    return view('forgetp',
    ["title" => "Forget Password"]);
});

# BackEnd
Route::get('/homeadmin', function () {
    return view('home.admin',
    ["title" => "Home"]);
});

Route::get('/homeuser', function () {
    return view('home.user',
    ["title" => "Home"]);
});

Route::get('/dataartikeladmin', function () {
    return view('admin.dataartikel',
    ["title" => "Data Artikel"]);
});

Route::get('/datareviewadmin', function () {
    return view('datareview.admin',
    ["title" => "Data Review"]);
});

Route::get('/datawanttoadmin', function () {
    return view('datawantto.admin',
    ["title" => "Data Want To"]);
});

Route::get('/datareviewuser', function () {
    return view('datareview.user',
    ["title" => "Data Review"]);
});

Route::get('/datawanttouser', function () {
    return view('datawantto.user',
    ["title" => "Data Want To"]);
});

Route::get('/usersmanagement', function () {
    return view('admin.usersmanage',
    ["title" => "User Management"]);
});

Route::get('/profiladmin', function () {
    return view('profil.admin',
    ["title" => "Profil Admin"]);
});
