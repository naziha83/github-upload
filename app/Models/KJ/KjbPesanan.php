<?php

namespace App\Models\KJ;

use Illuminate\Database\Eloquent\Model;

class KjbPesanan extends Model
{
    protected $table = 'kjb_pesanan';
    protected $dates = ['tarikh_permohonan'];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function kjbJustifikasi()
    {
        return $this->hasMany('App\Models\KJ\KjbJustifikasi', 'pesanan_id');
    }

    public function konsesiPajakan()
    {
        return $this->hasMany('App\Models\KonsesiPajakan');
    }

    // public function kementerian()
    // {
    //     return $this->belongsTo('App\Models\Kementerian', 'kementerian_id');
    // }

    public function jabatan()
    {
        return $this->belongsTo('App\Models\Jabatan', 'jabatan_id');
    }

    public function pegawaiPerhubungan()
    {
        return $this->belongsTo('App\Models\PegawaiPerhubungan', 'pegawai_perhubungan_id');
    }

    public function poskod()
    {
        return $this->belongsTo('App\Models\Poskod', 'poskod_id');
    }

    public function kjbPenerimaan()
    {
        return $this->hasMany('App\Models\KJ\KjbPenerimaan');
    }

    public function keretaVariasi()
    {
        return $this->belongsTo('App\Models\KeretaVariasi', 'variasi_id');
    }

    public function keretaVariasiPindaan()
    {
        return $this->belongsTo('App\Models\KeretaVariasi', 'variasi_id_pindaan');
    }

    public function pindaanBy()
    {
        return $this->belongsTo('App\User', 'pindaan_by');
    }

    public function kjbStatusTindakan()
    {
        return $this->hasMany('App\Models\KJ\KjbStatusTindakan', 'pesanan_id');
    }
}
