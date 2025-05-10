<?php

use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
			"nama_obat" => "Kombatrin",
			"jenis_obat" => "Pil",
			"kategori" => "Anak-anak",
			"harga_obat" => "4500",
			"stok" => "20"
		];
		DB::table('t_obatt')->insert($data);
    }
}
