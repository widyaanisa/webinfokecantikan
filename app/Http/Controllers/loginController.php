<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class loginController extends Controller
{
    public function index(){
        return view('auth/login',
        ["title" => "Login"]);
    }
}
