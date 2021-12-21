<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeadmin()
    {
        return view('home.admin',
    ["title" => "Home"]);
    }

    public function dataartikel_admin()
    {
        $data  = Artikel::all();
    return view('admin.dataartikel',["title" => "Data Artikel"], compact('data'));
    }

    public function datareview_admin()
    {
        return view('datareview.admin',
    ["title" => "Data Review"]);
    }

    public function datawantto_admin()
    {
        return view('datawantto.admin',
        ["title" => "Data Want To"]);
    }
    
    

    public function admin_backend()
    {
        $data = admin::all();
        return view('homeadmin', compact('data'));
    }

  
}
