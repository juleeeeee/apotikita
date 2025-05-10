<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $primaryKey = 'id_pegawai';

    protected $table = 't_pegawaii';

    protected $fillable = ['nama_pegawai', 'jk', 'alamat', 'notelp', 'foto'];

    public $timestamps = false;

    public function getJKDisplayAttribute()
    {
    if (@$this->attributes['jk'] == 'L') return 'Laki-laki';
    if (@$this->attributes['jk'] == 'P') return 'Perempuan';
    return '-';
    }
}
