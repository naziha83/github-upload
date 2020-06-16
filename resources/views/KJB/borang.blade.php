@extends('layouts.master.master')

@section('style')
    <style>
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
    </style>
@endsection

<?php /*<link href="{{ asset('css/bulma/bulma.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/bulma/file.css') }}" rel="stylesheet" type="text/css">*/ ?>

@section('content')
    <!-- Page header -->
    <div class="page-header mb-2">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">KERETA JABATAN BARU</span></h4>
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

                        <form action="{{ route('kjb.agensi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input name="indicator" type="hidden" value="KJB">

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
                                                    <option value={{ $item->id }} {{ old('modelKereta') == $item->id ? 'selected' : '' }}>{{ $item->keretaModel->keretaBuatan->buatan . ' ' . $item->keretaModel->model . ' ( ' . $item->keretaTransmisi->transmisi . ' / ' . $item->keretaWarna->warna . ' - ' . $item->keretaCat->cat . ' ) ' }}</option>
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
                                            <div class="form-control-plaintext font-weight-semibold">{{ $user->penggunaSistem->jabatan->kementerian->nama }}</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> JABATAN:</label>
                                        <div class="col-md-9">
                                            <select name="jabatan" data-placeholder="Sila pilih Jabatan/Agensi" class="form-control form-control-select2" data-container-css-class="{{ $errors->has('jabatan') ? 'border-danger' : '' }}" data-fouc>
                                                <option></option>
                                                @foreach ($jabatan as $item)
                                                    <option value={{ $item->id }} {{ old('jabatan') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            <span class="form-text text-danger">{{ $errors->first('jabatan') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">PROGRAM/AKTIVITI:</label>
                                        <div class="col-md-9">
                                            <input name="program" type="text" class="form-control font-weight-semibold" value="{{ old('program') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">CAWANGAN:</label>
                                        <div class="col-md-9">
                                            <input name="cawangan" type="text" class="form-control font-weight-semibold" value="{{ old('cawangan') }}">
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
                                            <input name="penerimaNama" type="text" class="form-control font-weight-semibold {{ $errors->has('penerimaNama') ? 'border-danger' : '' }}" value="{{ old('penerimaNama') }}">
                                            <span class="form-text text-danger">{{ $errors->first('penerimaNama') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> NO KAD PENGENALAN:</label>
                                        <div class="col-md-3">
                                            <input name="penerimaNokp" type="text" data-mask="999999-99-9999" class="form-control font-weight-semibold {{ $errors->has('penerimaNokp') ? 'border-danger' : '' }}" value="{{ old('penerimaNokp') }}">
                                            <span class="form-text text-danger">{{ $errors->first('penerimaNokp') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> NO TELEFON (P):</label>
                                        <div class="col-md-3">
                                            <input name="penerimaTelPejabat" id="penerimaTelPejabat" type="text" class="form-control telefon_pejabat10 font-weight-semibold {{ $errors->has('penerimaTelPejabat') ? 'border-danger' : '' }}" value="{{ old('penerimaTelPejabat') }}">
                                            <span class="form-text text-danger">{{ $errors->first('penerimaTelPejabat') }}</span>
                                        </div>
                                        <label class="col-md-2 offset-md-1 col-form-label"><font color="red">*</font> NO TELEFON (B):</label>
                                        <div class="col-md-3">
                                            <input name="penerimaTelBimbit" id="penerimaTelBimbit" type="text" class="form-control telefon_bimbit11 font-weight-semibold  {{ $errors->has('penerimaTelBimbit') ? 'border-danger' : '' }}" value="{{ old('penerimaTelBimbit') }}">
                                            <span class="form-text text-danger">{{ $errors->first('penerimaTelBimbit') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> ALAMAT:</label>
                                        <div class="col-md-9">
                                            <input name="penerimaAlamat1" type="text" class="form-control font-weight-semibold  {{ $errors->has('penerimaAlamat1') ? 'border-danger' : '' }}" value="{{ old('penerimaAlamat1') }}">
                                            <span class="form-text text-danger">{{ $errors->first('penerimaAlamat1') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-9 offset-md-3">
                                            <input name="penerimaAlamat2" type="text" class="form-control font-weight-semibold" value="{{ old('penerimaAlamat2') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-9 offset-md-3">
                                            <input name="penerimaAlamat3" type="text" class="form-control font-weight-semibold" value="{{ old('penerimaAlamat3') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"><font color="red">*</font> POSKOD:</label>
                                        <div class="col-md-3">
                                            <select name="poskod" id="poskod" data-placeholder="Masukkan poskod" class="form-control select-minimum font-weight-semibold" maxlength="5" data-container-css-class="{{ $errors->has('poskod') ? 'border-danger' : '' }}" data-fouc>
                                            <option></option>
                                                @foreach ($poskod as $item)
                                                    <option value={{ $item->poskod }} {{ old('poskod') == $item->poskod ? 'selected' : '' }}>{{ $item->poskod }}</option>
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
                                            <input name="negeri" id="negeri" type="text" class="form-control font-weight-semibold" disabled>
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
                                                    <option value="{{ $item->id }}" {{ old('pegawaiPerhubungan') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            <span class="form-text text-danger">{{ $errors->first('pegawaiPerhubungan') }}</span>
                                        </div>
                                    </div>
                                    <div id="peghubung_detail">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">NO KAD PENGENALAN:</label>
                                            <div class="col-lg-9">
                                                <div id="peghubung_nokp" class="form-control-plaintext font-weight-semibold"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">JAWATAN:</label>
                                            <div class="col-lg-9">
                                                <div id="peghubungan_jawatan" class="form-control-plaintext font-weight-semibold"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Emel:</label>
                                            <div class="col-lg-9">
                                                <div id="peghubungan_emel" class="form-control-plaintext font-weight-semibold"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">NO TELEFON (P):</label>
                                            <div class="col-lg-3">
                                                <div id="peghubungan_telp" class="form-control-plaintext font-weight-semibold"></div>
                                            </div>
                                            <label class="col-lg-2 offset-lg-1 col-form-label">NO TELEFON (B):</label>
                                            <div class="col-lg-3">
                                                <div id="peghubungan_telb" class="form-control-plaintext font-weight-semibold"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">ALAMAT:</label>
                                            <div class="col-lg-9">
                                                <div id="peghubungan_alamat" class="form-control-plaintext font-weight-semibold "></div>
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
                                                    <input type="radio" name="bahagian" id="bahagian_1" value="1" class="form-input-styled" {{ old('bahagian') == "1" ? "checked" : "" }} data-fouc>
                                                    Bahagian Sedia ada
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="bahagian" id="bahagian_0" value="0" class="form-input-styled" {{ old('bahagian') == "0" ? "checked" : "" }} data-fouc>
                                                    Bahagian Baru
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> KETERANGAN:</label>
                                        <div class="col-lg-9">
                                            <textarea name="keterangan" rows="5" cols="5" placeholder="Sila nyatakan justifikasi permohonan" class="form-control font-weight-semibold {{ $errors->has('keterangan') ? 'border-danger' : '' }}">{{ old('keterangan') }}</textarea>
                                            <span class="form-text text-danger">{{ $errors->first('keterangan') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">WARAN PERJAWATAN:</label>
                                        <div class="col-lg-9">
                                            <input name="waran" type="text" placeholder="No rujukan waran perjawatan" class="form-control font-weight-semibold" value="{{ old('waran') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> BILANGAN PERJAWATAN:</label>
                                        <div class="col-lg-2">
                                            <input name="bilJawatan" type="number" class="form-control font-weight-semibold {{ $errors->has('bilJawatan') ? 'border-danger' : '' }}" value="{{ old('bilJawatan') }}" min="0">
                                            <span class="form-text text-danger">{{ $errors->first('bilJawatan') }}</span>
                                        </div>
                                        <label class="col-lg-2 offset-lg-3 col-form-label"><font color="red">*</font> BILANGAN PEMANDU:</label>
                                        <div class="col-lg-2">
                                            <input name="bilPemandu" type="number" class="form-control font-weight-semibold {{ $errors->has('bilPemandu') ? 'border-danger' : '' }}" value="{{ old('bilPemandu') }}" min="0">
                                            <span class="form-text text-danger">{{ $errors->first('bilPemandu') }}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> STATUS PERUNTUKAN:</label>
                                        <div class="col-lg-9">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="peruntukan" id="peruntukan_1" value="1" class="form-input-styled" {{ old('peruntukan') == "1" ? "checked" : "" }} data-fouc>
                                                    PERUNTUKAN MENCUKUPI
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="peruntukan" id="peruntukan_0" value="0" class="form-input-styled" {{ old('peruntukan') == "0" ? "checked" : "" }} data-fouc>
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
											<table id="myTable" class=" table order-list">
												<tbody>
													<tr>
														<td class="col-sm-3" valign="top"><font color="red">*</font> DOKUMEN SOKONGAN
														</td>
														<td class="col-sm-8">
															<input name="dokumen" type="file"  id="dokumen" class="" data-fouc>
															<span class="form-text text-muted">Format Dokumen: pdf, doc. Saiz tidak melebihi 5Mb</span>
															<span class="form-text text-danger">{{ $errors->first('dokumen') }}</span>
														</td>
														<td class="col-sm-2"><a class="deleteRow"></a>
														</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="3" style="text-align: left;">
															<input type="button" class="btn btn-lg btn-block " id="addrow" value="TAMBAH DOKUMEN" />
														</td>
													</tr>
													<tr>
													</tr>
												</tfoot>
											</table>
										</div>
                                    </div>
                                    <?php /*<div class="form-group row">
                                        <label class="col-lg-3 col-form-label"><font color="red">*</font> DOKUMEN SOKONGAN 1:</label>
                                        <div class="col-lg-9">
                                            <input name="dokumen" type="file" class="form-input-styled" {{ $errors->has('dokumen') ? 'border-danger' : '' }} data-fouc>
                                            <span class="form-text text-muted">Format Dokumen: pdf, doc. Saiz tidak melebihi 5Mb</span>
                                            <span class="form-text text-danger">{{ $errors->first('dokumen') }}</span>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label class="col-lg-3 col-form-label">DOKUMEN SOKONGAN 2:</label>
                                        <div class="col-lg-9">
                                            <input name="dokumen2" type="file" class="form-input-styled" {{ $errors->has('dokumen') ? 'border-danger' : '' }} data-fouc>
                                            <span class="form-text text-muted">Format Dokumen: pdf, doc. Saiz tidak melebihi 5Mb</span>
                                            <span class="form-text text-danger">{{ $errors->first('dokumen') }}</span>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label class="col-lg-3 col-form-label">DOKUMEN SOKONGAN 3:</label>
                                        <div class="col-lg-9">
                                            <input name="dokumen3" type="file" class="form-input-styled" {{ $errors->has('dokumen') ? 'border-danger' : '' }} data-fouc>
                                            <span class="form-text text-muted">Format Dokumen: pdf, doc. Saiz tidak melebihi 5Mb</span>
                                            <span class="form-text text-danger">{{ $errors->first('dokumen') }}</span>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label class="col-lg-3 col-form-label">DOKUMEN SOKONGAN 4:</label>
                                        <div class="col-lg-9">
                                            <input name="dokumen4" type="file" class="form-input-styled" {{ $errors->has('dokumen') ? 'border-danger' : '' }} data-fouc>
                                            <span class="form-text text-muted">Format Dokumen: pdf, doc. Saiz tidak melebihi 5Mb</span>
                                            <span class="form-text text-danger">{{ $errors->first('dokumen') }}</span>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label class="col-lg-3 col-form-label">DOKUMEN SOKONGAN 5:</label>
                                        <div class="col-lg-9">
                                            <input name="dokumen5" type="file" class="form-input-styled" {{ $errors->has('dokumen') ? 'border-danger' : '' }} data-fouc>
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
                                                    <tr id="listnothing">
                                                        <td colspan='5' align='center'><b>- Tiada -</b></td>
                                                        <td><input name="justkenderaanlist[]" id="justkenderaanlist[]" type="hidden" value=""></td>
                                                        <td><input name="justmodellist[]" id="justmodellist[]" type="hidden" value=""></td>
                                                        <td><input name="justbillist[]" id="justbillist[]" type="hidden" value=""></td>
                                                        <td><input name="justkegunaanlist[]" id="justkegunaanlist[]" type="hidden" value=""></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <div class="text-right">
                                            {{-- <button id="btntambahkenderaan" type="button" class="btn btn-outline border-transparent bg-slate-700 text-slate-700"><i class="icon-plus22 mr-2"></i>Tambah</button> --}}
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
                                <div class="list-inline ml-0"></div>
                                <div class="list-inline mr-0">
                                    <button type="submit" name="submit" value="simpan" class="btn btn-outline bg-teal-400 text-teal-400 border-teal-400">SIMPAN <i class="icon-drawer-in ml-2"></i></button>
                                    <button type="submit" name="submit" value="hantar" class="btn btn-primary">HANTAR <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Borang KJB -->
    </div>
    <!-- /Content area -->
@endsection

@section('script')
    <script src="{{ asset('js/global_assets/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('js/global_assets/plugins/forms/styling/uniform.min.js') }}"></script>
@endsection

@section('script-custom')
    <script src="{{ asset('js/main_assets/form_layouts.js') }}"></script>

    @if(session('status'))
        {!! session('status') !!}
    @endif

    <script>
        $(document).ready(function() {
            // Bandar dan Negeri
            function getPoskod()
            {
                var poskod = $('#poskod').val();

                //$.get('/conf/getposkod/' + poskod, function(data) {
				$.get("{{url('conf/getposkod/')}}" + '/' + poskod, function(data) {
                    $('#bandar').empty();

                    $.each(data, function(index, dataObj) {
                        $('#bandar').append('<option value=' + dataObj.id + '>' + dataObj.bandar +'</option>');
                    });

                    $('#negeri').val(data[0].negeri.nama);
                });
            }

            // Maklumat Pegawai Perhubungan
            function getPegawaiPerhubunganDetail()
            {
                var peghubungan_id = $('#pegawaiPerhubungan').val();

                //$.get('/conf/getpeghubungan/' + peghubungan_id , function(data) {
				$.get("{{url('conf/getpeghubungan/')}}" + '/' + peghubungan_id , function(data) {
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

            if ( $('input:radio[name="bahagian"]').is(':checked') === false ) {
                $('#bahagian_1').attr('checked', 'checked');
            }

            if ( $('input:radio[name="peruntukan"]').is(':checked') === false ) {
                $('#peruntukan_1').attr('checked', 'checked');
            }

            if ( $('#poskod').val() ) {
                getPoskod();
            }

            if ( $('#pegawaiPerhubungan').val() != 0 ) {
                getPegawaiPerhubunganDetail();
            }
            else {
                $('#peghubung_detail').hide();
            }

            // // Telefon formatter
            // $('#penerimaTelPejabat').keyup(function(){
            //     var num = $(this).val();
            //     if( parseInt(num) >= 08 && parseInt(num) < 09 ){
            //         console.log('hi');
            //         $(this).removeClass('format-phone-office1');
            //     }
            // });

            $('#poskod').change(function() {
                getPoskod();
            });

            $('#pegawaiPerhubungan').change(function() {
                getPegawaiPerhubunganDetail();
            });

            $('#btntambahkenderaan').click(function() {
                $('#justmodel').val('');
                $('#justbil').val('');
                $('#justkegunaan').val('');

                $('#tambahkenderaan').show();
                $('#btntambahkenderaan').hide();
                $('#btnsimpantambahkenderaan').attr('disabled', 'disabled');
            });

            $('.semak input, .semak textarea').keyup(function() {
                let empty = false;

                $('.semak input, .semak textarea').each(function() {
                    if ($(this).val().length == 0) {
                        empty = true;
                    }
                });

                if ( empty )
                    $('#btnsimpantambahkenderaan').attr('disabled', 'disabled');
                else
                    $('#btnsimpantambahkenderaan').attr('disabled', false);
            });

            $('#btntutuptambahkenderaan').click(function() {
                $('#btntambahkenderaan').show();
                $('#tambahkenderaan').hide();
            });

            $('#btnsimpantambahkenderaan').click(function() {
                var justkenderaanid = $('#justkenderaan').val();
                var justkenderaan = $('#justkenderaan option:selected').html();
                var justmodel = $('#justmodel').val();
                var justbil = $('#justbil').val();
                var justkegunaan = $('#justkegunaan').val();

                var papar = '<tr>';
                    papar += '<td><input name="justkenderaanlist[]" id="justkenderaanlist[]" type="hidden" value="' + justkenderaanid + '">' + justkenderaan + '</td>';
                    papar += '<td><input name="justmodellist[]" id="justmodellist[]" type="hidden" value="' + justmodel + '">'+ justmodel +'</td>';
                    papar += '<td><input name="justbillist[]" id="justbillist[]" type="hidden" value="' + justbil + '">'+ justbil +'</td>';
                    papar += '<td><input name="justkegunaanlist[]" id="justkegunaanlist[]" type="hidden" value="' + justkegunaan + '">'+ justkegunaan +'</td>';
                    papar += '<td><div class="list-icons"><a href="#" class="list-icons-item text-danger-300"><i class="icon-trash"></i></a></div></td>';
                    papar += '</tr>';

                $('#listnothing').remove();
                $("#tbljustifikasi > tbody:last-child").append(papar);

                $('#btntambahkenderaan').show();
                $('#tambahkenderaan').hide();
            });
        });
		
		$(document).ready(function () {
			var counter = 1;

			$("#addrow").on("click", function () {
				var newRow = $("<tr>");
				var cols = "";

				cols += '<td>DOKUMEN SOKONGAN ' + counter + '</td>';
				cols += '<td><input name="dokumen' + counter + '" type="file" class="" data-fouc><span class="form-text text-muted">Format Dokumen: pdf, doc. Saiz tidak melebihi 5Mb</span><span class="form-text text-danger"></span></td>';

				cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
				newRow.append(cols);
				$("table.order-list").append(newRow);
				counter++;
				
				if (counter == 5)
				{
					$("#addrow").prop('disabled', true);
				}
				else
				{
					$("#addrow").prop('disabled', false);	
				}
			});

			$("table.order-list").on("click", ".ibtnDel", function (event) {
				$(this).closest("tr").remove();       
				counter -= 1
				
				if (counter == 5)
				{
					$("#addrow").prop('disabled', true);
				}
				else
				{
					$("#addrow").prop('disabled', false);	
				}
			});

		});
    </script>
@endsection

