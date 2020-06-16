<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenggunaSistem extends Model
{
    protected $table = 'pengguna_sistem';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function jabatan()
    {
        return $this->belongsTo('App\Models\Jabatan', 'jabatan_id');
    }
}
