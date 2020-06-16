<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PegawaiPerhubungan extends Model
{
    protected $table = 'pegawai_perhubungan';

    public function jabatan()
    {
        return $this->belongsTo('App\Models\Jabatan', 'jabatan_id');
    }

    public function poskod()
    {
        return $this->belongsTo('App\Models\Poskod', 'poskod_id');
    }

    public function kjbPesanan()
    {
        return $this->hasMany('App\Models\KJ\KjbPesanan');
    }
}
