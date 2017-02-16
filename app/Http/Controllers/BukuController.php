<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
class BukuController extends Controller
{
    public function index(){
        $buku = Buku::all(); // untuk akses semua database
        //return dd ($buku); // dd untuk debug file yang tersa
        // return $buku; // untuk menampilkan data pada database
        $judul = "Buku tahun 2017";


        return view('demo.index', compact('buku','judul')) ;
    }
}
