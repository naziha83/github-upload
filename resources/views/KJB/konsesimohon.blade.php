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
						
                        <div class="alert alpha-teal border-teal text-teal-800 alert-styled-left col-lg-10 offset-lg-1 text-center p-2">
                            NO PESANAN &emsp;-&emsp; <span class="font-weight-bold" style="font-size:1rem;">{{ $kjbPesanan->no_pesanan }}</span>
                        </div>

                        <!-- Kronologi permohonan -->
                        @include('KJB/kronologi')
                        <!-- /Kronologi permohonan -->

                        <!-- Butiran permohonan -->
                        @include('KJB/butiranborang')
                        <!-- /Butiran permohonan -->

                        <!-- Konsesi mohon pengecualian cukai -->
                        <div class="card border-top-orange-700 border-top-2">
                            <div class="card-header bg-white header-elements-inline">
                                <p class="card-title font-weight-semibold text-uppercase"><b>TINDAKAN SYARIKAT KONSESI </b></p>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('kjb.konsesi.semakanUpdate', $kjbPesanan->id) }}" method="POST">
									@csrf
                                    @method('PUT')
									
                                    <fieldset>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> SILA PILIH TINDAKAN:</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="kastam" id="kastam_1" class="form-input-styled" data-fouc value="1" {{ old('kastam') == "1" ? "checked" : "" }}>
                                                        Permohonan Lengkap
                                                    </label>
                                                </div><br>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="kastam" id="kastam_2" class="form-input-styled" data-fouc value="2" {{ old('kastam') == "2" ? "checked" : "" }}>
                                                        Permohonan Tidak Lengkap
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div id="ulasan_konsesi" class="form-group row">
                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> ULASAN:</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" name="ulasan" id="ulasan" placeholder="Sila nyatakan ulasan" class="form-control font-weight-semibold {{ $errors->has('ulasan') ? 'border-danger' : '' }}"></textarea>
												<span class="form-text text-danger">{{ $errors->first('ulasan') }}</span>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <br>
									<?php if ($statusSemasa != 'C3'){
	
									?>
									<div id="pengecualian_cukai">
										<fieldset >
											<div class="row">
												<h6><b>Permohonan Pengecualian Cukai</b></h6>
											</div>
											<div class="form-group row">
												<div class="col-lg-1"></div>
												<label class="col-lg-2 col-form-label"><font color="red">*</font> NO CHASIS:</label>
												<div class="col-lg-3">
													<input type="text" name="no_chasis" id="no_chasis" class="form-control font-weight-semibold">
												</div>
												<div class="col-lg-1"></div>
												<label class="col-lg-2 col-form-label"><font color="red">*</font> NO ASSEMBLY PLANT:</label>
												<div class="col-lg-3">
													<input type="text" name="no_assembly_plant" id="no_assembly_plant" class="form-control font-weight-semibold">
												</div>
											</div>
										</fieldset>
										<fieldset>
											<div class="form-group row">
												<div class="col-lg-1"></div>
												<label class="col-lg-2 col-form-label"><font color="red">*</font> NO ENJIN:</label>
												<div class="col-lg-3">
													<input type="text" name="no_enjin" id="no_enjin" class="form-control font-weight-semibold">
												</div>
												<div class="col-lg-1"></div>
												<label class="col-lg-2 col-form-label"><font color="red">*</font> NO PURCHASE ORDER:</label>
												<div class="col-lg-3">
													<input type="text" name="no_purchase_order" id="no_purchase_order" class="form-control font-weight-semibold">
												</div>
											</div>
										</fieldset>
									</div>
									<?php } 
										  else { ?>
									<div id="pengecualian_cukai">
										<fieldset >
											<div class="row">
												<h6><b>Permohonan Pengecualian Cukai</b></h6>
											</div>
											<div class="form-group row">
												<div class="col-lg-1"></div>
												<label class="col-lg-2 col-form-label"><font color="red">*</font> NO CHASIS:</label>
												<div class="col-lg-3">
													<input type="text" name="no_chasis" id="no_chasis" class="form-control font-weight-semibold" value="{{ $konsesiKereta->no_chasis }}">
												</div>
												<div class="col-lg-1"></div>
												<label class="col-lg-2 col-form-label"><font color="red">*</font> NO ASSEMBLY PLANT:</label>
												<div class="col-lg-3">
													<input type="text" name="no_assembly_plant" id="no_assembly_plant" class="form-control font-weight-semibold" value="{{ $konsesiKereta->no_assembly_plant }}">
												</div>
											</div>
										</fieldset>
										<fieldset>
											<div class="form-group row">
												<div class="col-lg-1"></div>
												<label class="col-lg-2 col-form-label"><font color="red">*</font> NO ENJIN:</label>
												<div class="col-lg-3">
													<input type="text" name="no_enjin" id="no_enjin" class="form-control font-weight-semibold" value="{{ $konsesiKereta->no_enjin }}">
												</div>
												<div class="col-lg-1"></div>
												<label class="col-lg-2 col-form-label"><font color="red">*</font> NO PURCHASE ORDER:</label>
												<div class="col-lg-3">
													<input type="text" name="no_purchase_order" id="no_purchase_order" class="form-control font-weight-semibold" value="{{ $konsesiKereta->no_purchase_order }}">
												</div>
											</div>
										</fieldset>
									</div>
									<?php } ?>
                                    <br>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="list-inline ml-0">
                                            <?php /*<button type="button" class="btn btn-outline bg-slate text-slate border-slate">CETAK <i class="icon-printer4 ml-2"></i></button>*/ ?>
											<div class="btn-group" role="group">
												<a href="{{ route('kjb.konsesi.cetakdoc', $kjbPesanan->id) }}" class="btn btn-outline bg-slate text-slate border-slate">CETAK <i class="icon-printer4 ml-2"></i></a>
											</div>
                                        </div>
                                        <div class="list-inline mr-0">
                                            <?php /*<button type="submit" class="btn btn-primary">HANTAR <i class="icon-paperplane ml-2"></i></button>*/ ?>
											<button type="submit" name="submit" class="btn btn-primary">HANTAR <i class="icon-paperplane ml-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <!-- /Konsesi mohon pengecualian cukai -->
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
            if ( $('input[name="kastam"]').is(':checked') === false ) {
                $('#kastam_1').attr('checked', 'checked');
                $("#ulasan_konsesi").hide();
            }

            $("input[name=kastam]").click(function() {
                if ( $('input[name=kastam]:checked').val() == '1' ) {
                    $("#ulasan_konsesi").hide();
                    $("#ulasan").val('');
					$("#pengecualian_cukai").show();
                }
                else {
                    $("#ulasan_konsesi").show();
                    $("#ulasan").val('');
					$("#pengecualian_cukai").hide();
                }
            });
        });
    </script>
@endsection
