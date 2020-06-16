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
                        <div class="alert alpha-teal border-teal text-teal-800 alert-styled-left col-lg-10 offset-lg-1 text-center p-2">
                            NO PESANAN &emsp;-&emsp; <span class="font-weight-bold" style="font-size:1rem;">{{ $kjbPesanan->no_pesanan }}</span>
                        </div>

                        <!-- Kronologi permohonan -->
                        @include('KJB/kronologi')
                        <!-- /Kronologi permohonan -->

                        <!-- Butiran permohonan -->
                        @include('KJB/butiranborang')
                        <!-- /Butiran permohonan -->

                        <!-- Kastam -->
                        <div class="card border-top-orange-700 border-top-2">
                            <div class="card-header bg-white header-elements-inline">
                                <p class="card-title font-weight-semibold text-uppercase"><b>TINDAKAN JABATAN KASTAM DIRAJA MALAYSIA </b></p>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('kjb.kastam.semakanUpdate', $kjbPesanan->id) }}" method="POST">
									@csrf
                                    @method('PUT')
									
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-lg-1"></div>
                                            <label class="col-lg-2 col-form-label">NO CHASIS:</label>
                                            <div class="col-lg-4">
                                                <div class="form-control-plaintext font-weight-bold">{{ $konsesiKereta->no_chasis }}</div>
                                            </div>
                                            <label class="col-lg-2 col-form-label">NO ASSEMBLY PLANT:</label>
                                            <div class="col-lg-3">
                                                <div class="form-control-plaintext font-weight-bold">{{ $konsesiKereta->no_assembly_plant }}</div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-lg-1"></div>
                                            <label class="col-lg-2 col-form-label">NO ENJIN:</label>
                                            <div class="col-lg-4">
                                                <div class="form-control-plaintext font-weight-bold">{{ $konsesiKereta->no_enjin }}</div>
                                            </div>
                                            <label class="col-lg-2 col-form-label">NO PURCHASE ORDER:</label>
                                            <div class="col-lg-3">
                                                <div class="form-control-plaintext font-weight-bold">{{ $konsesiKereta->no_purchase_order }}</div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <br>
                                    <fieldset>
                                        <div class="form-group row">
                                            <h6 class="col-lg-12">Kelulusan Pengecualian Cukai dan Duti Eksais berdasarkan Surat Kementerian Kewangan No. Rujukan <b>KK/BP/S(29.00)684/4-17 JD.4/(25)</b> bertarikh 27 Disember 1993.</h6>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-lg-1"></div>
                                            <label class="col-lg-2 col-form-label"><font color="red">*</font> SILA PILIH TINDAKAN:</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="kastam" id="kastam_1" class="form-input-styled" data-fouc value="1" {{ old('kastam') == "1" ? "checked" : "" }}>
                                                        Permohonan Diluluskan
                                                    </label>
                                                </div><br>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="kastam" id="kastam_2" class="form-input-styled" data-fouc value="2" {{ old('kastam') == "2" ? "checked" : "" }}>
                                                        Permohonan Tidak Diluluskan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div id="ulasan_kastam" class="form-group row">
                                            <div class="col-lg-1"></div>
                                            <label class="col-lg-2 col-form-label"><font color="red">*</font> ULASAN:</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" name="ulasan" id="ulasan" placeholder="Sila nyatakan ulasan" class="form-control font-weight-semibold {{ $errors->has('ulasan') ? 'border-danger' : '' }}"></textarea>
												<span class="form-text text-danger">{{ $errors->first('ulasan') }}</span>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <br>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="list-inline ml-0">
                                            <?php /*<button type="button" class="btn btn-outline bg-slate text-slate border-slate">CETAK <i class="icon-printer4 ml-2"></i></button>*/ ?>
											<div class="btn-group" role="group">
												<a href="{{ route('kjb.kastam.cetakdoc', $kjbPesanan->id) }}" class="btn btn-outline bg-slate text-slate border-slate">CETAK <i class="icon-printer4 ml-2"></i></a>
											</div>
                                        </div>
                                        <div class="list-inline mr-0">
                                            <button type="submit" name="submit" class="btn btn-primary">HANTAR <i class="icon-paperplane ml-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <!-- /Kastam -->
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
	<script>
        $(document).ready(function() {
            if ( $('input[name="kastam"]').is(':checked') === false ) {
                $('#kastam_1').attr('checked', 'checked');
                $("#ulasan_kastam").hide();
            }

            $("input[name=kastam]").click(function() {
                if ( $('input[name=kastam]:checked').val() == '1' ) {
                    $("#ulasan_kastam").hide();
                    $("#ulasan").val('');
                }
                else {
                    $("#ulasan_kastam").show();
                    $("#ulasan").val('');
                }
            });
        });
    </script>
@endsection
