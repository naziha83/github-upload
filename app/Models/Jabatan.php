<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';

    public function kementerian()
    {
        return $this->belongsTo('App\Models\Kementerian', 'kementerian_id');
    }

    public function kjbPesanan()
    {
        return $this->hasMany('App\Models\KJ\KjbPesanan');
    }

    public function pegawaiPerhubungan()
    {
        return $this->hasMany('App\Models\PegawaiPerhubungan');
    }

    public function penggunaSistem()
    {
        return $this->hasMany('App\Models\PenggunaSistem');
    }
}
