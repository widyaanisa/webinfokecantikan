<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login()
    {
        return view('auth/login',
        ["title" => "Login"], 
        ['active' => "login"]);
    }

    public function auth(Request $request)
    {
       $credentials = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        if($request->username=="admin1"&& $request->password=="12345"){
          return redirect()->route('homeadmin');
        }

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/homeuser');
        }

        return back()->with('loginError','Login Failed!');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/index');
    }


    public function forget(){
        return view('auth/forgetp',
        ["title" => "Forget Password"]);
    }
}
