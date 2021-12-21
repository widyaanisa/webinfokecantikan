<?php namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class artikelController extends Controller {

    public function artikel() {
        $data = Artikel::all();
        return view('artikel', compact('data'));
    }

    public function artikel_backend() {
        $data = Artikel::all();
        return view('artikel', ["title"=> "Article"], compact('data'));
    }


    public function create() {
        $data = Artikel::all();
        return view('admin.create_artikel', ["title"=> "Tambah Data Artikel"], compact('data'));
    }

    public function edit_backend() {
        $data = Artikel::all();
        return view('admin.edit_artikel', ["title"=> "Edit Data Artikel"], compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|unique:dataartikel|max:150',
            'deskripsi' => 'required'
        ]);

        $data = $request->all();
      
        $artikel = Artikel::create($data);
        return back()->with('success',' Data Artikel baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $data = Artikel::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data = Artikel::findOrFail($id);
        return response()->json($data, 200); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
         $artikel = Artikel::find($id)->update($request->all()); 

         return back()->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $data = Artikel::find($id);
        $data->delete();
        return "Artikel ini terhapus";
    }
}