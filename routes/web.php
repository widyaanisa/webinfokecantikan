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

Route::get('/login', function () {
    return view('login',
    ["title" => "Login"]);
});


# BREAD Data ARTIKEL (Browse, Read, Edit, Add, Delete)
Route::get('/dataartikel', [ArtikelController::class, 'frontend_index'])->name('frontend_dataartikel_index');

# BackEnd
Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard/dataartikel', [ArtikelController::class, 'backend_index'])->name('backend_dataartikel_index');