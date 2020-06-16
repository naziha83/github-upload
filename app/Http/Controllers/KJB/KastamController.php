<?php

namespace App\Http\Controllers\KJB;

use App\Models\KJ\KjbPesanan;
use App\Models\KJ\KjbStatusTindakan;
use App\Models\KonsesiKereta;
use App\Models\StatusPermohonan;
use App\Models\Tindakan;
use App\Models\Jabatan;
use App\Models\PegawaiPerhubungan;
use App\Models\KJ\KjbKenderaan;
use App\Models\KJ\KjbJustifikasi;
use App\Models\PenggunaSistem;
use App\Models\KeretaVariasi;
use App\Models\Poskod;
use App\Models\RujStesenKastam;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\SistemKonfig;

use App\Http\Requests\KJB\KastamFormRequest;

use PDF;

class KastamController extends Controller
{
	use SistemKonfig;
	
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function semakanEdit(KjbPesanan $kjbPesanan)
    {
        $user = Auth::user();
        $kjbStatusTindakan = $this->getDisplayStatusSemasa($kjbPesanan->id);
        $statusSemasa = $kjbStatusTindakan->last()->statusPermohonan->status;
		$konsesiKereta = KonsesiKereta::whereRaw("variasi_id='$kjbPesanan->variasi_id' AND no_pesanan='$kjbPesanan->no_pesanan'")->first();

        if (in_array($statusSemasa, ['D1']))
            return view('KJB.kastamsemak', compact('user', 'kjbPesanan', 'kjbStatusTindakan', 'konsesiKereta'));
        else
            abort(403);
    }
	
	public function semakanUpdate(KastamFormRequest $request, KjbPesanan $kjbPesanan)
    {
        $statusSemasa = $this->getStatusSemasa($kjbPesanan->id);

        if (!in_array($statusSemasa->statusPermohonan->status, ['D1']))
            abort(403);

        $kjbStatusTindakan = new KjbStatusTindakan();
        $tindakan = Tindakan::whereTindakan('C')->first();

        if ($request->kastam == '1') {
            $status = StatusPermohonan::whereStatus('C2')->first();
            $jenismsg = '<strong>LENGKAP</strong><br>Permohonan pengecualian cukai diluluskan. Dihantar untuk tindakan pihak konsesi.';
        }
        else {
            $status = StatusPermohonan::whereStatus('C3')->first();
            $tindakan = Tindakan::whereTindakan('C')->first();
            $jenismsg = '<strong>TIDAK LENGKAP</strong><br>Permohonan pengecualian cukai tidak diluluskan. Dihantar untuk tindakan pihak konsesi.';
        }

        $kjbStatusTindakan->pesanan_id = $kjbPesanan->id;
        $kjbStatusTindakan->user_id = Auth::user()->id;
        $kjbStatusTindakan->tindakan_id = $tindakan->id;
        $kjbStatusTindakan->status_id = $status->id;
        $kjbStatusTindakan->catatan = $request->ulasan;

        if ($kjbStatusTindakan->save()) {
            $msg = "swal({\n";
            $msg .= "title: '" . $kjbPesanan->no_pesanan . "',\n";
            $msg .= "html: '" . $jenismsg . "',\n";
            $msg .= "type: 'success',\n";
            $msg .= "timer: 5000\n";
            $msg .= "}); \n";

            return redirect()->route('kjb.index')->with('status', $msg)->with('flag', 'hantar');
        }
    }
	
	public function cetakPermohonan (KjbPesanan $kjbPesanan)
	{
		$user = Auth::user();
		
		$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
		$keretaVariasi = KeretaVariasi::with('keretaModel.keretaBuatan', 'keretaModel.bahanBakar', 'keretaCat', 'keretaWarna', 'keretaKategori', 'keretaTransmisi')->where('id','=',$kjbPesanan->variasi_id)->first();
        $jabatan = Jabatan::where('id', '=', $kjbPesanan->jabatan_id)->first();
        $poskod = Poskod::with('negeri')->where('id','=',$kjbPesanan->poskod_id)->first();
        $pegawaiPerhubungan = PegawaiPerhubungan::with('poskod', 'jabatan')->where('id','=',$kjbPesanan->pegawai_perhubungan_id)->first();
        $jeniskenderaan = KjbKenderaan::all();
        $kjbJustifikasi = KjbJustifikasi::with('kjbKenderaan')->where('pesanan_id', $kjbPesanan->id)->get();
		$penggunaSistem = PenggunaSistem::with('user')->where('user_id','=',$kjbPesanan->pelulus_id)->first();
		
		$pdf = PDF::loadView('KJB.cetakan.cetak_borang', compact('user', 'kjbPesanan', 'kjbPesanan1','keretaVariasi','jabatan','poskod','pegawaiPerhubungan','kjbJustifikasi','jeniskenderaan','penggunaSistem'));
		return $pdf->download('borang-pesanan-kjb-'.$kjbPesanan->no_pesanan.'.pdf');
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KJ\KjbPesanan  $kjbPesanan
     * @return \Illuminate\Http\Response
     */
    public function show(KjbPesanan $kjbPesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KJ\KjbPesanan  $kjbPesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(KjbPesanan $kjbPesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KJ\KjbPesanan  $kjbPesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KjbPesanan $kjbPesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KJ\KjbPesanan  $kjbPesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KjbPesanan $kjbPesanan)
    {
        //
    }
}
