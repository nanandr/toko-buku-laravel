<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;

class BukuController extends Controller
{
    public function desc($id_buku){
        $data = Buku::where('id_buku', $id_buku)->first();
        $kategori = Kategori::all();
        return view('page/buku/desc', ['data' => $data, 'kategori' => $kategori]);
    }
    public function form(){
        $kategori = Kategori::all();
        return view('page/buku/add', ['kategori' => $kategori]);
    }
    public function add(Request $request){
        // $this->validate([
        //     ''
        // ]);
        $file = $request->file('cover');
        Buku::create([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tanggal_terbit' => $request->tanggal_terbit,
            'isbn' => $request->isbn,
            'edisi' => $request->edisi,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori,
            'cover' => $file->getClientOriginalName(),
        ]);
        $file->move('uploads', $file->getClientOriginalName());
        return redirect()->back();
    }
}
