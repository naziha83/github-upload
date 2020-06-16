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
                    <span class="breadcrumb-item active">Semak Permohonan - KJB</span>
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

                        <!-- Semak MOF -->
                        <div class="card border-top-orange-700 border-top-2">
                            <div class="card-header bg-white header-elements-inline">
                                <p class="card-title font-weight-semibold text-uppercase"><b>TINDAKAN PENYEMAK </b></p>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('kjb.mof.semakanupdate', $kjbPesanan->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <fieldset>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> Sila Pilih Tindakan:</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="semak" id="semak_1" value="1" {{ old('semak') == "1" ? "checked" : "" }} class="form-input-styled" data-fouc>
                                                        Lengkap
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="semak" id="semak_0" value="0" {{ old('semak') == "0" ? "checked" : "" }} class="form-input-styled" data-fouc>
                                                        Tidak Lengkap
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div id="divulasan" class="form-group row">
                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> Ulasan:</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" name="ulasan" id="ulasan" placeholder="Sila nyatakan ulasan" class="form-control font-weight-semibold {{ $errors->has('ulasan') ? 'border-danger' : '' }}"></textarea>
                                                <span class="form-text text-danger">{{ $errors->first('ulasan') }}</span>
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
                        <!-- /Semak MOF -->
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
            if ( $('input[name="semak"]').is(':checked') === false ) {
                $('#semak_1').attr('checked', 'checked');
                $("#divulasan").hide();
            }

            $("input[name=semak]").click(function() {
                if ( $('input[name=semak]:checked').val() == '1' ) {
                    $("#divulasan").hide();
                    $("#ulasan").val('');
                }
                else {
                    $("#divulasan").show();
                    $("#ulasan").val('');
                }
            });
        });
    </script>
@endsection
