<?php

namespace App\Models\KJ;

use Illuminate\Database\Eloquent\Model;

class KjbStatusTindakan extends Model
{
    protected $table = 'kjb_status_tindakan';

    public function kjbPesanan()
    {
        return $this->belongsTo('App\Models\KJ\KjbPesanan', 'pesanan_id');
    }

    public function tindakan()
    {
        return $this->belongsTo('App\Models\Tindakan', 'tindakan_id');
    }

    public function statusPermohonan()
    {
        return $this->belongsTo('App\Models\StatusPermohonan', 'status_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function scopeLatestStatus($query)
    {
        return $query->selectRaw('pesanan_id, max(created_at) as created_at')->groupBy('pesanan_id')->get();
    }

    public function scopeExcludeDraf($query)
    {
        return $query->where('status_id', '!=', '1');
    }
}
