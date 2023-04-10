<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id_order');
            $table->string('no_invoice');
            $table->float('total_pembayaran');
            $table->string('metode_pembayaran');
            $table->unsignedInteger('id_bank');
            $table->unsignedInteger('id_ongkir');
            $table->string('status_pemesanan');
            $table->unsignedInteger('id_member');
            $table->timestamp('date_added')->useCurrent();
        
            // $table->foreign('id_bank')->references('id_bank')->on('bank')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_ongkir')->references('id_ongkir')->on('ongkir')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_member')->references('id_member')->on('member')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
