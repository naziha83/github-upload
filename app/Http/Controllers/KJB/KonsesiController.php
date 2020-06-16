<?php

namespace App\Http\Controllers\KJB;

use App\Models\KJ\KjbPesanan;
use App\Models\KJ\KjbStatusTindakan;
use App\Models\KJ\KjbPenerimaan;
use App\Models\KonsesiKereta;
use App\Models\StatusPermohonan;
use App\Models\Tindakan;
use App\Models\BahanBakar;
use App\Models\KeretaVariasi;
use App\Models\JadualPajakan;
use App\Models\KonsesiPeg;
use App\Models\KonsesiPajakan;
use App\Models\Poskod;
use App\Models\Jabatan;
use App\Models\PegawaiPerhubungan;
use App\Models\KJ\KjbKenderaan;
use App\Models\KJ\KjbJustifikasi;
use App\Models\PenggunaSistem;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\SistemKonfig;
use App\Http\Requests\KJB\KonsesiFormRequest;

use DB;
use PDF;

class KonsesiController extends Controller
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

        if (in_array($statusSemasa, ['C1', 'C3']))
            return view('KJB.konsesimohon', compact('user', 'kjbPesanan', 'kjbStatusTindakan','statusSemasa','konsesiKereta'));
        else
            abort(403);
    }

    public function semakanUpdate(KonsesiFormRequest $request, KjbPesanan $kjbPesanan)
    {
        $statusSemasa = $this->getStatusSemasa($kjbPesanan->id);

        if (!in_array($statusSemasa->statusPermohonan->status, ['C1', 'C3']))
            abort(403);

        $kjbStatusTindakan = new KjbStatusTindakan();
        $tindakan = Tindakan::whereTindakan('D')->first();

        if ($request->kastam == '1') {
            $status = StatusPermohonan::whereStatus('D1')->first();
            $jenismsg = '<strong>LENGKAP</strong><br>Permohonan berjaya dihantar untuk kelulusan pengecualian cukai oleh Kastam.';
			
			$konsesiKereta = new KonsesiKereta();
			$konsesiKereta->no_pesanan = $kjbPesanan->no_pesanan;
			$konsesiKereta->variasi_id = $kjbPesanan->variasi_id;
			$konsesiKereta->no_chasis = $request->no_chasis;
			$konsesiKereta->no_enjin = $request->no_enjin;
			$konsesiKereta->no_assembly_plant = $request->no_assembly_plant;
			$konsesiKereta->no_purchase_order = $request->no_purchase_order;
			$konsesiKereta->created_at = date("Y-m-d h:i:s");
			$konsesiKereta->save();
        }
        else {
            $status = StatusPermohonan::whereStatus('B7')->first();
            $tindakan = Tindakan::whereTindakan('B')->first();
            $jenismsg = '<strong>TIDAK LENGKAP</strong><br>Permohonan dihantar untuk tindakan MOF.';
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
	
	public function maklumatKonsesi(KjbPesanan $kjbPesanan)
    {
        $user = Auth::user();
        $kjbStatusTindakan = $this->getDisplayStatusSemasa($kjbPesanan->id);
        $statusSemasa = $kjbStatusTindakan->last()->statusPermohonan->status;
		$bhnBakar = BahanBakar::all()->pluck('fuel','id')->toArray();
		$keretaVariasi = KeretaVariasi::where("id","=",$kjbPesanan->variasi_id)->first();
		$jadualPajakan = JadualPajakan::select("id as idd", DB::raw("DATE_FORMAT(tarikh_kuatkuasa, '%d/%m/%Y') as tkk"), "tarikh_kuatkuasa")->where("model_id","=",$keretaVariasi->model_id)->where("cat_id","=",$keretaVariasi->cat_id)->pluck('tkk','idd');
		$pegKonsesi = KonsesiPeg::whereRaw("trim(status)!='2'")->pluck('nama','id')->toArray();
		
		$konsesiKereta = KonsesiKereta::where('no_pesanan','=',$kjbPesanan->no_pesanan)->first();
		$konsesiPajakan = KonsesiPajakan::where('pesanan_id','=',$kjbPesanan->id)->first();
		if (empty($konsesiPajakan)) {
			$jadual_pajakan_id = "";
		}
		else {
			$jadual_pajakan_id = $konsesiPajakan->jadual_pajakan_id;
		}
		$jadualPajakan2 = JadualPajakan::where('id','=',$jadual_pajakan_id)->first();
		$penerimaan = KjbPenerimaan::where('no_pesanan','=',$kjbPesanan->no_pesanan)->first();
		if (empty($penerimaan)) {
			$penghantar_id = "";
			$saksi_hantar_id = "";
		}
		else {
			$penghantar_id = $penerimaan->penghantar_id;
			$saksi_hantar_id = $penerimaan->saksi_hantar_id;
		}
		$pegKonsesihantar = KonsesiPeg::where('id','=',$penghantar_id)->first();
		$pegKonsesisaksi = KonsesiPeg::where('id','=',$saksi_hantar_id)->first();
		

        if (in_array($statusSemasa, ['C2','C5']))
            return view('KJB.konsesipajak', compact('user', 'kjbPesanan', 'kjbStatusTindakan', 'bhnBakar', 'jadualPajakan', 'pegKonsesi', 'statusSemasa','konsesiKereta','konsesiPajakan','jadualPajakan2','penerimaan','pegKonsesihantar','pegKonsesisaksi'));
        else
            abort(403);
    }
	
	public function simpanKonsesi (KonsesiFormRequest $request, KjbPesanan $kjbPesanan)
	{
		$statusSemasa = $this->getStatusSemasa($kjbPesanan->id);

        if (!in_array($statusSemasa->statusPermohonan->status, ['C2','C5']))
            abort(403);

        $kjbStatusTindakan = new KjbStatusTindakan();
        $tindakan = Tindakan::whereTindakan('C')->first();
		
		//simpan dalam table konsesi_kereta
		$konsesiKereta = KonsesiKereta::where('no_pesanan','=',$kjbPesanan->no_pesanan)->first();
		$konsesiKereta->kuasa_enjin = $request->kuasa_enjin;
		$konsesiKereta->bahan_bakar = $request->bahan_bakar;
		$konsesiKereta->tahun_buatan = $request->tahun_buatan;
		$konsesiKereta->no_pendaftaran = $request->no_pendaftaran;
		$konsesiKereta->trk_daftar = date("Y-m-d", strtotime($request->trk_daftar));
		$konsesiKereta->status = "KJ";
		$konsesiKereta->save();
		
		//simpan dalam table konsesi_pajakan
		if ($statusSemasa->statusPermohonan->status == 'C2')
		{
			$konsesiPajakan = new KonsesiPajakan();
			$konsesiPajakan->pesanan_id = $kjbPesanan->id;
		}
		else
		{
			$konsesiPajakan = KonsesiPajakan::where('pesanan_id','=',$kjbPesanan->id)->first();
		}
		$konsesiPajakan->konsesi_kereta_id = $konsesiKereta->id;
		$konsesiPajakan->no_pajakan = $request->no_pajakan;
		$konsesiPajakan->jadual_pajakan_id = $request->trk_jadual_pakajan;
		$konsesiPajakan->tarikh_mula_pajakan = date("Y-m-d", strtotime($request->trk_mula_pajakan));
		$konsesiPajakan->tarikh_akhir_pajakan = date("Y-m-d", strtotime($request->trk_akhir_pajakan));
		$konsesiPajakan->tempoh_pajakan = $request->tempoh_pajakan;
		$konsesiPajakan->sewa_bulanan = $request->sewa_bulanan;
		$konsesiPajakan->tahun1_mula = $request->awal1;
		$konsesiPajakan->tahun1_akhir = $request->akhir1;
		$konsesiPajakan->tahun1_kos = $request->tahun1_kos;
		$konsesiPajakan->tahun2_mula = $request->awal2;
		$konsesiPajakan->tahun2_akhir = $request->akhir2;
		$konsesiPajakan->tahun2_kos = $request->tahun2_kos;
		$konsesiPajakan->tahun3_mula = $request->awal3;
		$konsesiPajakan->tahun3_akhir = $request->akhir3;
		$konsesiPajakan->tahun3_kos = $request->tahun3_kos;
		$konsesiPajakan->tahun4_mula = $request->awal4;
		$konsesiPajakan->tahun4_akhir = $request->akhir4;
		$konsesiPajakan->tahun4_kos = $request->tahun4_kos;
		$konsesiPajakan->tahun5_mula = $request->awal5;
		$konsesiPajakan->tahun5_akhir = $request->akhir5;
		$konsesiPajakan->tahun5_kos = $request->tahun5_kos;
		$konsesiPajakan->status = "1";
		$konsesiPajakan->created_at = date("Y-m-d h:i:s");
		$konsesiPajakan->save();
		
		//simpan dalam table kjb_penerimaan
		if ($statusSemasa->statusPermohonan->status == 'C2')
		{
			$penerimaan = new KjbPenerimaan();
			$penerimaan->no_pesanan = $kjbPesanan->no_pesanan;
		}
		else
		{
			$penerimaan = KjbPenerimaan::where('no_pesanan','=',$kjbPesanan->no_pesanan)->first();
		}
		$penerimaan->tarikh_penghantaran = date("Y-m-d", strtotime($request->tarikh_penghantaran));
		$penerimaan->tempat_penghantaran = $request->tempat_penghantaran;
		$penerimaan->penghantar_id = $request->nama_hantar;
		$penerimaan->saksi_hantar_id = $request->nama_saksi;
		$penerimaan->created_at = date("Y-m-d h:i:s");
		$penerimaan->save();
		
		if ($request->send == "hantar") 
		{
			$status = StatusPermohonan::whereStatus('C4')->first();
			$jenismsg = '<strong>LENGKAP</strong><br>Maklumat Konsesi telah dikemaskini. Penghantaran kereta kepada Agensi.';
		}
		elseif ($request->send == "simpan")
		{
			$status = StatusPermohonan::whereStatus('C5')->first();
			$jenismsg = '<strong>LENGKAP</strong><br>Maklumat Konsesi telah dikemaskini.';
		}
		
		$kjbStatusTindakan->pesanan_id = $kjbPesanan->id;
		$kjbStatusTindakan->user_id = Auth::user()->id;
		$kjbStatusTindakan->tindakan_id = $tindakan->id;
		$kjbStatusTindakan->status_id = $status->id;
		$kjbStatusTindakan->catatan = $request->ulasan;

		if ($request->send == "hantar") {
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
		elseif ($request->send == "simpan"){
			if ($kjbStatusTindakan->save()){
				$msg = "swal({\n";
                $msg .= "title: '" . $kjbPesanan->no_pesanan . "',\n";
                $msg .= "html: '" . $jenismsg . "',\n";
                $msg .= "type: 'success',\n";
                $msg .= "timer: 5000\n";
                $msg .= "}); \n";
				
				return redirect()->route('kjb.index')->with('status', $msg)->with('flag', 'hantar');
			} 
		}
	}
	
	public function maklumatPenghantaran (KjbPesanan $kjbPesanan)
	{
		$user = Auth::user();
        $kjbStatusTindakan = $this->getDisplayStatusSemasa($kjbPesanan->id);
        $statusSemasa = $kjbStatusTindakan->last()->statusPermohonan->status;
		$penerimaan = KjbPenerimaan::where('no_pesanan','=',$kjbPesanan->no_pesanan)->first();
		$pegKonsesi = KonsesiPeg::whereRaw("trim(status)!='2'")->pluck('nama','id')->toArray();
		$pegKonsesihantar = KonsesiPeg::where('id','=',$penerimaan->penghantar_id)->first();
		$pegKonsesisaksi = KonsesiPeg::where('id','=',$penerimaan->saksi_hantar_id)->first();
		$poskod1 = Poskod::uniquepostcode()->get();

        if (in_array($statusSemasa, ['C4', 'C6']))
            return view('KJB.konsesihantar', compact('user', 'kjbPesanan', 'kjbStatusTindakan','pegKonsesi','pegKonsesihantar','penerimaan','pegKonsesisaksi','poskod1','statusSemasa'));
        else
            abort(403);
	}
	
	public function simpanPenghantaran (KonsesiFormRequest $request, KjbPesanan $kjbPesanan)
	{
		$statusSemasa = $this->getStatusSemasa($kjbPesanan->id);

        if (!in_array($statusSemasa->statusPermohonan->status, ['C4', 'C6']))
            abort(403);

        $kjbStatusTindakan = new KjbStatusTindakan();
		
		if ($request->akuan_hantar == '1') {
			$tindakan = Tindakan::whereTindakan('F')->first();
            $status = StatusPermohonan::whereStatus('F')->first();
            $jenismsg = '<strong>SELESAI</strong><br>Kereta telah berjaya dihantar ke Jabatan/Agensi. Permohonan Selesai.';
        }
        else {
			$tindakan = Tindakan::whereTindakan('C')->first();
            $status = StatusPermohonan::whereStatus('C6')->first();
            $jenismsg = '<strong>LENGKAP</strong><br>Permohonan telah dikemaskini.';
        }
		
		//Update table kjb_pesanan
		$kjb_Pesanan = KjbPesanan::where('id','=',$kjbPesanan->id)->first();
		$kjb_Pesanan->penerima_nokp = $request->penerima_nokp;
		$kjb_Pesanan->penerima_nama = $request->penerima_nama;
		$kjb_Pesanan->penerima_tel_pejabat = $request->penerima_tel_pejabat;
		$kjb_Pesanan->penerima_tel_bimbit = $request->penerima_tel_bimbit;
		$kjb_Pesanan->penerima_alamat1 = $request->penerima_alamat1;
		$kjb_Pesanan->penerima_alamat2 = $request->penerima_alamat2;
		$kjb_Pesanan->penerima_alamat3 = $request->penerima_alamat3;
		$kjb_Pesanan->poskod_id = $request->bandar;
		$kjb_Pesanan->updated_at = date("Y-m-d h:i:s");
		$kjb_Pesanan->save();
		
		//Update table kjb_penerimaan
		$penerimaan = KjbPenerimaan::where('no_pesanan','=',$kjbPesanan->no_pesanan)->first();
		$penerimaan->tarikh_penghantaran = date("Y-m-d", strtotime($request->tarikh_penghantaran));
		$penerimaan->alamat1 = $request->penerima_alamat1;
		$penerimaan->alamat2 = $request->penerima_alamat2;
		$penerimaan->alamat3 = $request->penerima_alamat3;
		$penerimaan->poskod_id = $request->bandar;
		$penerimaan->penghantar_id = $request->nama_hantar;
		$penerimaan->penghantar_tarikh = date("Y-m-d", strtotime($request->penghantar_tarikh));
		$penerimaan->saksi_hantar_id = $request->nama_saksi;
		$penerimaan->saksi_hantar_tarikh = date("Y-m-d", strtotime($request->saksi_hantar_tarikh));
		$penerimaan->penerima_nokp = $request->penerima_nokp;
		$penerimaan->penerima_nama = $request->penerima_nama;
		$penerimaan->penerima_jawatan = $request->penerima_jawatan;
		$penerimaan->penerima_tarikh = date("Y-m-d", strtotime($request->penerima_tarikh));
		$penerimaan->saksi_terima_nama = $request->saksi_terima_nama;
		$penerimaan->saksi_terima_nokp = $request->saksi_terima_nokp;
		$penerimaan->saksi_terima_jawatan = $request->saksi_terima_jawatan;
		$penerimaan->saksi_terima_tarikh = date("Y-m-d", strtotime($request->saksi_terima_tarikh));
		$penerimaan->updated_at = date("Y-m-d h:i:s");
		$penerimaan->save();
		
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
	
	public function cetakAod (KjbPesanan $kjbPesanan)
	{
		$user = Auth::user();
		
		$konsesiKereta = KonsesiKereta::where('no_pesanan','=',$kjbPesanan->no_pesanan)->first();
		$konsesiPajakan = KonsesiPajakan::where('pesanan_id','=',$kjbPesanan->id)->first();
		$jadualPajakan = JadualPajakan::where('id','=',$konsesiPajakan->jadual_pajakan_id)->first();
		$penerimaan = KjbPenerimaan::where('no_pesanan','=',$kjbPesanan->no_pesanan)->first();
		$pegKonsesihantar = KonsesiPeg::where('id','=',$penerimaan->penghantar_id)->first();
		$pegKonsesisaksi = KonsesiPeg::where('id','=',$penerimaan->saksi_hantar_id)->first();
		$jabatan = Jabatan::with('kementerian')->where('id','=',$kjbPesanan->jabatan_id)->first();
		$keretaVariasi = KeretaVariasi::with('keretaModel.keretaBuatan', 'keretaModel.bahanBakar', 'keretaCat', 'keretaWarna', 'keretaKategori', 'keretaTransmisi')->where('id','=',$kjbPesanan->variasi_id)->first();
		$bahanbakar = BahanBakar::where('id','=',$konsesiKereta->bahan_bakar)->first();
		
		$pdf = PDF::loadView('KJB.cetakan.cetak_aod', compact('user', 'kjbPesanan','konsesiKereta','konsesiPajakan','jadualPajakan','penerimaan','pegKonsesihantar','pegKonsesisaksi','jabatan','keretaVariasi','bahanbakar'));
		return $pdf->download('borang-aod-'.$kjbPesanan->no_pesanan.'.pdf');
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
