<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		//$this->call(PegawaiSeeder::class);
 		//$this->call(PembayaranSeeder::class);
 		//$this->call(ObatSeeder::class);
 		$this->call(LoginSeeder::class);
    }
}
