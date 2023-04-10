<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";
    protected $primaryKey = "id_buku";
    protected $fillable = ['judul', 'penulis', 'pengarang', 'id_kategori', 'cover', 'harga', 'tanggal_terbit', 'penerbit', 'isbn', 'edisi', 'stok', 'deskripsi'];
    public $timestamps = false;

    public function kategori(){
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }
}
