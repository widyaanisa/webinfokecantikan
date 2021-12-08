<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('home',
    ["title" => "Home"]);
});

Route::get('/article', function () {
    return view('article',
    ["title" => "Article"]);
});

Route::get('/review', function () {
    return view('review',
    ["title" => "Review"]);
});

Route::get('/wantto', function () {
    return view('Wantto',
    ["title" => "Want To?"]);
});


Route::get('/login', function () {
    return view('login',
    ["title" => "Login"]);
});

# BackEnd
Route::get('/homeadmin', function () {
    return view('layouts.backendadmin',
    ["title" => "Home Admin"]);
});

Route::get('/dataartikeladmin', function () {
    return view('dataartikel.admin',
    ["title" => "Data Artikel"]);
});

Route::get('/datareviewadmin', function () {
    return view('datareview.admin',
    ["title" => "Data Review"]);
});

Route::get('/datareviewuser', function () {
    return view('datareview.user',
    ["title" => "Data Review"]);
});

Route::get('/dataartikeluser', function () {
    return view('dataartikel.user',
    ["title" => "Data Artikel"]);
});

Route::get('/homeuser', function () {
    return view('layouts.backend',
    ["title" => "Home User"]);
});