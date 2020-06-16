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
                            {{-- Status == C1 (Tindakan Konsesi (Permohonan baru)) --}}
                            @if ( $item->statusPermohonan->status == 'C1' )
                                <tr>
                                    <td><a href="{{ route('kjb.konsesi.konsesisemak', $item->kjbPesanan->id) }}">{{ $item->kjbPesanan->no_pesanan }}</a></td>
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

    <!-- Tindakan: Pengecualian Cukai Diluluskan -->
    <fieldset>
        <legend class="font-weight-semibold text-uppercase font-size-sm">
            Pengecualian Cukai Diluluskan
            <a class="float-right text-default" data-toggle="collapse" data-target="#peraku">
                <i class="icon-circle-down2"></i>
            </a>
        </legend>
        <div class="collapse show" id="lulus">
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
                            {{-- Status == C2 (Pengecualian Cukai Diluluskan) --}}
                            @if ( $item->statusPermohonan->status == 'C2' ||  $item->statusPermohonan->status == 'C5')
                                <tr>
                                    <td><a href="{{ route('kjb.konsesi.maklumatKonsesi', $item->kjbPesanan->id) }}">{{ $item->kjbPesanan->no_pesanan }}</a></td>
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
    <!-- /Tindakan: Pengecualian Cukai Diluluskan -->
	
	<!-- Tindakan: Pengecualian Cukai Tidak Diluluskan -->
    <fieldset>
        <legend class="font-weight-semibold text-uppercase font-size-sm text-danger-700">
            Pengecualian Cukai Tidak Diluluskan
            <a class="float-right text-default" data-toggle="collapse" data-target="#peraku">
                <i class="icon-circle-down2"></i>
            </a>
        </legend>
        <div class="collapse show" id="tak_lulus">
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
                            {{-- Status == C3 (Pengecualian Cukai Tidak Diluluskan) --}}
                            @if ( $item->statusPermohonan->status == 'C3' )
                                <tr>
                                    <td><a href="{{ route('kjb.konsesi.konsesisemak', $item->kjbPesanan->id) }}">{{ $item->kjbPesanan->no_pesanan }}</a></td>
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
    <!-- /Tindakan: Pengecualian Cukai Tidak Diluluskan -->
	<!-- Tindakan: Penghantaran Kereta -->
    <fieldset>
        <legend class="font-weight-semibold text-uppercase font-size-sm">
            Penghantaran Kereta
            <a class="float-right text-default" data-toggle="collapse" data-target="#peraku">
                <i class="icon-circle-down2"></i>
            </a>
        </legend>
        <div class="collapse show" id="tak_lulus">
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
                            {{-- Status == C4 (Pengecualian Cukai Tidak Diluluskan) --}}
                            @if ( $item->statusPermohonan->status == 'C4' ||  $item->statusPermohonan->status == 'C6')
                                <tr>
                                    <td><a href="{{ route('kjb.konsesi.konsesihantar', $item->kjbPesanan->id) }}">{{ $item->kjbPesanan->no_pesanan }}</a></td>
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
    <!-- /Tindakan: Penghantaran Kereta -->
</div>
<!-- /Senarai Tindakan -->
