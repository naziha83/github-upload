<?php

namespace App\Http\Controllers\Traits;

use App\Models\KJ\KjbPesanan;
use App\Models\KJ\KjbStatusTindakan;

trait SistemKonfig
{
    // Get No Pesanan terkini dari database, berdasarkan flag pesanan (e.g: KJB, KJG), generate No Pesanan
    public function getNoPesanan($flag)
    {
        $indicator = $flag;
        $bulan = date('m');
        $tahun = date('y');
        $result = $indicator . '/'. $bulan . $tahun . '/';
        $len = strlen($result);

        $lastNo = KjbPesanan::select('no_pesanan')->where('no_pesanan', 'like', $result.'%' )->latest()->first();

        if ( $lastNo ) {
            $lastRecord = $lastNo->no_pesanan;
            $trim = substr($lastRecord, $len);
            $nextNumber = sprintf('%04d', ++$trim);

            return $result . $nextNumber;
        }
        else {
            $nextNumber = '0001';

            return $result . $nextNumber;
        }
    }

    // Get status semasa
    public function getStatusSemasa($idPesanan)
    {
        return KjbStatusTindakan::with('statusPermohonan')->where('pesanan_id', $idPesanan)->latest()->first();
    }

    // Get status semasa - Papar di Kronologi Permohonan (Bukan Pemohon)
    public function getDisplayStatusSemasa($idPesanan)
    {
        return KjbStatusTindakan::with('tindakan', 'statusPermohonan', 'user')->excludedraf()->where('pesanan_id', $idPesanan)->oldest()->get();
    }
}
