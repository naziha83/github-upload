<?php

namespace App\Http\Controllers\KJB;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\SistemKonfig;

use App\Http\Requests\KJB\AgensiFormRequest;

use App\Models\KJ\KjbPesanan;
use App\Models\Jabatan;
use App\Models\KeretaVariasi;
use App\Models\KJ\KjbJustifikasi;
use App\Models\KJ\KjbKenderaan;
use App\Models\KJ\KjbStatusTindakan;
use App\Models\PegawaiPerhubungan;
use App\Models\Poskod;
use App\Models\StatusPermohonan;
use App\Models\Tindakan;
use App\Models\PenggunaSistem;
use App\Models\DokumenSokongan;

use Illuminate\Support\Facades\Auth;

use Response;
use PDF;

class AgensiController extends Controller
{
    use SistemKonfig;

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('role:Pendaftar Agensi', [
            'except' => ['kelulusan', 'kelulusanUpdate', 'index', 'cetakPermohonan','viewFile']
        ]);

        $this->middleware('role:Pelulus Agensi', [
            'only' => ['kelulusan', 'kelulusanUpdate']
        ]);

        $this->middleware('role:Pelulus Agensi|Pendaftar Agensi', [
            'only' => ['index', 'cetakPermohonan','viewFile']
        ]);

