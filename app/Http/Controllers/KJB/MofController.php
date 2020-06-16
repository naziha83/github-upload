<?php

namespace App\Http\Controllers\KJB;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\SistemKonfig;
use App\Http\Requests\KJB\MofFormRequest;

use App\Models\KJ\KjbPesanan;
use App\Models\KeretaVariasi;
use App\Models\KJ\KjbStatusTindakan;
use App\Models\StatusPermohonan;
use App\Models\Tindakan;
use App\Models\Jabatan;
use App\Models\Poskod;
use App\Models\PegawaiPerhubungan;
use App\Models\KJ\KjbKenderaan;
use App\Models\KJ\KjbJustifikasi;
use App\Models\PenggunaSistem;
use App\Models\DokumenSokongan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Response;
use PDF;

class MofController extends Controller
{
    use SistemKonfig;

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('role:Penyemak MOF', [
            'only' => ['semakanEdit', 'semakanUpdate']
        ]);

        $this->middleware('role:Peraku MOF', [
            'only' => ['perakuanEdit', 'perakuanUpdate']
        ]);

        $this->middleware('role:Pelulus MOF', [
            'only' => ['kelulusanEdit', 'kelulusanUpdate']
        ]);
		
		$this->middleware('role:Penyemak MOF|Peraku MOF|Pelulus MOF', [
            'only' => ['cetakPermohonan','viewFile']
        ]);
    }

    public function semakanEdit(KjbPesanan $kjbPesanan)
    {
        $user = Auth::user();
        $kjbStatusTindakan = $this->getDisplayStatusSemasa($kjbPesanan->id);
        $statusSemasa = $kjbStatusTindakan->last()->statusPermohonan->status;
		$docSokongan = DokumenSokongan::where("pesanan_no","=",$kjbPesanan->no_pesanan)->get();

        if (in_array($statusSemasa, ['B1', 'B4', 'B5', 'B7']))
            return view('KJB.mofsemakan', compact('user', 'kjbPesanan', 'kjbStatusTindakan', 'docSokongan'));
        else
            abort(403);
    }

    public function semakanUpdate(MofFormRequest $request, KjbPesanan $kjbPesanan)
    {
        $statusSemasa = $this->getStatusSemasa($kjbPesanan->id);

        if (!in_array($statusSemasa->statusPermohonan->status, ['B1', 'B4', 'B5', 'B7']))
            abort(403);

        $kjbStatusTindakan = new KjbStatusTindakan();
        $tindakan = Tindakan::whereTindakan('B')->first();

        if ($request->semak == '1') {
            $status = StatusPermohonan::whereStatus('B2')->first();
            $jenismsg = '<strong>LENGKAP</strong><br>Permohonan berjaya dihantar untuk perakuan Kementerian Kewangan Malaysia.';
        }
        else {
            $status = StatusPermohonan::whereStatus('A4')->first();
            $tindakan = Tindakan::whereTindakan('A')->first();
            $jenismsg = '<strong>TIDAK LENGKAP</strong><br>Permohonan dihantar untuk tindakan Pemohon.';
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

    public function perakuanEdit(KjbPesanan $kjbPesanan)
    {
        $user = Auth::user();
        $keretaVariasi = KeretaVariasi::with('keretaModel.keretaBuatan', 'keretaModel.bahanBakar', 'keretaCat', 'keretaWarna', 'keretaKategori', 'keretaTransmisi')->get();

        $kjbStatusTindakan = $this->getDisplayStatusSemasa($kjbPesanan->id);
        $statusSemasa = $kjbStatusTindakan->last()->statusPermohonan->status;
		$docSokongan = DokumenSokongan::where("pesanan_no","=",$kjbPesanan->no_pesanan)->get();

        if ($kjbPesanan->variasi_id_pindaan == null)
            $pindaan = $kjbPesanan->variasi_id;
        else
            $pindaan = $kjbPesanan->variasi_id_pindaan;

        if (in_array($statusSemasa, ['B2', 'B6']))
            return view('KJB.mofperakuan', compact('user', 'kjbPesanan', 'keretaVariasi', 'kjbStatusTindakan', 'pindaan', 'docSokongan'));
        else
            abort(403);
    }

    public function perakuanUpdate(MofFormRequest $request, KjbPesanan $kjbPesanan)
    {
        $statusSemasa = $this->getStatusSemasa($kjbPesanan->id);

        if (!in_array($statusSemasa->statusPermohonan->status, ['B2', 'B6']))
            abort(403);

        $kjbStatusTindakan = new KjbStatusTindakan();
        $tindakan = Tindakan::whereTindakan('B')->first();

        if ($request->peraku == '1') {
            $status = StatusPermohonan::whereStatus('B3')->first();
            $jenismsg = '<strong>DIPERAKU</strong><br>Permohonan berjaya dihantar untuk kelulusan Kementerian Kewangan Malaysia.';
        }
        else {
            $status = StatusPermohonan::whereStatus('B4')->first();
            $jenismsg = '<strong>TIDAK DIPERAKU</strong><br>Permohonan dihantar untuk tindakan Penyemak.';
        }

        if ($request->modelKeretaPinda != $kjbPesanan->variasi_id) {
            $kjbPesanan->variasi_id_pindaan = $request->modelKeretaPinda;
            $kjbPesanan->pindaan_by = Auth::user()->id;
            $kjbPesanan->save();
        }

        $kjbStatusTindakan->pesanan_id = $kjbPesanan->id;
        $kjbStatusTindakan->user_id = Auth::user()->id;
        $kjbStatusTindakan->tindakan_id = $tindakan->id;
		$kjbStatusTindakan->jaw_pelulus_mof = $request->pelulus;
        $kjbStatusTindakan->status_id = $status->id;
        $kjbStatusTindakan->catatan = $request->ulasanPeraku;

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

    public function kelulusanEdit(KjbPesanan $kjbPesanan)
    {
        $user = Auth::user();
        $kjbStatusTindakan = $this->getDisplayStatusSemasa($kjbPesanan->id);
        $statusSemasa = $kjbStatusTindakan->last()->statusPermohonan->status;
		$docSokongan = DokumenSokongan::where("pesanan_no","=",$kjbPesanan->no_pesanan)->get();

        if (in_array($statusSemasa, ['B3', 'B7']))
            return view('KJB.mofkelulusan', compact('user', 'kjbPesanan', 'kjbStatusTindakan', 'docSokongan'));
        else
            abort(403);
    }

    public function kelulusanUpdate(MofFormRequest $request, KjbPesanan $kjbPesanan)
    {
        $ralat = "<script>\n";
        $ralat .= "swal({\n";
        $ralat .= "title: 'Ralat',\n";
        $ralat .= "html: 'Nombor Kad Pengenalan atau Katalaluan salah',\n";
        $ralat .= "type: 'error',\n";
        $ralat .= "timer: 5000,\n";
        $ralat .= "showConfirmButton: false\n";
        $ralat .= "}); \n";
        $ralat .= "</script>\n";

        $statusSemasa = $this->getStatusSemasa($kjbPesanan->id);

        if (!in_array($statusSemasa->statusPermohonan->status, ['B3', 'B7']))
            abort(403);

        $kjbStatusTindakan = new KjbStatusTindakan();
        $tindakan = Tindakan::whereTindakan('C')->first();

        if ($request->lulus == '1') {
            if (Auth::user()->penggunaSistem->no_kp != str_replace('-', '', $request->noKP) || !(Hash::check($request->katalaluan, Auth::user()->password))) {
                return back()->with('status', $ralat);
            }

            $status = StatusPermohonan::whereStatus('C1')->first();
            $jenismsg = '<strong>DILULUS</strong><br>Permohonan berjaya dihantar untuk tindakan pihak Konsesi.';
        }
        else {
            $status = StatusPermohonan::whereStatus('B6')->first();
            $tindakan = Tindakan::whereTindakan('B')->first();
            $jenismsg = '<strong>TIDAK DILULUS</strong><br>Permohonan dihantar untuk tindakan Peraku.';
        }

        $kjbStatusTindakan->pesanan_id = $kjbPesanan->id;
        $kjbStatusTindakan->user_id = Auth::user()->id;
        $kjbStatusTindakan->tindakan_id = $tindakan->id;
        $kjbStatusTindakan->status_id = $status->id;
        $kjbStatusTindakan->catatan = $request->ulasanPelulus;

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
	
	public function viewFile (KjbPesanan $kjbPesanan, $docSokongan)
	{
		$dokumen = DokumenSokongan::where("id","=",$docSokongan)->first();
		$lokasi = '/docupload/'.$kjbPesanan->id."/";
		$nama_file = app_path().$lokasi.$dokumen->nama_dokumen;
		
		$headers = array (
			'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',

            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',

            // archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',

            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',

            // adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',

            // ms office
            'doc' => 'application/msword',
            'rtf' => 'application/rtf',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',

            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
		);
		
		$response = Response::download($nama_file);
		ob_end_clean();
		return ($response);
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












    // TESTING PURPOSE FOR VIEW - START


    public function kastam(KjbPesanan $kjbPesanan)
    {
        $user = Auth::user();
        $kjbStatusTindakan = KjbStatusTindakan::with('tindakan', 'statusPermohonan', 'user')->excludedraf()->where('pesanan_id', $kjbPesanan->id)->oldest()->get();
        $statusSemasa = $kjbStatusTindakan->last()->statusPermohonan->status;

        if( in_array($statusSemasa, ['B1', 'B4', 'B5']) )
            return view('KJB.kastam', compact('user', 'kjbPesanan', 'kjbStatusTindakan'));
        else
            abort(403);
    }

    public function konsesi1(KjbPesanan $kjbPesanan)
    {
        $user = Auth::user();
        $kjbStatusTindakan = KjbStatusTindakan::with('tindakan', 'statusPermohonan', 'user')->excludedraf()->where('pesanan_id', $kjbPesanan->id)->oldest()->get();
        $statusSemasa = $kjbStatusTindakan->last()->statusPermohonan->status;

        if( in_array($statusSemasa, ['B1', 'B4', 'B5']) )
            return view('KJB.konsesimohon', compact('user', 'kjbPesanan', 'kjbStatusTindakan'));
        else
            abort(403);
    }

    public function konsesi2(KjbPesanan $kjbPesanan)
    {
        $user = Auth::user();
        $kjbStatusTindakan = KjbStatusTindakan::with('tindakan', 'statusPermohonan', 'user')->excludedraf()->where('pesanan_id', $kjbPesanan->id)->oldest()->get();
        $statusSemasa = $kjbStatusTindakan->last()->statusPermohonan->status;

        if( in_array($statusSemasa, ['B1', 'B4', 'B5']) )
            return view('KJB.konsesipajak', compact('user', 'kjbPesanan', 'kjbStatusTindakan'));
        else
            abort(403);
    }

    // TESTING PURPOSE FOR VIEW - END



















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
