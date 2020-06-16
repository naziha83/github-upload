<?php

namespace App\Http\Controllers;

use App\Models\KeretaModel;
use App\Models\KeretaVariasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Jabatan;

class TestController extends Controller
{
    public function abc()
    {
        // $keretaVariasi = KeretaVariasi::with('keretaModel', 'keretaCat', 'keretaWarna', 'keretaKategori', 'keretaTransmisi')->get();
        // $user = Auth::user();
        // $jabatan = Jabatan::where('kementerian_id', $user->penggunaSistem->jabatan->kementerian->id)->get();
        // dd($jabatan);

        // dd($user->penggunaSistem->jabatan->kementerian->nama);
        // dd($keretaVariasi);
        // return view('cuba', compact('keretaVariasi', 'user'));

        $indicator = 'KJB';
        $bulan = date('m');
        $tahun = date('y');
        $bil = '0004';

        $result = $indicator . '/'. $bulan . '/' . $tahun . '/';
        $len = strlen($result);
        // dd($len);

        // $result = $indicator . '/'. $bulan . '/' . $tahun . '/' . $bil;
        $daridb = 'KJB/11/19/9014';
        $trim = substr($daridb, $len);
        // dd($trim);
        $count = ++$trim;
        dd($count);

    }
}
