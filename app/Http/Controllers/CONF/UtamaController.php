<?php

namespace App\Http\Controllers\CONF;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KJ\KjbPesanan;
use App\Models\PegawaiPerhubungan;
use App\Models\Poskod;
use App\Models\JadualPajakan;
use App\Models\KonsesiPeg;

class UtamaController extends Controller
{
    // Get poskod, return bandar, negeri
    public function getPoskod($poskod)
    {
        $bandar_negeri = Poskod::with('negeri')->wherePoskod($poskod)->get();
        return $bandar_negeri;
    }

    // Get pegawai perhubungan, return pegawai perhubungan details
    public function getPeghubungan($id)
    {
        $peghubungan_id = PegawaiPerhubungan::with('poskod.negeri')->whereId($id)->first();
        return $peghubungan_id;
    }
	
	//Get Sewa Bulanan dan Kos (RM) Penyenggaraan dan Pembaikan Kereta Konsesi
	public function getPajakanDetail($id)
	{
		$jadualPajakan = JadualPajakan::where('id',"=",$id)->first();
		return $jadualPajakan;
	}
	
	//Get senarai nama pegawai konsesi
	public function getPegKonsesi ($id)
	{
		$pegKonsesi = KonsesiPeg::where('id','=',$id)->first();
		return $pegKonsesi;
	}
}
