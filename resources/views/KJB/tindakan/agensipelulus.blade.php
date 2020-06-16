<!-- Senarai Tindakan -->
<div class="card-body">
    <!-- Tindakan: Kelulusan Ketua Jabatan -->
    <fieldset>
        <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
            PERMOHONAN BARU
            <a class="float-right text-default" data-toggle="collapse" data-target="#kelulusanjbtn">
                <i class="icon-circle-down2"></i>
            </a>
        </legend>
        <div class="collapse show" id="kelulusanjbtn">
            <div class="table-responsive">
                <table class="table datatable-pagination table-striped table-hover">
                    <thead>
                        <tr>
                            <th>NO PESANAN</th>
                            <th>MODEL</th>
                            <th>KEMENTERIAN/JABATAN</th>
                            <th>TARIKH MOHON</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $status as $item )
                            {{-- Status == A2 (Tindakan Kelulusan Jabatan) --}}
                            @if ( $item->statusPermohonan->status == 'A2' && $item->jaw_pelulus_agensi == $penggunaSistem->jawatan_id)
                                <tr>
                                    <td><a href="{{ route('kjb.agensi.kelulusan', $item->kjbPesanan->id) }}">{{ $item->kjbPesanan->no_pesanan }}</a></td>
                                    <td>
                                        @if ( $item->kjbPesanan->variasi_id )
                                            {{ $item->kjbPesanan->keretaVariasi->keretaModel->keretaBuatan->buatan . ' ' . $item->kjbPesanan->keretaVariasi->keretaModel->model . ' ( ' . $item->kjbPesanan->keretaVariasi->keretaTransmisi->transmisi . ' / ' . $item->kjbPesanan->keretaVariasi->keretaWarna->warna . ' - ' . $item->kjbPesanan->keretaVariasi->keretaCat->cat . ' ) ' }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $item->kjbPesanan->jabatan->nama ?? '-' }}</td>
                                    <td>{{ $item->kjbPesanan->tarikh_permohonan->isoFormat('D MMMM YYYY') ?? '-' }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
    </fieldset>
    <!-- /Tindakan: Kelulusan Ketua Jabatan -->
</div>
<!-- /Senarai Tindakan -->
