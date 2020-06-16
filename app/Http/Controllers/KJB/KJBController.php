<?php

namespace App\Http\Controllers\KJB;

use App\Http\Controllers\Controller;

use App\Models\KJ\KjbStatusTindakan;
use App\Models\PenggunaSistem;
use App\Models\RujStesenKastam;

use Illuminate\Support\Facades\Auth;

class KJBController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        $status = KjbStatusTindakan::with('kjbPesanan')
                ->whereIn('pesanan_id', KjbStatusTindakan::lateststatus()->pluck('pesanan_id'))
                ->whereIn('created_at', KjbStatusTindakan::lateststatus()->pluck('created_at'))
                ->get();
		
		$penggunaSistem = PenggunaSistem::where('user_id','=',$user->id)->first();

        return view('KJB.tindakan.senaraitindakan', compact('user', 'status','penggunaSistem'));
    }
}
