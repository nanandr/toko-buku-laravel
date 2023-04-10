<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id_buku');
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->date('tanggal_terbit');
            $table->string('isbn');
            $table->string('edisi');
            $table->integer('stok');
            $table->float('harga');
            $table->string('deskripsi');
            $table->string('cover');
            $table->unsignedInteger('id_kategori');
            $table->timestamp('date_added')->useCurrent();

            // $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
