@extends('layouts.master.master')

@section('style')
    <style>

        /* untuk input type:number, no scroll */
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance:textfield;
        }
        /* /untuk input type:number, no scroll */

    </style>
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header mb-2">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">KERETA JABATAN1 </span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
            <!-- Breadcrumb -->
            <div class="header-elements py-0">
                <div class="breadcrumb">
                    <a href="{{ route('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Utama</a>
                    <span class="breadcrumb-item active">Borang Pesanan - KJB</span>
                </div>
            </div>
            <!-- /Breadcrumb -->
        </div>
    </div>
    <!-- /Page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Borang KJB -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title"><b>PERMOHONAN KERETA JABATAN BARU</b></h5>
                    </div>
                    <div class="card-body">
                        @include('ralat')

                        <div class="alert alpha-teal border-teal text-teal-800 alert-styled-left col-lg-6 offset-lg-3 text-center p-2">
                            NO PESANAN &emsp; - &emsp; <span class="font-weight-bold" style="font-size:1rem;"> {{ $kjbPesanan->no_pesanan }}</span>
                        </div>

                        <form action="{{ route('kjb.agensi.update', $kjbPesanan->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <!-- Kronologi permohonan -->
                            @if ( in_array($currentStatus, ['A3', 'A4']) )
                                @if ( $currentStatus == 'A3')
                                    <input name="editFlag" type="hidden" value="A2">
                                @else
                                    <input name="editFlag" type="hidden" value="B5">
                                @endif

                                <!-- Kronologi permohonan -->
                                @include('kjb/kronologi')
                                <!-- /Kronologi permohonan -->

                                <br>
                                <br>
                            @elseif ($currentStatus == 'A1')
                                <input name="editFlag" type="hidden" value="A2">
                            @endif
                            <!-- /Kronologi permohonan -->

                            <!-- Model Kereta -->
                            <fieldset>
                                <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                                    <i class="icon-car mr-2"></i>
                                    MODEL KERETA
                                    <a class="float-right text-default" data-toggle="collapse" data-target="#model">
                                        <i class="icon-circle-down2"></i>
                                    </a>
                                </legend>
                                <div class="collapse show" id="model">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> MODEL KERETA:</label>
                                        <div class="col-md-9">
                                            <select name="modelKereta" data-placeholder="Sila pilih model kereta" class="form-control form-control-select2" data-container-css-class="{{ $errors->has('modelKereta') ? 'border-danger' : '' }}" data-fouc>
                                                <option></option>
                                                @foreach ($keretaVariasi as $item)
                                                    <option value={{ $item->id }} {{ old('modelKereta', $kjbPesanan->variasi_id) == $item->id ? 'selected' : '' }}>
														{{ $item->keretaModel->keretaBuatan->buatan . ' ' . $item->keretaModel->model . ' ( ' . $item->keretaTransmisi->transmisi . ' / ' . $item->keretaWarna->warna . ' - ' . $item->keretaCat->cat . ' ) ' }} </option>
                                                @endforeach
                                            </select>
                                            <span class="form-text text-danger">{{ $errors->first('modelKereta') }}</span>
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
                                        <label class="col-md-3 col-form-label">KEMENTERIAN:</label>
                                        <div class="col-md-9">
                                            @if ($kjbPesanan->jabatan_id)
                                                <div class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->jabatan->kementerian->nama }}</div>
                                            @else
                                                <div class="form-control-plaintext font-weight-semibold">{{ $user->penggunaSistem->jabatan->kementerian->nama }}</div>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> JABATAN:</label>
                                        <div class="col-md-9">
                                            <select name="jabatan" data-placeholder="Sila pilih Jabatan/Agensi" class="form-control form-control-select2" data-container-css-class="{{ $errors->has('jabatan') ? 'border-danger' : '' }}" data-fouc>
                                                <option></option>
                                                @foreach ($jabatan as $item)
                                                    @if ($kjbPesanan->jabatan_id)
                                                        <option value={{ $item->id }} {{ old('jabatan', $kjbPesanan->jabatan->id) == $item->id ? 'selected' : '' }}>
															{{ $item->nama }} </option>
                                                    @else
                                                        <option value={{ $item->id }} {{ old('jabatan') == $item->id ? 'selected' : '' }}>{{ $item->nama }} </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <span class="form-text text-danger">{{ $errors->first('jabatan') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">PROGRAM/AKTIVITI:</label>
                                        <div class="col-md-9">
                                            <input name="program" type="text" class="form-control font-weight-semibold" value="{{ old('program', $kjbPesanan->program) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">CAWANGAN:</label>
                                        <div class="col-md-9">
                                            <input name="cawangan" type="text" class="form-control font-weight-semibold" value="{{ old('cawangan', $kjbPesanan->cawangan) }}">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- /Pusat Kos -->

                            <!-- Lokasi Penghantaran -->
                            <fieldset>
                                <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                                    <i class="icon-location4 mr-2"></i>
                                    PEGAWAI PENERIMA/LOKASI PENGHANTARAN
                                    <a class="float-right text-default" data-toggle="collapse" data-target="#penerima">
                                        <i class="icon-circle-down2"></i>
                                    </a>
                                </legend>
                                <div class="collapse show" id="penerima">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> NAMA:</label>
                                        <div class="col-md-9">
                                            <input name="penerimaNama" type="text" class="form-control font-weight-semibold {{ $errors->has('penerimaNama') ? 'border-danger' : '' }}" value="{{ old('penerimaNama', $kjbPesanan->penerima_nama) }}">
                                            <span class="form-text text-danger">{{ $errors->first('penerimaNama') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> NO KAD PENGENALAN:</label>
                                        <div class="col-md-3">
                                            <input name="penerimaNokp" type="text" data-mask="999999-99-9999" class="form-control font-weight-semibold {{ $errors->has('penerimaNokp') ? 'border-danger' : '' }}" value="{{ old('penerimaNokp', $kjbPesanan->penerima_nokp) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> NO TELEFON (P):</label>
                                        <div class="col-md-3">
                                            <input name="penerimaTelPejabat" id="penerimaTelPejabat" type="text" class="form-control telefon_pejabat10 font-weight-semibold {{ $errors->has('penerimaTelPejabat') ? 'border-danger' : '' }}" value="{{ old('penerimaTelPejabat', $kjbPesanan->penerima_tel_pejabat) }}">
                                            <span class="form-text text-danger">{{ $errors->first('penerimaTelPejabat') }}</span>
                                        </div>
                                        <label class="col-md-2 offset-md-1 col-form-label"><font color="red">*</font> NO TELEFON (B):</label>
                                        <div class="col-md-3">
                                            <input name="penerimaTelBimbit" id="penerimaTelBimbit" type="text" class="form-control telefon_bimbit11 font-weight-semibold  {{ $errors->has('penerimaTelBimbit') ? 'border-danger' : '' }}" value="{{ old('penerimaTelBimbit', $kjbPesanan->penerima_tel_bimbit) }}">
                                            <span class="form-text text-danger">{{ $errors->first('penerimaTelBimbit') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> ALAMAT:</label>
                                        <div class="col-md-9">
                                            <input name="penerimaAlamat1" type="text" class="form-control font-weight-semibold  {{ $errors->has('penerimaAlamat1') ? 'border-danger' : '' }}" value="{{ old('penerimaAlamat1', $kjbPesanan->penerima_alamat1) }}">
                                            <span class="form-text text-danger">{{ $errors->first('penerimaAlamat1') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-9 offset-md-3">
                                            <input name="penerimaAlamat2" type="text" class="form-control font-weight-semibold" value="{{ old('penerimaAlamat2', $kjbPesanan->penerima_alamat2) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-9 offset-md-3">
                                            <input name="penerimaAlamat3" type="text" class="form-control font-weight-semibold" value="{{ old('penerimaAlamat3', $kjbPesanan->penerima_alamat3) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> POSKOD:</label>
                                        <div class="col-md-3">
                                            <select name="poskod" id="poskod" data-placeholder="Masukkan poskod" class="form-control select-minimum font-weight-semibold" maxlength="5" data-container-css-class="{{ $errors->has('poskod') ? 'border-danger' : '' }}" data-fouc>
                                            <option></option>
                                                @foreach ($poskod as $item)
                                                    @if ($kjbPesanan->poskod_id)
                                                        <option value="{{ $item->poskod }}" {{ old('poskod', $kjbPesanan->poskod->poskod) == $item->poskod ? 'selected' : '' }}>{{ $item->poskod }} </option>
                                                    @else
                                                        <option value="{{ $item->poskod }}" {{ old('poskod') == $item->poskod ? 'selected' : '' }}>{{ $item->poskod }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <span class="form-text text-danger">{{ $errors->first('poskod') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">BANDAR:</label>
                                        <div class="col-md-3">
                                            <select name="bandar" id="bandar" data-placeholder="Sila pilih bandar" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">NEGERI:</label>
                                        <div class="col-md-3">
                                            @if ($kjbPesanan->poskod_id)
                                                <input name="negeri" id="negeri" type="text" class="form-control font-weight-semibold" value="{{ $kjbPesanan->poskod->negeri->nama }}" disabled>
                                            @else
                                                <input name="negeri" id="negeri" type="text" class="form-control font-weight-semibold" disabled>
                                            @endif
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
                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> NAMA:</label>
                                        <div class="col-lg-9">
                                            <select name="pegawaiPerhubungan" id="pegawaiPerhubungan" data-placeholder="Sila Pilih Pegawai Perhubungan" class="form-control form-control-select2" data-container-css-class="{{ $errors->has('pegawaiPerhubungan') ? 'border-danger' : '' }}" data-fouc>
                                                <option></option>
                                                @foreach ($pegawaiPerhubungan as $item)
                                                    <option value="{{ $item->id }}" {{ old('pegawaiPerhubungan', $kjbPesanan->pegawai_perhubungan_id) == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            <span class="form-text text-danger">{{ $errors->first('pegawaiPerhubungan') }}</span>
                                        </div>
                                    </div>
                                    <div id="peghubung_detail">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">NO KAD PENGENALAN:</label>
                                            <div class="col-lg-9">
                                                <div id="peghubung_nokp" class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->pegawaiPerhubungan != null ? $kjbPesanan->pegawaiPerhubungan->no_kp : ''}}</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">JAWATAN:</label>
                                            <div class="col-lg-9">
                                                <div id="peghubungan_jawatan" class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->pegawaiPerhubungan != null ? $kjbPesanan->pegawaiPerhubungan->jawatan . ', ' . $kjbPesanan->pegawaiPerhubungan->gred : '' }}</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Emel:</label>
                                            <div class="col-lg-9">
                                                <div id="peghubungan_emel" class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->pegawaiPerhubungan != null ? $kjbPesanan->pegawaiPerhubungan->emel : '' }}</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">NO TELEFON (P):</label>
                                            <div class="col-lg-3">
                                                <div id="peghubungan_telp" class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->pegawaiPerhubungan != null ? $kjbPesanan->pegawaiPerhubungan->tel_pejabat : '' }}</div>
                                            </div>
                                            <label class="col-lg-2 offset-lg-1 col-form-label">NO TELEFON (B):</label>
                                            <div class="col-lg-3">
                                                <div id="peghubungan_telb" class="form-control-plaintext font-weight-semibold">{{ $kjbPesanan->pegawaiPerhubungan != null ? $kjbPesanan->pegawaiPerhubungan->tel_bimbit : '' }}</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">ALAMAT:</label>
                                            <div class="col-lg-9">
                                                <div id="peghubungan_alamat" class="form-control-plaintext font-weight-semibold ">
                                                    {!! $kjbPesanan->pegawaiPerhubungan != null ? $kjbPesanan->pegawaiPerhubungan->alamat1 . '<br>' . $kjbPesanan->pegawaiPerhubungan->alamat2 . '<br>' . $kjbPesanan->pegawaiPerhubungan->alamat3 . '<br>' . $kjbPesanan->pegawaiPerhubungan->poskod->poskod . ' ' . $kjbPesanan->poskod->bandar . '<br>' . $kjbPesanan->poskod->negeri->nama : '' !!}
                                                </div>
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
                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> STATUS BAHAGIAN:</label>
                                        <div class="col-lg-9">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="bahagian" value="1" class="form-input-styled" {{ old('bahagian', $kjbPesanan->maklumat_bahagian) == "1" ? "checked" : "" }} data-fouc>
                                                    Bahagian Sedia ada
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="bahagian" value="0" class="form-input-styled" {{ old('bahagian', $kjbPesanan->maklumat_bahagian) == "0" ? "checked" : "" }} data-fouc>
                                                    Bahagian Baru
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> KETERANGAN:</label>
                                        <div class="col-lg-9">
                                            <textarea name="keterangan" rows="5" cols="5" placeholder="Sila nyatakan justifikasi permohonan" class="form-control font-weight-semibold {{ $errors->has('keterangan') ? 'border-danger' : '' }}">{{ old('keterangan', $kjbPesanan->keterangan) }}</textarea>
                                            <span class="form-text text-danger">{{ $errors->first('keterangan') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">WARAN PERJAWATAN:</label>
                                        <div class="col-lg-9">
                                            <input name="waran" type="text" placeholder="No rujukan waran perjawatan" class="form-control font-weight-semibold" value="{{ old('waran', $kjbPesanan->rujukan_waran) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> BILANGAN PERJAWATAN:</label>
                                        <div class="col-lg-2">
                                            <input name="bilJawatan" type="number" class="form-control font-weight-semibold {{ $errors->has('bilJawatan') ? 'border-danger' : '' }}" value="{{ old('bilJawatan', $kjbPesanan->bil_jawatan) }}" min="0">
                                            <span class="form-text text-danger">{{ $errors->first('bilJawatan') }}</span>
                                        </div>
                                        <label class="col-lg-2 offset-lg-3 col-form-label"><font color="red">*</font> BILANGAN PEMANDU:</label>
                                        <div class="col-lg-2">
                                            <input name="bilPemandu" type="number" class="form-control font-weight-semibold {{ $errors->has('bilPemandu') ? 'border-danger' : '' }}" value="{{ old('bilPemandu', $kjbPesanan->bil_pemandu) }}" min="0">
                                            <span class="form-text text-danger">{{ $errors->first('bilPemandu') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> STATUS PERUNTUKAN:</label>
                                        <div class="col-lg-9">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="peruntukan" value="1" class="form-input-styled" {{ old('peruntukan', $kjbPesanan->maklumat_peruntukan) == "1" ? "checked" : "" }} data-fouc>
                                                    PERUNTUKAN MENCUKUPI
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="peruntukan" value="0" class="form-input-styled" {{ old('peruntukan', $kjbPesanan->maklumat_peruntukan) == "0" ? "checked" : "" }} data-fouc>
                                                    PERUNTUKAN TIDAK MENCUKUPI
                                                </label>
                                            </div>
                                        </div>
                                    </div>
									<div>
										<legend class="text-center font-weight-semibold text-uppercase font-size-sm text-info-800">
                                            Dokumen Sokongan
                                        </legend>
										<div class="table-responsive">
											<input type="hidden" id="doccount" name="doccount" value="<?php echo count($docSokongan); ?>" />
											<table id="myTable" class=" table order-list">
												<tbody>
													@foreach ($docSokongan as $item)
													<tr>
														<td class="col-sm-3" valign="top">	<font color="red">*</font> DOKUMEN SOKONGAN
														</td>
														<td class="col-sm-8"><a href="{{ route('kjb.agensi.viewdoc', [$kjbPesanan->id, $item->id]) }}">{{ $item->nama_dokumen }}</a>
														</td>
														<td class="col-sm-2">
															<input type="hidden" id="doc_id" value="{{ $item->id }}" />
															<button type="button" class="btn btn-outline bg-danger text-danger border-danger" id="delFile">Hapus</button>
															
														</td>
													</tr>
													@endforeach
												</tbody>
												<tfoot>
													<tr>
														<td colspan="3" style="text-align: left;">
															<?php /*<input type="button" class="btn btn-lg btn-block" id="addrow" value="TAMBAH DOKUMEN" data-toggle="modal" data-type="#uploadModal" />*/ ?>
															<button type="button" id="addrow" class="btn btn-lg btn-block" data-toggle="modal" data-target="#uploadModal" <?php if (count($docSokongan) == 5){echo "disabled";}?>>TAMBAH DOKUMEN</button>
														</td>
													</tr>
													<tr>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
									<div id="uploadModal" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<i class="fas fa-close text-danger" data-dismiss="modal" style="cursor:pointer;"></i>
													<h4>Muatnaik Dokumen Sokongan</h4>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<div class="row">
															<input type="hidden" name="no_pesanan" value="{{$kjbPesanan->id}}" />
															<div class="col-sm-3">
															DOKUMEN SOKONGAN</div>
															<div class="col-sm-8">
																<input name="dokumen" type="file" id="dokumen" class="" data-fouc>
																<span class="form-text text-muted">Format Dokumen: pdf, doc. Saiz tidak melebihi 5Mb</span>
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<input type="button" class="btn btn-info" value="Muatnaik" id="upload" />
												</div>
											</div>
										</div>
									</div>
                                    <?php /*<div class="form-group row">
                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> DOKUMEN SOKONGAN:</label>
                                        <div class="col-lg-9">
                                            <input name="dokumen" type="file" class="" {{ $errors->has('dokumen') ? 'border-danger' : '' }} data-fouc>
											<a href="{{ route('kjb.agensi.viewdoc', $kjbPesanan->id) }}">{{ $kjbPesanan->dokumen_sokongan }}</a>
											<?php /*<a href="{{URL::to('agensi/dokumen/view')}}/{{$kjbPesanan->id}}">{{$kjbPesanan->dokumen_sokongan }}</a>
                                            <span class="form-text text-muted">Format Dokumen: pdf, doc. Saiz tidak melebihi 5Mb</span>
                                            <span class="form-text text-danger">{{ $errors->first('dokumen') }}</span>
                                        </div>
                                    </div>*/ ?>
                                    <div>
                                        <br>
                                        <legend class="text-center font-weight-semibold text-uppercase font-size-sm text-info-800">
                                            Kenderaan Sedia ada
                                        </legend>
                                        <div class="table-responsive">
                                            <table id="tbljustifikasi" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20%">Jenis Kenderaan</th>
                                                        <th style="width: 20%">Model</th>
                                                        <th style="width: 5%">Bilangan</th>
                                                        <th style="width: 50%">Kegunaan</th>
                                                        <th style="width: 5%"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($kjbJustifikasi as $i=>$item)
                                                        <tr>
                                                            <td><input name="justkenderaanlist[]" id="justkenderaanlist[]" type="hidden" value="{{ $item->kenderaan_id }}">{{ $item->kjbKenderaan->kenderaan }}</td>
                                                            <td><input name="justmodellist[]" id="justmodellist[]" type="hidden" value="{{ $item->model }}">{{ $item->model }}</td>
                                                            <td><input name="justbillist[]" id="justbillist[]" type="hidden" value="{{ $item->bilangan }}">{{ $item->bilangan }}</td>
                                                            <td style="white-space: pre-wrap;"><input name="justkegunaanlist[]" id="justkegunaanlist[]" type="hidden" value="{{ $item->kegunaan }}">{{ $item->kegunaan }}</td>
                                                            <td><div class="list-icons"><a href="#" class="list-icons-item text-danger-300"><i class="icon-trash"></i></a></div></td>
                                                        </tr>
                                                    @empty
                                                        <tr id="listnothing">
                                                            <td colspan='5' align='center'><b>- Tiada -</b></td>
                                                            <td><input name="justkenderaanlist[]" id="justkenderaanlist[]" type="hidden" value=""></td>
                                                            <td><input name="justmodellist[]" id="justmodellist[]" type="hidden" value=""></td>
                                                            <td><input name="justbillist[]" id="justbillist[]" type="hidden" value=""></td>
                                                            <td><input name="justkegunaanlist[]" id="justkegunaanlist[]" type="hidden" value=""></td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <div class="text-right">
                                            <button id="btntambahkenderaan" type="button" class="{{ $errors->has('justkenderaanlist[0]') ? 'btn btn-outline bg-danger text-danger border-danger' : 'btn btn-outline bg-info text-info border-info' }}"><i class="icon-plus22 mr-2"></i>Tambah</button>
                                            <span class="form-text text-danger">{{ $errors->first('justkenderaanlist[0]') }}</span>
                                        </div>
                                        <div id="tambahkenderaan" class="col-lg-10 offset-lg-1">
                                            <div class="card border-teal" style="background-color:#fafafa">
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> KENDERAAN:</label>
                                                        <div class="col-lg-9">
                                                            <select name="justkenderaan" id="justkenderaan" data-placeholder="Sila pilih jenis kenderaan" class="form-control form-control-select2" data-fouc>
                                                                @foreach ($jeniskenderaan as $item)
                                                                    @if ($item->kenderaan == "Lain-lain")
                                                                        @php
                                                                            $setlast = "<option value='" . $item->id . "'>" . $item->kenderaan . "</option>";
                                                                        @endphp
                                                                    @else
                                                                        <option value="{{ $item->id }}">{{ $item->kenderaan }}</option>
                                                                    @endif
                                                                @endforeach
                                                                {!! $setlast !!}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> MODEL:</label>
                                                        <div class="col-lg-4 semak">
                                                            <input name="justmodel" id="justmodel" type="text" placeholder="Sila nyatakan model"  class="form-control font-weight-semibold">
                                                        </div>
                                                        <label class="col-lg-2 offset-lg-1 col-form-label"><font color="red">*</font> BILANGAN:</label>
                                                        <div class="col-lg-2 semak">
                                                            <input name="justbil" id="justbil" type="number" class="form-control font-weight-semibold" min="0">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> KEGUNAAN:</label>
                                                        <div class="col-lg-9 semak">
                                                            <textarea name="justkegunaan" id="justkegunaan" rows="5" cols="5" placeholder="Sila nyatakan kegunaan kenderaan tersebut" class="form-control font-weight-semibold"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button name="btntutuptambahkenderaan" id="btntutuptambahkenderaan" type="button" class="btn btn-outline border-transparent bg-slate-700 text-slate-700">Tutup</button>
                                                        <button name="btnsimpantambahkenderaan" id="btnsimpantambahkenderaan" type="button" class="btn btn-outline bg-teal-700 text-teal-700 border-teal-700" disabled="disabled">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- /Justifikasi -->
							
							<!-- Kelulusan -->
							<fieldset>
								<legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                                    KELULUSAN
                                    <a class="float-right text-default" data-toggle="collapse" data-target="#justifikasi">
                                        <i class="icon-circle-down2"></i>
                                    </a>
                                </legend>
                                	<div id="divpelulus" class="form-group row">
                                    	<label class="col-lg-3 col-form-label"><font color="red">*</font> UNTUK KELULUSAN:</label>
                                        <div class="col-lg-6">
                                        	<div class="form-check form-check-inline">
                                            	<label class="form-check-label">
                                                	<input type="radio" name="pelulus" id="pelulus_1" value="4" class="form-input-styled" data-fouc>
                                                        Setiausaha Bahagian/Ketua Jabatan/Ketua Pengarah
                                                </label>
                                           	</div>
                                            <div class="form-check form-check-inline">
                                               	<label class="form-check-label">
                                                	<input type="radio" name="pelulus" id="pelulus_2" value="5" class="form-input-styled" data-fouc>
                                                        Timbalan Setiausaha Bahagian/Timbalan Ketua Jabatan/ Timbalan Ketua Pengarah
                                                </label>
                                          	</div>
                                    	</div>
                            		</div>
                            </fieldset>
							<!-- /Kelulusan -->


                            <br><br>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="list-inline ml-0">
                                    <button type="button" name="hapus" id="hapus" class="btn btn-outline bg-danger text-danger border-danger" onclick="event.preventDefault(); delalert();">HAPUS <i class="icon-cancel-square2 ml-2"></i></button>
									
									<div class="btn-group" role="group">
										<a href="{{ route('kjb.agensi.cetakdoc', $kjbPesanan->id) }}" class="btn btn-outline bg-slate text-slate border-slate">CETAK <i class="icon-printer4 ml-2"></i></a>
									</div>
                                </div>
                                <div class="list-inline mr-0">
                                    @if ( $currentStatus == 'A1')
                                        <button type="submit" name="submit" value="simpan" class="btn btn-outline bg-teal-400 text-teal-400 border-teal-400">SIMPAN <i class="icon-drawer-in ml-2"></i></button>
                                    @endif
                                    <button type="submit" name="submit" value="hantar" class="btn btn-primary">HANTAR <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>
                        </form>
                        <form id="delForm" method="POST" action="{{ route('kjb.agensi.destroy', $kjbPesanan->id) }}" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Borang KJB -->

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('kjb.index') }}" method="GET">
                    <button type="submit" class="btn btn-outline alpha-slate text-slate-800 border-slate-300"><b><i class="icon-arrow-left12 mr-2"></i></b>Kembali</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /Content area -->
@endsection

@section('script')
    <script src="{{ asset('js/global_assets/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/forms/styling/uniform.min.js') }}"></script>
@endsection

@section('script-custom')
    <script src="{{ asset('js/main_assets/form_layouts.js') }}"></script>
    <script>
        $(document).ready(function() {
            if('<?= session("status") ?>' == 'simpan')
            {
                var nopesanan = {!! json_encode($kjbPesanan->no_pesanan) !!};
                swal({
                    title: nopesanan,
                    text: 'Permohonan berjaya disimpan.',
                    type: 'success',
                    timer: 5000
                });
            }
            else if('<?= session("status") ?>' == 'hantar')
            {
                var nopesanan = {!! json_encode($kjbPesanan->no_pesanan) !!}
                swal({
                    title: nopesanan,
                    text: 'Permohonan berjaya dihantar.',
                    type: 'success',
                    timer: 5000
                });
            }


            // Maklumat Pegawai Perhubungan
            function getPegawaiPerhubunganDetail()
            {
                var peghubungan_id = $('#pegawaiPerhubungan').val();

                $.get('/conf/getpeghubungan/' + peghubungan_id , function(data) {
                    $('#peghubung_nokp').text(data.no_kp);
                    $('#peghubungan_jawatan').text(data.jawatan + ', ' + data.gred);
                    $('#peghubungan_emel').text(data.emel);
                    $('#peghubungan_telp').text(data.tel_pejabat);
                    $('#peghubungan_telb').text(data.tel_bimbit);
                    $('#peghubungan_alamat').html(data.alamat1 + '<br>' + data.alamat2 + '<br>' + data.alamat3 + '<br>' + data.poskod.poskod + ' ' + data.poskod.bandar + '<br>' + data.poskod.negeri.nama);

                    $('#peghubung_detail').show();
                });
            }

            $('#tambahkenderaan').hide();

            if( $('#pegawaiPerhubungan').val() != 0 )
                getPegawaiPerhubunganDetail();
            else
                $('#peghubung_detail').hide();

            if( $('#poskod').val() )
            {
                var poskod = $('#poskod').val();

                $.get('{{url("conf/getposkod/")}}' + '/' + poskod, function(data){
                    $('#bandar').empty();

                    var jsonid = {!! json_encode($kjbPesanan->poskod_id) !!}

                    $.each(data, function(index, dataObj){
                        var pilih = (jsonid == dataObj.id) ? "selected" : "";
                        $('#bandar').append('<option value=' + dataObj.id + ' ' + pilih + '>' + dataObj.bandar +'</option>');
                    });
                    $('#negeri').val(data[0].negeri.nama);
                });
            }

            // Bandar dan Negeri
            $('#poskod').change(function(){
                var poskod = $(this).val();
                console.log(poskod);
                $.get('{{url("conf/getposkod/")}}' + '/' + poskod, function(data){
                    $('#bandar').empty();

                    $.each(data, function(index, dataObj){
                        $('#bandar').append('<option value=' + dataObj.id + '>' + dataObj.bandar +'</option>');
                    });
                    // console.log(data[0].negeri.nama);
                    $('#negeri').val(data[0].negeri.nama);
                });
            });


            $('#pegawaiPerhubungan').change(function() {
                getPegawaiPerhubunganDetail();
            });

            $('#btntambahkenderaan').click(function(){
                // $('#justkenderaan').val('');
                $('#justmodel').val('');
                $('#justbil').val('');
                $('#justkegunaan').val('');

                $('#tambahkenderaan').show();
                $('#btntambahkenderaan').hide();
                $('#btnsimpantambahkenderaan').attr('disabled', 'disabled');
            });

            $('.semak input, .semak textarea').keyup(function(){
                let empty = false;

                $('.semak input, .semak textarea').each(function() {
                    if ($(this).val().length == 0) {
                        empty = true;
                    }
                });

                if (empty)
                    $('#btnsimpantambahkenderaan').attr('disabled', 'disabled');
                else
                    $('#btnsimpantambahkenderaan').attr('disabled', false);
            });

            $('#btntutuptambahkenderaan').click(function(){
                $('#btntambahkenderaan').show();
                $('#tambahkenderaan').hide();
            });

            $('#btnsimpantambahkenderaan').click(function(){
                var justkenderaanid = $('#justkenderaan').val();
                var justkenderaan = $('#justkenderaan option:selected').html();
                var justmodel = $('#justmodel').val();
                var justbil = $('#justbil').val();
                var justkegunaan = $('#justkegunaan').val();
                // console.log( justkenderaanid );

                var papar = '<tr>';
                    papar += '<td><input name="justkenderaanlist[]" id="justkenderaanlist[]" type="hidden" value="' + justkenderaanid + '">' + justkenderaan + '</td>';
                    papar += '<td><input name="justmodellist[]" id="justmodellist[]" type="hidden" value="' + justmodel + '">'+ justmodel +'</td>';
                    papar += '<td><input name="justbillist[]" id="justbillist[]" type="hidden" value="' + justbil + '">'+ justbil +'</td>';
                    papar += '<td style="white-space: pre-wrap;"><input name="justkegunaanlist[]" id="justkegunaanlist[]" type="hidden" value="' + justkegunaan + '">'+ justkegunaan +'</td>';
                    papar += '<td><div class="list-icons"><a href="#" class="list-icons-item text-danger-300"><i class="icon-trash"></i></a></div></td>';
                    papar += '</tr>';

                $('#listnothing').remove();
                $("#tbljustifikasi > tbody:last-child").append(papar);

                $('#btntambahkenderaan').show();
                $('#tambahkenderaan').hide();
            });
			
        });

        // Hapus rekod permohonan
        function delalert() {
            swal({
                title: "Hapus Rekod!",
                text: "Anda pasti ingin meneruskan?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn btn-danger btn-fill",
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
                reverseButtons: true,
                allowOutsideClick: false
            }).then((result) => {
                if (result.value) {
                    document.getElementById('delForm').submit();
                }
            });
        }
		
		//upload dokumen sokongan
		$("#upload").click(function(){
			//alert ("upload dokumen");
			var fd = new FormData();
			var files = $("#dokumen")[0].files[0];
			fd.append('dokumen', files);
			fd.append('_token', "{{ csrf_token() }}");
			fd.append('id_permohonan', "{{$kjbPesanan->id}}");
			
			if (confirm("Anda ingin menyimpan dokumen ini?"))
			{
				//Ajax Request
				$.ajax({
					url: 'http://localhost/ekeretav2/public/kjb/agensi/dokumen/upload',
					type: 'post',
					data: fd,
					contentType: false,
					processData: false,
					success: function(response){
						if (response != 0){
							location.reload();
						}
						else {
							alert ("Fail tidak dapat dimuatnaik.");
						}
					}
				});
			}
		});
		
		//Delete dokoumen sokongan
		$("#delFile").click(function(){
			//var id = $(this).data("id");
			var fd = new FormData();
			var id = $('#doc_id').val();
			fd.append('id', id);
			fd.append('_token', "{{ csrf_token() }}");
			
			if (confirm("Anda pasti untuk hapuskan dokumen ini?")) {
				$.ajax(
				{
					url: "http://localhost/ekeretav2/public/kjb/agensi/dokumen/delete",
					type: 'post',
					data: fd,
					contentType: false,
					processData: false,
					success: function(response){
						if (response != 0){
							location.reload();
						}
						else {
							alert ("Fail tidak dapat dihapuskan.");
						}
					}
				});
			}
				
		});
		
		/*$("#addrow").on("click", function () {
			//alert ("tambah dokumen");
			var counter = $("#doccount").val();
			alert (counter);
			if (counter == 5)
			{
				$("#addrow").prop('disabled', true);
			}
			else
			{
				$("#addrow").prop('disabled', false);
			}
		});*/
		
		
    </script>
@endsection

