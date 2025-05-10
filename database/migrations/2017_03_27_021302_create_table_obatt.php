<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableObatt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_obatt',function(Blueprint $table) {
			$table->increments('kode_obat');
			$table->string('nama_obat',50);
			$table->string('jenis_obat',20);
			$table->string('kategori',40);
			$table->float('harga_obat');
			$table->integer('stok');
	   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_obatt');
    }
}
