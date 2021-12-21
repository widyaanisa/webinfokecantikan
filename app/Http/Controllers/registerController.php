<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register() {
        $data = User::all();
        return view('auth.register', ["title" => "Registrasi"], compact('data'));
    } 

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5|max:150',
            'domisili' => 'required|max:150',
            'tanggallahir' => 'required|unique:users|max:150',
            'email' => 'required|max:150',
            'username' => 'required|unique:users|min:5|max:150',
            'pasword' => 'required|min:5|max:250',
        ]);

        $validatedData['password']=bcrypt($validatedData['password']);
        User::create($validatedData);
 
        $request->session()->flash('success','Registration successfull! Please Login');
 
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
