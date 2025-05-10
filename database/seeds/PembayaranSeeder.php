<?php

use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			"tgl_bayar" => "2017-02-03",
			"kode_obat" => "1",
			"kuantitas" => "1",
			"total_bayar" => "23000",
			"id_pegawai" => "1"
		];
		DB::table('t_pembayaran')->insert($data);
    }
}