        // setlocale(LC_TIME, config('app.locale'));
    }

    public function index()
    {
        $user = Auth::user();

        // Option 1 - view table
        // $test = DB::table('vtestlatest')->get();

        // Option 2 - model
        $status = KjbStatusTindakan::with('kjbPesanan')
                ->whereIn('pesanan_id', KjbStatusTindakan::lateststatus()->pluck('pesanan_id'))
                ->whereIn('created_at', KjbStatusTindakan::lateststatus()->pluck('created_at'))
                ->get();

        // Option 3 - query builder
        // $test=KjbStatusTindakan::whereIn(DB::raw('(pesanan_id, created_at)'), function($query){
        //     $query->selectRaw('pesanan_id, max(created_at) as created_at')->from('kjb_status_tindakan')->groupBy('pesanan_id')->get();
        // })->get();
        // dd($status[6]->kjbPesanan);
        // return ($status[6]->kjbPesanan->keretaVariasi->keretaModel->keretaBuatan->buatan);

        return view('KJB.tindakan.senaraitindakan', compact('user', 'status'));
    }

    public function create()
    {
        $user = Auth::user();
        $keretaVariasi = KeretaVariasi::with('keretaModel.keretaBuatan', 'keretaModel.bahanBakar', 'keretaCat', 'keretaWarna', 'keretaKategori', 'keretaTransmisi')->get();
        $jabatan = Jabatan::where('kementerian_id', $user->penggunaSistem->jabatan->kementerian->id)->get();
        $poskod = Poskod::uniquepostcode()->get();
        $pegawaiPerhubungan = PegawaiPerhubungan::select('id', 'nama')->where('jabatan_id', $user->penggunaSistem->jabatan_id)->get();
        $jeniskenderaan = KjbKenderaan::all();

        return view('KJB.borang', compact('user', 'keretaVariasi', 'jabatan', 'poskod', 'pegawaiPerhubungan', 'jeniskenderaan'));
    }

    public function store(AgensiFormRequest $request)
    {
        $tindakan = Tindakan::whereTindakan('A')->first();
        $no_pesanan = $this->getNoPesanan(request('indicator'));

        $kjbPesanan = new KjbPesanan();
        $kjbStatusTindakan = new KjbStatusTindakan();

        $kjbPesanan->no_pesanan = $no_pesanan;
        $kjbPesanan->variasi_id = request('modelKereta');
        $kjbPesanan->jabatan_id = request('jabatan');
        $kjbPesanan->program = request('program');
        $kjbPesanan->cawangan = request('cawangan');
        $kjbPesanan->penerima_nokp = str_replace('-', '', request('penerimaNokp'));
        $kjbPesanan->penerima_nama = request('penerimaNama');
        $kjbPesanan->penerima_tel_pejabat = str_replace(' ', '', request('penerimaTelPejabat'));
        $kjbPesanan->penerima_tel_bimbit = str_replace(' ', '', request('penerimaTelBimbit'));
        $kjbPesanan->penerima_alamat1 = request('penerimaAlamat1');
        $kjbPesanan->penerima_alamat2 = request('penerimaAlamat2');
        $kjbPesanan->penerima_alamat3 = request('penerimaAlamat3');
        $kjbPesanan->poskod_id = request('bandar');
        $kjbPesanan->pegawai_perhubungan_id = request('pegawaiPerhubungan');
        //$kjbPesanan->dokumen_sokongan = request('dokumen');
        $kjbPesanan->keterangan = request('keterangan');
        $kjbPesanan->rujukan_waran = request('waran');
        $kjbPesanan->bil_jawatan = request('bilJawatan');
        $kjbPesanan->bil_pemandu = request('bilPemandu');
        $kjbPesanan->maklumat_bahagian = request('bahagian');
        $kjbPesanan->maklumat_peruntukan = request('peruntukan');
        $kjbPesanan->created_by = Auth::user()->id;

        if ($request->submit == 'hantar') {
            $kjbPesanan->tarikh_permohonan = now();
            $saved = $kjbPesanan->save();

            $status = StatusPermohonan::whereStatus('A2')->first();

            $kjbStatusTindakan->pesanan_id = $kjbPesanan->id;
            $kjbStatusTindakan->user_id = Auth::user()->id;
            $kjbStatusTindakan->tindakan_id = $tindakan->id;
            $kjbStatusTindakan->status_id = $status->id;
			$kjbStatusTindakan->jaw_pelulus_agensi = $request->pelulus;
            $kjbStatusTindakan->save();
			
			//upload file
			if ($request->hasFile('dokumen'))
			{
				$file = $request->file('dokumen');
				$filename = $file->getClientOriginalName();
				$size = $file->getSize();
				$lokasi = '/docupload/'.$kjbPesanan->id."/";
				$destinationPath=app_path().$lokasi;
				$limitsize = 2000000;
				
				//$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
				$docSokongan = new DokumenSokongan();
				$docSokongan->nama_dokumen = $filename;
				$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
				$docSokongan->created_by= Auth::user()->id;
				//$docSokongan->created_at= date("Y-m-d h:i:sa");
				$docSokongan->save();
				
				$file->move($destinationPath, $filename);
			}
			if ($request->hasFile('dokumen1'))
			{
				$file = $request->file('dokumen1');
				$filename1 = $file->getClientOriginalName();
				$size = $file->getSize();
				$lokasi = '/docupload/'.$kjbPesanan->id."/";
				$destinationPath=app_path().$lokasi;
				$limitsize = 2000000;
				
				//$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
				$docSokongan = new DokumenSokongan();
				$docSokongan->nama_dokumen = $filename1;
				$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
				$docSokongan->created_by= Auth::user()->id;
				//$docSokongan->created_at= date("Y-m-d h:i:sa");
				$docSokongan->save();
				
				$file->move($destinationPath, $filename1);
			}
			if ($request->hasFile('dokumen2'))
			{
				$file = $request->file('dokumen2');
				$filename2 = $file->getClientOriginalName();
				$size = $file->getSize();
				$lokasi = '/docupload/'.$kjbPesanan->id."/";
				$destinationPath=app_path().$lokasi;
				$limitsize = 2000000;
				
				//$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
				$docSokongan = new DokumenSokongan();
				$docSokongan->nama_dokumen = $filename2;
				$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
				$docSokongan->created_by= Auth::user()->id;
				//$docSokongan->created_at= date("Y-m-d h:i:sa");
				$docSokongan->save();
				
				$file->move($destinationPath, $filename2);
			}
			if ($request->hasFile('dokumen3'))
			{
				$file = $request->file('dokumen3');
				$filename3 = $file->getClientOriginalName();
				$size = $file->getSize();
				$lokasi = '/docupload/'.$kjbPesanan->id."/";
				$destinationPath=app_path().$lokasi;
				$limitsize = 2000000;
				
				//$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
				$docSokongan = new DokumenSokongan();
				$docSokongan->nama_dokumen = $filename3;
				$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
				$docSokongan->created_by= Auth::user()->id;
				//$docSokongan->created_at= date("Y-m-d h:i:sa");
				$docSokongan->save();
				
				$file->move($destinationPath, $filename3);
			}
			if ($request->hasFile('dokumen4'))
			{
				$file = $request->file('dokumen4');
				$filename4 = $file->getClientOriginalName();
				$size = $file->getSize();
				$lokasi = '/docupload/'.$kjbPesanan->id."/";
				$destinationPath=app_path().$lokasi;
				$limitsize = 2000000;
				
				//$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
				$docSokongan = new DokumenSokongan();
				$docSokongan->nama_dokumen = $filename4;
				$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
				$docSokongan->created_by= Auth::user()->id;
				//$docSokongan->created_at= date("Y-m-d h:i:sa");
				$docSokongan->save();
				
				$file->move($destinationPath, $filename4);
			}

            $this->simpanKjbJustifikasi($request, $kjbPesanan->id);

            if ($saved) {
                $msg = "swal({\n";
                $msg .= "title: '" . $kjbPesanan->no_pesanan . "',\n";
                $msg .= "text: 'Permohonan berjaya dihantar untuk kelulusan Jabatan.',\n";
                $msg .= "type: 'success',\n";
                $msg .= "timer: 5000\n";
                $msg .= "}); \n";

                return redirect()->route('kjb.index')->with('status', $msg)->with('flag', 'hantar');
            }
        }
        elseif ($request->submit == 'simpan') {
            $saved = $kjbPesanan->save();
            $status = StatusPermohonan::whereStatus('A1')->first();

            $kjbStatusTindakan->pesanan_id = $kjbPesanan->id;
            $kjbStatusTindakan->user_id = Auth::user()->id;
            $kjbStatusTindakan->tindakan_id = $tindakan->id;
            $kjbStatusTindakan->status_id = $status->id;
			$kjbStatusTindakan->jaw_pelulus_agensi = $request->pelulus;
            $kjbStatusTindakan->save();
			
			//upload file
			if ($request->hasFile('dokumen'))
			{
				$file = $request->file('dokumen');
				$filename = $file->getClientOriginalName();
				$size = $file->getSize();
				$lokasi = '/docupload/'.$kjbPesanan->id."/";
				$destinationPath=app_path().$lokasi;
				$limitsize = 2000000;
				
				//$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
				$docSokongan = new DokumenSokongan();
				$docSokongan->nama_dokumen = $filename;
				$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
				$docSokongan->created_by= Auth::user()->id;
				//$docSokongan->created_at= date("Y-m-d h:i:sa");
				$docSokongan->save();
				
				$file->move($destinationPath, $filename);
			}
			if ($request->hasFile('dokumen1'))
			{
				$file = $request->file('dokumen1');
				$filename1 = $file->getClientOriginalName();
				$size = $file->getSize();
				$lokasi = '/docupload/'.$kjbPesanan->id."/";
				$destinationPath=app_path().$lokasi;
				$limitsize = 2000000;
				
				//$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
				$docSokongan = new DokumenSokongan();
				$docSokongan->nama_dokumen = $filename1;
				$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
				$docSokongan->created_by= Auth::user()->id;
				//$docSokongan->created_at= date("Y-m-d h:i:sa");
				$docSokongan->save();
				
				$file->move($destinationPath, $filename1);
			}
			if ($request->hasFile('dokumen2'))
			{
				$file = $request->file('dokumen2');
				$filename2 = $file->getClientOriginalName();
				$size = $file->getSize();
				$lokasi = '/docupload/'.$kjbPesanan->id."/";
				$destinationPath=app_path().$lokasi;
				$limitsize = 2000000;
				
				//$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
				$docSokongan = new DokumenSokongan();
				$docSokongan->nama_dokumen = $filename2;
				$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
				$docSokongan->created_by= Auth::user()->id;
				//$docSokongan->created_at= date("Y-m-d h:i:sa");
				$docSokongan->save();
				
				$file->move($destinationPath, $filename2);
			}
			if ($request->hasFile('dokumen3'))
			{
				$file = $request->file('dokumen3');
				$filename3 = $file->getClientOriginalName();
				$size = $file->getSize();
				$lokasi = '/docupload/'.$kjbPesanan->id."/";
				$destinationPath=app_path().$lokasi;
				$limitsize = 2000000;
				
				//$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
				$docSokongan = new DokumenSokongan();
				$docSokongan->nama_dokumen = $filename3;
				$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
				$docSokongan->created_by= Auth::user()->id;
				//$docSokongan->created_at= date("Y-m-d h:i:sa");
				$docSokongan->save();
				
				$file->move($destinationPath, $filename3);
			}
			if ($request->hasFile('dokumen4'))
			{
				$file = $request->file('dokumen4');
				$filename4 = $file->getClientOriginalName();
				$size = $file->getSize();
				$lokasi = '/docupload/'.$kjbPesanan->id."/";
				$destinationPath=app_path().$lokasi;
				$limitsize = 2000000;
				
				//$kjbPesanan1 = KjbPesanan::where("id","=",$kjbPesanan->id)->first();
				$docSokongan = new DokumenSokongan();
				$docSokongan->nama_dokumen = $filename4;
				$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
				$docSokongan->created_by= Auth::user()->id;
				//$docSokongan->created_at= date("Y-m-d h:i:sa");
				$docSokongan->save();
				
				$file->move($destinationPath, $filename4);
			}

            $this->simpanKjbJustifikasi($request, $kjbPesanan->id);

            if ($saved)
                return redirect()->route('kjb.agensi.edit', $kjbPesanan->id)->with('status', 'simpan');
        }
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

    public function edit(KjbPesanan $kjbPesanan)
    {
        $user = Auth::user();
        $kjbStatusTindakan = KjbStatusTindakan::with('tindakan', 'statusPermohonan', 'user')->where('pesanan_id', $kjbPesanan->id)->oldest()->get();

        $keretaVariasi = KeretaVariasi::with('keretaModel.keretaBuatan', 'keretaModel.bahanBakar', 'keretaCat', 'keretaWarna', 'keretaKategori', 'keretaTransmisi')->get();
        $jabatan = Jabatan::where('kementerian_id', $user->penggunaSistem->jabatan->kementerian->id)->get();
        $poskod = Poskod::uniquepostcode()->get();
        $pegawaiPerhubungan = PegawaiPerhubungan::select('id', 'nama')->where('jabatan_id', $user->penggunaSistem->jabatan_id)->get();
        $jeniskenderaan = KjbKenderaan::all();
        $kjbJustifikasi = KjbJustifikasi::where('pesanan_id', $kjbPesanan->id)->get();
		$docSokongan = DokumenSokongan::where('pesanan_no', $kjbPesanan->no_pesanan)->get();

        $currentStatus = $kjbStatusTindakan->last()->statusPermohonan->status;

        if (in_array($currentStatus, ['A1', 'A3', 'A4']))
            return view('KJB.kemaskiniborang', compact('kjbStatusTindakan', 'kjbPesanan', 'kjbJustifikasi', 'user', 'keretaVariasi', 'jabatan', 'poskod', 'pegawaiPerhubungan', 'jeniskenderaan', 'currentStatus', 'docSokongan'));
        else
            abort(403);
    }

    public function update(AgensiFormRequest $request, KjbPesanan $kjbPesanan)
    {
        $statusSemasa = $this->getStatusSemasa($kjbPesanan->id);

        if (!in_array($statusSemasa->statusPermohonan->status, ['A1', 'A3', 'A4']))
            abort(403);

        $tindakan = Tindakan::whereTindakan('A')->first();

        $kjbPesanan->variasi_id = request('modelKereta');
        $kjbPesanan->jabatan_id = request('jabatan');
        $kjbPesanan->program = request('program');
        $kjbPesanan->cawangan = request('cawangan');
        $kjbPesanan->penerima_nokp = str_replace('-', '', request('penerimaNokp'));
        $kjbPesanan->penerima_nama = request('penerimaNama');
        $kjbPesanan->penerima_tel_pejabat = str_replace(' ', '', request('penerimaTelPejabat'));
        $kjbPesanan->penerima_tel_bimbit = str_replace(' ', '', request('penerimaTelBimbit'));
        $kjbPesanan->penerima_alamat1 = request('penerimaAlamat1');
        $kjbPesanan->penerima_alamat2 = request('penerimaAlamat2');
        $kjbPesanan->penerima_alamat3 = request('penerimaAlamat3');
        $kjbPesanan->poskod_id = request('bandar');
        $kjbPesanan->pegawai_perhubungan_id = request('pegawaiPerhubungan');
        //$kjbPesanan->dokumen_sokongan = request('dokumen');
        $kjbPesanan->keterangan = request('keterangan');
        $kjbPesanan->rujukan_waran = request('waran');
        $kjbPesanan->bil_jawatan = request('bilJawatan');
        $kjbPesanan->bil_pemandu = request('bilPemandu');
        $kjbPesanan->maklumat_bahagian = request('bahagian');
        $kjbPesanan->maklumat_peruntukan = request('peruntukan');
        $kjbPesanan->created_by = Auth::user()->id;

        if ($request->submit == 'hantar') {
            $jenismsg = 'Permohonan berjaya dihantar untuk kelulusan Jabatan.';

            if ($statusSemasa->statusPermohonan->status == 'A1')
                $kjbPesanan->tarikh_permohonan = now();

            if ($statusSemasa->statusPermohonan->status == 'A4') {
                $tindakan = Tindakan::whereTindakan('B')->first();
                $jenismsg = 'Permohonan berjaya dihantar untuk tindakan Kementerian Kewangan Malaysia.';
            }

            $saved = $kjbPesanan->save();

            $kjbStatusTindakan = new KjbStatusTindakan();
            $status = StatusPermohonan::whereStatus(request('editFlag'))->first();

            $kjbStatusTindakan->pesanan_id = $kjbPesanan->id;
            $kjbStatusTindakan->user_id = Auth::user()->id;
            $kjbStatusTindakan->tindakan_id = $tindakan->id;
            $kjbStatusTindakan->status_id = $status->id;
			$kjbStatusTindakan->jaw_pelulus_agensi = $request->pelulus;
            $kjbStatusTindakan->save();

            $this->simpanKjbJustifikasi($request, $kjbPesanan->id);

            if ($saved) {
                $msg = "swal({\n";
                $msg .= "title: '" . $kjbPesanan->no_pesanan . "',\n";
                $msg .= "text: '" . $jenismsg . "',\n";
                $msg .= "type: 'success',\n";
                $msg .= "timer: 5000\n";
                $msg .= "}); \n";

                return redirect()->route('kjb.index')->with('status', $msg)->with('flag', 'hantar');
            }
        }
        elseif ($request->submit == 'simpan') {
            $saved = $kjbPesanan->save();

            // kjb_status_tindakan.status_id=1 === status_permohonan.status=A1(Draf)
            $kjbStatusTindakan = KjbStatusTindakan::where('pesanan_id', $kjbPesanan->id)->where('status_id', '1')->first();
            $kjbStatusTindakan->user_id = Auth::user()->id;
			$kjbStatusTindakan->jaw_pelulus_agensi = $request->pelulus;
            $kjbStatusTindakan->save();

            $this->simpanKjbJustifikasi($request, $kjbPesanan->id);

            if ($saved)
                return redirect()->route('kjb.agensi.edit', $kjbPesanan->id)->with('status', 'simpan');
        }
    }

    public function destroy(KjbPesanan $kjbPesanan)
    {
        $kjbPesanan->delete();

        $msg = "swal({\n";
        $msg .= "title: '" . $kjbPesanan->no_pesanan . "',\n";
        $msg .= "text: 'Permohonan telah dihapus.',\n";
        $msg .= "type: 'success',\n";
        $msg .= "timer: 5000\n";
        $msg .= "}); \n";

        return redirect()->route('kjb.index')->with('status', $msg)->with('flag', 'hantar');
    }

    public function kelulusan(KjbPesanan $kjbPesanan)
    {
        $user = Auth::user();
        $kjbStatusTindakan = $this->getDisplayStatusSemasa($kjbPesanan->id);
        $statusSemasa = $kjbStatusTindakan->last()->statusPermohonan->status;
		$docSokongan = DokumenSokongan::where("pesanan_no","=",$kjbPesanan->no_pesanan)->get();

        if ($statusSemasa == 'A2')
            return view('KJB.jabatanlulus', compact('user', 'kjbPesanan', 'kjbStatusTindakan', 'docSokongan'));
        else
            abort(403);
            // abort(403, 'Unauthorized action.');
    }

    public function kelulusanUpdate(AgensiFormRequest $request, KjbPesanan $kjbPesanan)
    {
		$user = Auth::user();
        $statusSemasa = $this->getStatusSemasa($kjbPesanan->id);

        if ($statusSemasa->statusPermohonan->status != 'A2')
            abort(403);

        $kjbStatusTindakan = new KjbStatusTindakan();
        $tindakan = Tindakan::whereTindakan('B')->first();

        if ($request->jbtnlulus == '1') {
            $status = StatusPermohonan::whereStatus('B1')->first();
            $jenismsg = '<strong>DILULUSKAN</strong><br>Permohonan berjaya dihantar untuk tindakan Kementerian Kewangan Malaysia.';
        }
        else {
            $tindakan = Tindakan::whereTindakan('A')->first();
            $status = StatusPermohonan::whereStatus('A3')->first();
            $jenismsg = '<strong>TIDAK DILULUSKAN</strong><br>Permohonan dihantar untuk tindakan pemohon.';
        }
		
		//update table kjb_pesanan
		$kjbPesanan1 = KjbPesanan::where('id','=',$kjbPesanan->id)->first();
		$kjbPesanan1->pelulus_id = $user->id;
		$kjbPesanan1->tarikh_kelulusan = date("Y-m-d");
		$kjbPesanan1->updated_at = date("Y-m-d h:i:s");
		$kjbPesanan1->save();

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
	
	public function uploadDoc (AgensiFormRequest $request)
	{
		$kjb_id = $request->id_permohonan;
		$docSokongan = new DokumenSokongan();
		
		$kjbPesanan = KjbPesanan::where('id','=',$kjb_id)->first();
		
		if ($request->hasFile('dokumen'))
		{
			$file = $request->file('dokumen');
			$filename = $file->getClientOriginalName();
			$size = $file->getSize();
			$lokasi = '/docupload/'.$kjbPesanan->id."/";
			$destinationPath=app_path().$lokasi;
			$limitsize = 2000000;
				
			$docSokongan->nama_dokumen = $filename;
			$docSokongan->pesanan_no = $kjbPesanan->no_pesanan;
			$docSokongan->created_by= Auth::user()->id;
			//$docSokongan->created_at= date("Y-m-d h:i:sa");
			$docSokongan->save();
				
			$file->move($destinationPath, $filename);
		}
		
		return "Dokumen telah disimpan";
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
	
	public function delFile(AgensiFormRequest $request)
	{  
		//variable request
		$doc_id = $request->id;
		//kalau ada fail yang diupload
		$dokumen = DokumenSokongan::where("id","=",$doc_id)->first();
		$kjbPesanan = KjbPesanan::where("no_pesanan","=",$dokumen->pesanan_no)->first();
		$lokasi = '/docupload/'.$kjbPesanan->id."/";
		$destinationPath=app_path().$lokasi;
				
		if ($dokumen->id != "")
		{
			$filenameold = $destinationPath.$dokumen->nama_dokumen;
			unlink($filenameold);
			DokumenSokongan::find($doc_id)->delete($doc_id);
		}
		
		return "Dokumen telah dihapuskan";
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

    private function simpanKjbJustifikasi($request, $id)
    {
        // Delete Kenderaan sedia ada jika sebelum simpan senarai baru
        KjbJustifikasi::where('pesanan_id', $id)->delete();

        if ($request->justkenderaanlist[0] != null && $request->justmodellist[0] != null && $request->justbillist[0] != null && $request->justkegunaanlist[0] != null) {
            foreach ($request->justkenderaanlist as $key => $justkenderaan) {
                $kjbJustifikasi = new KjbJustifikasi;
                $kjbJustifikasi->pesanan_id = $id;
                $kjbJustifikasi->kenderaan_id = $justkenderaan;
                $kjbJustifikasi->model = $request->justmodellist[$key];
                $kjbJustifikasi->bilangan = $request->justbillist[$key];
                $kjbJustifikasi->kegunaan = $request->justkegunaanlist[$key];
                $kjbJustifikasi->save();
            }
        }
    }
}
