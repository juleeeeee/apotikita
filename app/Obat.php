<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public $primaryKey = 'kode_obat';

    protected $table = 't_obatt';

    protected $fillable = ['nama_obat', 'jenis_obat', 'kategori', 'harga_obat', 'stok'];

    public $timestamps = false;
}
