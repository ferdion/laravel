<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class testController extends Controller
{

    public function index(){
        $buku = Buku::all(); // untuk akses semua database
        //return dd ($buku); // dd untuk debug file yang tersa
        // return $buku; // untuk menampilkan data pada database
        $judul = "Buku tahun 2017";


        return view('demo.test', compact('buku','judul')) ;
    }

    public function store(Request $request){
        Buku::create ($request->all());
        return back();
    }

    public function show($id){
        Buku::find($id);
    }

    public function edit($id){
        $buku =Buku::find($id);
        //return dd($buku);
        return view('demo.edit', compact('buku')) ;
    }
    public function update(Request $request,$id){
        Buku::find($id)->update($request->all());
        return redirect('/buku');
    }

    public function destroy($id){
        Buku::find($id)->delete();
        return redirect('/buku');

    }

}
