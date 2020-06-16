<!-- Senarai Tindakan -->
<div class="card-body">
    <!-- Tindakan: Draf -->
    <fieldset>
        <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
            <i class="icon-info3 mr-2"></i>
            DRAF
            <a class="float-right text-default" data-toggle="collapse" data-target="#draf">
                <i class="icon-circle-down2"></i>
            </a>
        </legend>
        <div class="collapse show" id="draf">
            <div class="table-responsive">
                <table class="table datatable-pagination table-striped table-hover">
                    <thead>
                        <tr>
                            <th>NO PESANAN</th>
                            <th>MODEL</th>
                            <th>KEMENTERIAN/JABATAN</th>
                            <th>TARIKH DRAF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $status as $item )
                            {{-- Status == A1 (Draf) --}}
                            @if ( $item->statusPermohonan->status == 'A1' )
                                <tr>
                                    <td><a href="{{ route('kjb.agensi.edit', $item->kjbPesanan->id) }}">{{ $item->kjbPesanan->no_pesanan }}</a></td>
                                    <td>
                                        @if ( $item->kjbPesanan->variasi_id )
                                            {{ $item->kjbPesanan->keretaVariasi->keretaModel->keretaBuatan->buatan . ' ' . $item->kjbPesanan->keretaVariasi->keretaModel->model . ' ( ' . $item->kjbPesanan->keretaVariasi->keretaTransmisi->transmisi . ' / ' . $item->kjbPesanan->keretaVariasi->keretaWarna->warna . ' - ' . $item->kjbPesanan->keretaVariasi->keretaCat->cat . ' ) ' }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $item->kjbPesanan->jabatan->nama ?? '-' }}</td>
                                    <td>{{ $item->kjbPesanan->updated_at ?? '-' }}</td>
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
    <!-- /Tindakan: Draf -->

    <!-- Tindakan: Tidak Dilulus Ketua Jabatan -->
    <fieldset>
        <legend class="font-weight-semibold text-uppercase text-orange-700">
            <i class="icon-warning mr-2"></i>
            TIDAK DILULUS - KETUA JABATAN
            <a class="float-right text-default" data-toggle="collapse" data-target="#ketuajbtn">
                <i class="icon-circle-down2"></i>
            </a>
        </legend>
        <div class="collapse show" id="ketuajbtn">
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
                            {{-- Status == A3 (Tidak Lulus Jabatan) --}}
                            @if ( $item->statusPermohonan->status == 'A3' )
                                <tr>
                                    <td><a href="{{ route('kjb.agensi.edit', $item->kjbPesanan->id) }}">{{ $item->kjbPesanan->no_pesanan }}</a></td>
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
    <!-- /Tindakan: Tidak Dilulus Ketua Jabatan -->

    <!-- Tindakan: Tidak Lengkap Semak MOF -->
    <fieldset>
        <legend class="font-weight-semibold text-uppercase text-danger-700">
            <i class="icon-question3 mr-2"></i>
            TIDAK LENGKAP - SEMAKAN MOF
            <a class="float-right text-default" data-toggle="collapse" data-target="#semakmof">
                <i class="icon-circle-down2"></i>
            </a>
        </legend>
        <div class="collapse show" id="semakmof">
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
                            {{-- Status == A4 (Tidak Lengkap MOF Semak) --}}
                            @if ( $item->statusPermohonan->status == 'A4' )
                                <tr>
                                    <td><a href="{{ route('kjb.agensi.edit', $item->kjbPesanan->id) }}">{{ $item->kjbPesanan->no_pesanan }}</a></td>
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
    <!-- /Tindakan: Tidak Lengkap Semak MOF -->
</div>
<!-- /Senarai Tindakan -->
