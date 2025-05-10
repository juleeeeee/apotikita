<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePegawaii extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pegawaii',function(Blueprint $table) {
			$table->increments('id_pegawai');
			$table->string('nama_pegawai',40);
			$table->enum('jk', ['L', 'P']);
			$table->text('alamat');
			$table->string('notelp',12);
	   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_pegawaii');
    }
}
