<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
     public $primaryKey = 'no_bayar';

    protected $table = 't_pembayaran';

    protected $fillable = ['tgl_bayar', 'kode_obat', 'kuantitas', 'total_bayar', 'id_pegawai'];

    public $timestamps = false;

    public function obat()
    {
    	return $this->hasOne('\App\Obat', 'kode_obat', 'kode_obat');
    }

    public function pegawai()
    {
    	return $this->hasOne('\App\Pegawai', 'id_pegawai', 'id_pegawai');
    }
}
