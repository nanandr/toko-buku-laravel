<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOngkir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ongkir', function (Blueprint $table) {
            $table->increments('id_ongkir');
            $table->string('nama_kota');
            $table->float('ongkos_kirim');
            $table->unsignedInteger('id_kurir');
            $table->timestamp('date_added')->useCurrent();

            // $table->foreign('id_kurir')->references('id_kurir')->on('kurir')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ongkir');
    }
}
