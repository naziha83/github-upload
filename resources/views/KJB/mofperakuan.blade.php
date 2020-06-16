@extends('layouts.master.master')

@section('content')
    <!-- Page header -->
    <div class="page-header mb-2">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">KERETA JABATAN </span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
            <!-- Breadcrumb -->
            <div class="header-elements py-0">
                <div class="breadcrumb">
                    <a href="{{ route('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Utama</a>
                    <span class="breadcrumb-item active">Peraku Permohonan - KJB</span>
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

                        <div class="alert alpha-teal border-teal text-teal-800 alert-styled-left col-lg-10 offset-lg-1 text-center p-2">
                            NO PESANAN &emsp;-&emsp; <span class="font-weight-bold" style="font-size:1rem;">{{ $kjbPesanan->no_pesanan }}</span>
                        </div>

                        <!-- Kronologi permohonan -->
                        @include('KJB/kronologi')
                        <!-- /Kronologi permohonan -->

                        <!-- Butiran permohonan -->
                        @include('KJB/butiranborang')
                        <!-- /Butiran permohonan -->

                        <!-- Peraku MOF -->
                        <div class="card border-top-orange-700 border-top-2">
                            <div class="card-header bg-white header-elements-inline">
                                <p class="card-title font-weight-semibold text-uppercase"><b>TINDAKAN PERAKU </b></p>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('kjb.mof.perakuanupdate', $kjbPesanan->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf

                                    <fieldset>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">KEMASKINI BUTIRAN KERETA, SEKIRANYA PERLU:</label>
                                            <div class="col-lg-8">
                                                <select name="modelKeretaPinda" data-placeholder="Sila Pilih Model Kereta" class="form-control form-control-select2" data-fouc>
                                                    <option></option>
                                                    @foreach ($keretaVariasi as $item)
                                                        <option value={{ $item->id }} {{ old('modelKeretaPinda', $pindaan) == $item->id ? 'selected' : '' }}>{{ $item->keretaModel->keretaBuatan->buatan . ' ' . $item->keretaModel->model . ' ( ' . $item->keretaTransmisi->transmisi . ' / ' . $item->keretaWarna->warna . ' - ' . $item->keretaCat->cat . ' ) ' }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <br>

                                    <fieldset>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> SILA PILIH TINDAKAN:</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="peraku" id="peraku_1" value="1" class="form-input-styled" {{ old('peraku') == "1" ? "checked" : "" }} data-fouc>
                                                        Diperaku
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="peraku" d="peraku_0" value="0" class="form-input-styled" {{ old('peraku') == "0" ? "checked" : "" }} data-fouc>
                                                        Tidak Diperaku
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div id="divpelulus" class="form-group row">
                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> UNTUK KELULUSAN:</label>
                                            <div class="col-lg-6">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="pelulus" id="pelulus_1" value="3" class="form-input-styled" data-fouc>
                                                        Ketua Seksyen Pengurusan Kenderaan
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="pelulus" id="pelulus_2" value="2" class="form-input-styled" data-fouc>
                                                        Timb. Setiausaha Bahagian Pengurusan Aset Awam (Wang Awam)
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="pelulus" id="pelulus_3" value="1" class="form-input-styled" data-fouc>
                                                        Setiausaha Bahagian Pengurusan Aset Awam
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div id="divulasan" class="form-group row">
                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> ULASAN:</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" name="ulasanPeraku" id="ulasanPeraku" placeholder="Sila nyatakan ulasan" class="form-control font-weight-semibold {{ $errors->has('ulasanPeraku') ? 'border-danger' : '' }}"></textarea>
                                                <span class="form-text text-danger">{{ $errors->first('ulasanPeraku') }}</span>
                                            </div>
                                        </div>
                                    </fieldset>
									<fieldset>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label"><font color="red">*</font> DOKUMEN SOKONGAN:</label>
                                            <div class="col-lg-9">
												@foreach ($docSokongan as $item)
													<div class="row">
														<div class="col-lg-8">
															<a href="{{ route('kjb.mof.viewdoc', [$kjbPesanan->id, $item->id]) }}">{{ $item->nama_dokumen }}</a>
														</div>
													</div>
												@endforeach
												<?php /*<a href="{{ route('kjb.agensi.viewdoc', $kjbPesanan->id) }}">{{ $kjbPesanan->dokumen_sokongan }}</a>*/ ?>
											</div>
										</div>
									</fieldset>
                                    <br>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="list-inline ml-0">
                                            <?php /*<button type="button" class="btn btn-outline bg-slate text-slate border-slate">CETAK <i class="icon-printer4 ml-2"></i></button>*/ ?>
											<div class="btn-group" role="group">
												<a href="{{ route('kjb.mof.cetakdoc', $kjbPesanan->id) }}" class="btn btn-outline bg-slate text-slate border-slate">CETAK <i class="icon-printer4 ml-2"></i></a>
											</div>
                                        </div>
                                        <div class="list-inline mr-0">
                                            <button type="submit" class="btn btn-primary">HANTAR <i class="icon-paperplane ml-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <!-- /Peraku MOF -->
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
            if ( $('input[name="peraku"]').is(':checked') === false ) {
                $('#peraku_1').attr('checked', 'checked');
                $("#divulasan").hide();
            }

            $("input[name=peraku]").click(function() {
                if ( $('input[name=peraku]:checked').val() == '1' )
                    $("#divulasan").hide();
                else
                    $("#divulasan").show();

                $("#ulasanPeraku").val('');
            });

        });
    </script>
@endsection
