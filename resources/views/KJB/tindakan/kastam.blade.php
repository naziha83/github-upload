<!-- Senarai Tindakan -->
<div class="card-body">
    <!-- Tindakan: Semak Kelulusan (Baru) -->
    <fieldset>
        <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
            PERMOHONAN BARU
            <a class="float-right text-default" data-toggle="collapse" data-target="#semakbaru">
                <i class="icon-circle-down2"></i>
            </a>
        </legend>
        <div class="collapse show" id="semakbaru">
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
                            {{-- Status == D1 (Tindakan Kastam (Permohonan baru)) --}}
                            @if ( $item->statusPermohonan->status == 'D1' && $item->kjbPesanan->keretaVariasi->keretaModel->stesenkastam_id == $penggunaSistem->stesen_kastam_id)
                                <tr>
                                    <td><a href="{{ route('kjb.kastam.kastamsemak', $item->kjbPesanan->id) }}">{{ $item->kjbPesanan->no_pesanan }}</a></td>
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
    <!-- /Tindakan: Semak Kelulusan (Baru) -->

    <!-- Tindakan: Tidak Diperaku -->
    <fieldset>
        <legend class="font-weight-semibold text-uppercase font-size-sm text-danger-700">
            Tidak Dilulus - Peringkat MOF
            <a class="float-right text-default" data-toggle="collapse" data-target="#peraku">
                <i class="icon-circle-down2"></i>
            </a>
        </legend>
        <div class="collapse show" id="peraku">
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
                            {{-- Status == B6 (Tidak Dilulus MOF) --}}
                            @if ( $item->statusPermohonan->status == 'B6' )
                                <tr>
                                    <td><a href="{{ route('kjb.mof.perakuanedit', $item->kjbPesanan->id) }}">{{ $item->kjbPesanan->no_pesanan }}</a></td>
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
    <!-- /Tindakan: Tidak Diperaku -->
</div>
<!-- /Senarai Tindakan -->
