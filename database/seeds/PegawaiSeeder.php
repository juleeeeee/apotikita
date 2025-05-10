<?php

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			"nama_pegawai" => "Jajang Sukmara",
			"jk" => "L",
			"alamat" => "Jalan Riau Kidul",
			"notelp" => "089556432123"
		];
		DB::table('t_pegawaii')->insert($data);
    }
}
