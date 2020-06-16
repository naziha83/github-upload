<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeretaVariasi extends Model
{
    protected $table = 'kereta_variasi';

    public function keretaWarna()
    {
        return $this->belongsTo('App\Models\KeretaWarna', 'warna_id');
    }

    public function keretaKategori()
    {
        return $this->belongsTo('App\Models\KeretaKategori', 'kategori_id');
    }

    public function keretaTransmisi()
    {
        return $this->belongsTo('App\Models\KeretaTransmisi', 'transmisi_id');
    }

    public function keretaCat()
    {
        return $this->belongsTo('App\Models\KeretaCat', 'cat_id');
    }

    public function keretaModel()
    {
        return $this->belongsTo('App\Models\KeretaModel', 'model_id');
    }

    public function konsesiKereta()
    {
        return $this->hasMany('App\Models\KonsesiKereta');
    }

    public function kjbPesanan()
    {
        return $this->hasMany('App\Models\KJ\KjbPesanan');
    }
}
