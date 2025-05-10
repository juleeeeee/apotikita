<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pembayaran',function(Blueprint $table) {
			$table->increments('no_bayar');
			$table->date('tgl_bayar');
			$table->integer('kode_obat');
			$table->integer('kuantitas');
			$table->float('total_bayar');
			$table->integer('id_pegawai');
	   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_pembayaran');
    }
}
