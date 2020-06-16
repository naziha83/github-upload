<div id="accordion-default">
    <div class="card border-top-teal border-top-2">
        <div class="card-header bg-white header-elements-inline">
            <p class="card-title font-weight-semibold text-uppercase text-grey-600"><b>Butiran Permohonan </b></p>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse" data-toggle="collapse" href="#accordion-butiran"></a>
                </div>
            </div>
        </div>
        <div id="accordion-butiran" class="collapse" data-parent="#accordion-default">
            <div class="card-body">
                <!-- Model Kereta -->
                <fieldset>
                    <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                        {{-- <i class="mi-directions-car mr-2"></i> --}}
                        <i class="icon-car mr-2"></i>
                        MODEL KERETA
                        <a class="float-right text-default" data-toggle="collapse" data-target="#model">
                            <i class="icon-circle-down2"></i>
                        </a>
                    </legend>

                    <div class="collapse show" id="model">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">MODEL KERETA:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold">
                                    {{ $kjbPesanan->keretaVariasi->keretaModel->keretaBuatan->buatan . ' ' . $kjbPesanan->keretaVariasi->keretaModel->model . ' ( ' . $kjbPesanan->keretaVariasi->keretaTransmisi->transmisi . ' / ' . $kjbPesanan->keretaVariasi->keretaWarna->warna . ' - ' . $kjbPesanan->keretaVariasi->keretaCat->cat . ' ) ' }}<br>

                                    @if ( $kjbPesanan->variasi_id_pindaan != NULL && $kjbPesanan->variasi_id_pindaan != $kjbPesanan->variasi_id )
                                        <span class="text-orange-800"><i> * Pindaan: {{ $kjbPesanan->keretaVariasiPindaan->keretaModel->keretaBuatan->buatan . ' ' . $kjbPesanan->keretaVariasiPindaan->keretaModel->model . ' ( ' . $kjbPesanan->keretaVariasiPindaan->keretaTransmisi->transmisi . ' / ' . $kjbPesanan->keretaVariasiPindaan->keretaWarna->warna . ' - ' . $kjbPesanan->keretaVariasiPindaan->keretaCat->cat . ' ) '}} oleh {{ $kjbPesanan->pindaanBy->name }} </i></span>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- /Model Kereta -->

                <!-- Pusat Kos -->
                <fieldset>
                    <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                        <i class="icon-office mr-2"></i>
                        PUSAT KOS
                        <a class="float-right text-default" data-toggle="collapse" data-target="#pusat">
                            <i class="icon-circle-down2"></i>
                        </a>
                    </legend>

                    <div class="collapse show" id="pusat">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">KEMENTERIAN:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->jabatan->kementerian->nama }}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">JABATAN:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->jabatan->nama }}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">PROGRAM / AKTIVITI:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->program ?? '-' }}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">CAWANGAN:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->cawangan ?? '-' }}</div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- /Pusat Kos -->

                <!-- Lokasi Penghantaran -->
                <fieldset>
                    <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                        <i class="icon-location4 mr-2"></i>
                        PEGAWAI PENERIMA / LOKASI PENGHANTARAN
                        <a class="float-right text-default" data-toggle="collapse" data-target="#penerima">
                            <i class="icon-circle-down2"></i>
                        </a>
                    </legend>

                    <div class="collapse show" id="penerima">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">NAMA:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->penerima_nama }} ( {{ $kjbPesanan->penerima_nokp }} )</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">NO TELEFON (P):</label>
                            <div class="col-lg-3">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->penerima_tel_pejabat ?? '-' }}</div>
                            </div>
                            <label class="col-lg-2 offset-lg-1 col-form-label">NO TELEFON (B):</label>
                            <div class="col-lg-3">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->penerima_tel_bimbit ?? '-' }}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">ALAMAT:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold ">
                                    @if ( $kjbPesanan->penerima_alamat1 )
                                        {{ $kjbPesanan->penerima_alamat1 }}, <br>
                                    @else
                                        - <br>
                                    @endif
                                    @if ( $kjbPesanan->penerima_alamat2 )
                                        {{ $kjbPesanan->penerima_alamat2 }}, <br>
                                    @endif
                                    @if ( $kjbPesanan->penerima_alamat3 )
                                        {{ $kjbPesanan->penerima_alamat3 }}, <br>
                                    @endif
                                    @if ( $kjbPesanan->poskod_id )
                                        {{ $kjbPesanan->poskod->poskod . ' ' . $kjbPesanan->poskod->bandar }}<br>
                                        {{ $kjbPesanan->poskod->negeri->nama }}<br>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- /Lokasi Penghantaran -->

                <!-- Pegawai Perhubungan -->
                <fieldset>
                    <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                        <i class="icon-vcard mr-2"></i>
                        PEGAWAI PERHUBUNGAN
                        <a class="float-right text-default" data-toggle="collapse" data-target="#peghubung">
                            <i class="icon-circle-down2"></i>
                        </a>
                    </legend>

                    <div class="collapse show" id="peghubung">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">NAMA:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->pegawaiPerhubungan->nama ?? '-'}} ( {{ $kjbPesanan->pegawaiPerhubungan->no_kp ?? '' }} )</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">JAWATAN:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->pegawaiPerhubungan->jawatan . ', ' . $kjbPesanan->pegawaiPerhubungan->gred }}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">EMEL:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->pegawaiPerhubungan->emel }}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">NO TELEFON (P):</label>
                            <div class="col-lg-3">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->pegawaiPerhubungan->tel_pejabat }}</div>
                            </div>
                            <label class="col-lg-2 offset-lg-1 col-form-label">NO TELEFON (B):</label>
                            <div class="col-lg-3">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->pegawaiPerhubungan->tel_bimbit }}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">ALAMAT:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold ">
                                    @if ( $kjbPesanan->pegawaiPerhubungan->alamat1 )
                                        {{ $kjbPesanan->pegawaiPerhubungan->alamat1 }}, <br>
                                    @else
                                        - <br>
                                    @endif
                                    @if ( $kjbPesanan->pegawaiPerhubungan->alamat2 )
                                        {{ $kjbPesanan->pegawaiPerhubungan->alamat2 }}, <br>
                                    @endif
                                    @if ( $kjbPesanan->pegawaiPerhubungan->alamat3 )
                                        {{ $kjbPesanan->pegawaiPerhubungan->alamat3 }}, <br>
                                    @endif
                                    @if ( $kjbPesanan->pegawaiPerhubungan->poskod_id )
                                        {{ $kjbPesanan->pegawaiPerhubungan->poskod->poskod . ' ' . $kjbPesanan->pegawaiPerhubungan->poskod->bandar }}<br>
                                        {{ $kjbPesanan->pegawaiPerhubungan->poskod->negeri->nama }}<br>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- /Pegawai Perhubungan -->

                <!-- Justifikasi -->
                <fieldset>
                    <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                        <i class="icon-file-check mr-2"></i>
                        JUSTIFIKASI KEPERLUAN
                        <a class="float-right text-default" data-toggle="collapse" data-target="#justifikasi">
                            <i class="icon-circle-down2"></i>
                        </a>
                    </legend>

                    <div class="collapse show" id="justifikasi">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">STATUS BAHAGIAN:</label>
                            <div class="col-lg-2">
                                <div class="form-control-plaintext font-weight-semibold">
                                    @if ($kjbPesanan->maklumat_bahagian)
                                        Bahagian Sedia ada
                                    @else
                                        Bahagian Baru
                                    @endif
                                </div>
                            </div>
                            <label class="col-lg-2 offset-lg-2 col-form-label">STATUS PERUNTUKAN:</label>
                            <div class="col-lg-3">
                                <div class="form-control-plaintext font-weight-semibold">
                                    @if ($kjbPesanan->maklumat_peruntukan)
                                        Peruntukan Mencukupi
                                    @else
                                        Peruntukan Tidak Mencukupi
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">BILANGAN PERJAWATAN:</label>
                            <div class="col-lg-2">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->bil_jawatan }}</div>
                            </div>
                            <label class="col-lg-2 offset-lg-2 col-form-label">BILANGAN PEMANDU:</label>
                            <div class="col-lg-3">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->bil_pemandu }}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">WARAN PERJAWATAN:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->rujukan_waran }}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">KETERANGAN:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold" style="white-space: pre-wrap;">{{ $kjbPesanan->keterangan }}</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">DOKUMEN SOKONGAN:</label>
                            <div class="col-lg-9">
                                <div class="form-control-plaintext font-weight-semibold"><i class="icon-file-text3 mr-1"></i>{{ $kjbPesanan->dokumen_sokongan }}</div>
                            </div>
                        </div>
                        <div>
                            <br>
                            <legend class="text-center font-weight-semibold text-uppercase font-size-sm text-info-800">
                                Kenderaan Sedia ada
                            </legend>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 20%">Jenis Kenderaan</th>
                                            <th style="width: 20%">Model</th>
                                            <th style="width: 10%">Bilangan</th>
                                            <th style="width: 50%">Kegunaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kjbPesanan->kjbJustifikasi as $item)
                                            <tr>
                                                <td>{{ $item->kjbKenderaan->kenderaan }}</td>
                                                <td>{{ $item->model }}</td>
                                                <td>{{ $item->bilangan }}</td>
                                                <td><p style="white-space: pre-wrap;">{{ $item->kegunaan }}</p></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan='4' align='center'><b>- Tiada -</b></td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- /Justifikasi -->
                <br>
            </div>
        </div>
    </div>
</div>
