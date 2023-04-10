<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\OrderDetail;

class HomeController extends Controller
{
    public function index(){
        $get = Buku::all();
        $kategori = Kategori::all();
        $recent = Buku::orderBy('date_added', 'desc')->get();
        // $best_sell = OrderDetail::where('id_buku', $get->id_buku)->groupBy('id_buku')->get();
        return view('page/index', ['recent' => $recent, 'kategori' => $kategori,
        // 'best_sell' => $best_sell
        ]);
    }
    public function search(Request $request){
        $get = Buku::all();
        $kategori = Kategori::all();
        if(isset($request->kategori)){
            $k = $request->keyword;
            $data = Buku::where(function($query) use ($k){$query->where('judul', 'like', '%'.$k.'%')->orWhere('harga', $k);})->whereRelation('kategori', 'nama_kategori', $request->kategori)->get();
        }
        else{
            $data = Buku::where('judul', 'like', '%'.$request->keyword.'%')->orWhere('harga', $request->keyword)->get();
        }
        return view('page/search', ['data' => $data, 'kategori' => $kategori]);
    }
}
