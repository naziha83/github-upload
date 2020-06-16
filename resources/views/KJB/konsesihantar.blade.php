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
                            NO PESANAN &emsp;-&emsp; <span class="font-weight-bold" style="font-size:1rem;"> {{ $kjbPesanan->no_pesanan }}</span>
                        </div>

                        <!-- Kronologi permohonan -->
                        @include('KJB/kronologi')
                        <!-- /Kronologi permohonan -->

                        <!-- Butiran permohonan -->
                        @include('KJB/butiranborang')
                        <!-- /Butiran permohonan -->
						
						<?php
						if ($statusSemasa == "C6")
						{
							$penghantar_tarikh = date("d-m-Y", strtotime($penerimaan->penghantar_tarikh));
							$saksi_hantar_tarikh = date("d-m-Y", strtotime($penerimaan->saksi_hantar_tarikh));
							$penerima_jawatan = $penerimaan->penerima_jawatan;
							$penerima_tarikh = date("d-m-Y", strtotime($penerimaan->penerima_tarikh));
							$saksi_terima_nama = $penerimaan->saksi_terima_nama;
							$saksi_terima_nokp = $penerimaan->saksi_terima_nokp;
							$saksi_terima_jawatan = $penerimaan->saksi_terima_jawatan;
							$saksi_terima_tarikh = date("d-m-Y", strtotime($penerimaan->saksi_terima_tarikh));
						}
						else 
						{
							$penghantar_tarikh = "";
							$saksi_hantar_tarikh = "";
							$penerima_jawatan = "";
							$penerima_tarikh = "";
							$saksi_terima_nama = "";
							$saksi_terima_nokp = "";
							$saksi_terima_jawatan = "";
							$saksi_terima_tarikh = "";
						}
						?>

                        <!-- Konsesi pajak -->
                        <div class="card border-top-orange-700 border-top-2">
                            <div class="card-body">
                                <form action="{{ route('kjb.konsesi.penghantaranupdate', $kjbPesanan->id) }}" method="POST">
									@csrf
                                    @method('PUT')

                                    <!-- Penghantaran -->
                                    <fieldset>
                                        <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                                            <i class="icon-people mr-2"></i>
                                            MAKLUMAT PENGHANTARAN/PENERIMAAN
                                            <a class="float-right text-default" data-toggle="collapse" data-target="#peghubung">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                                        <div class="collapse show" id="peghubung">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"><font color="red">*</font> TARIKH PENGHANTARAN:</label>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input name="tarikh_penghantaran" id="tarikh_penghantaran" type="text" class="form-control pickadate-accessibility font-weight-semibold" value="{{ date('d-m-Y', strtotime($penerimaan->tarikh_penghantaran)) }}">
														<span class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icon-calendar2"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card border-0">
                                                    <div class="card-body" id="#">
                                                        <legend class="font-weight-bold text-uppercase font-size-sm text-slate-700 border-bottom-info-700">
                                                            MAKLUMAT PENGHANTAR
                                                        </legend>
														<div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> NAMA PENGHANTAR:</label>
                                                            <div class="col-lg-9">
                                                                <select name="nama_hantar" id="nama_hantar" data-placeholder="Sila pilih pegawai penghantar" class="form-control form-control-select2" data-fouc>
                                                                    <option></option>
                                                                    <?php 
																		foreach ($pegKonsesi as $index=>$nama)
																		{
																	?>
																	<option value="{{ $index }}" <?php if ($pegKonsesihantar->id == $index ) { echo 'selected'; } ?>>{{ $nama }}</option>
																	<?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">NO KAD PENGENALAN: </label>
                                                            <div class="col-lg-3">
                                                                <div id="nokp_hantar" class="form-control-plaintext font-weight-semibold">{{ $pegKonsesihantar->nokp }}</div>
                                                            </div>
                                                            <div class="col-lg-1"></div>
                                                            <label class="col-lg-2 col-form-label">JAWATAN: </label>
                                                            <div class="col-lg-3">
                                                                <div id="jaw_hantar" class="form-control-plaintext font-weight-semibold">{{ $pegKonsesihantar->jaw }}</div>
                                                            </div>
                                                        </div>
														<div class="form-group row">
														<label class="col-lg-3 col-form-label"><font color="red">*</font> TARIKH:</label>
															<div class="col-lg-3">
																<div class="input-group">
																	<input name="penghantar_tarikh" id="penghantar_tarikh" type="text" class="form-control pickadate-accessibility font-weight-semibold" value="{{$penghantar_tarikh}}">
																	<span class="input-group-prepend">
																		<span class="input-group-text"><i class="icon-calendar2"></i></span>
																	</span>
																</div>
															</div>
                                            			</div>
                                                        <hr class="col-lg-8">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> NAMA SAKSI PENGHANTAR:</label>
															<div class="col-lg-9">
                                                                <select name="nama_saksi" id="nama_saksi" data-placeholder="Sila pilih saksi penghantar" class="form-control form-control-select2" data-fouc>
                                                                    <option></option>
                                                                    <?php 
																		foreach ($pegKonsesi as $index=>$nama)
																		{
																	?>
																	<option value="{{ $index }}" <?php if ($pegKonsesisaksi->id == $index ) { echo 'selected'; } ?>>{{ $nama }}</option>
																	<?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">NO KAD PENGENALAN: </label>
                                                            <div class="col-lg-3">
                                                                <div id="nokp_saksi" class="form-control-plaintext font-weight-semibold">{{ $pegKonsesisaksi->nokp }}</div>
                                                            </div>
                                                            <div class="col-lg-1"></div>
                                                            <label class="col-lg-2 col-form-label">JAWATAN: </label>
                                                            <div class="col-lg-3">
                                                                <div id="jaw_saksi" class="form-control-plaintext font-weight-semibold">{{ $pegKonsesisaksi->jaw }}</div>
                                                            </div>
                                                        </div>
														<div class="form-group row">
														<label class="col-lg-3 col-form-label"><font color="red">*</font> TARIKH:</label>
															<div class="col-lg-3">
																<div class="input-group">
																	<input name="saksi_hantar_tarikh" id="saksi_hantar_tarikh" type="text" class="form-control pickadate-accessibility font-weight-semibold" value="{{$saksi_hantar_tarikh}}">
																	<span class="input-group-prepend">
																		<span class="input-group-text"><i class="icon-calendar2"></i></span>
																	</span>
																</div>
															</div>
                                            			</div>
                                                        <br>
                                                        <legend class="font-weight-bold text-uppercase font-size-sm text-slate-700 border-bottom-info-700">
                                                            MAKLUMAT PENERIMA
                                                        </legend>
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> NAMA PENERIMA:</label>
                                                            <div class="col-lg-9">
																<input type="text" name="penerima_nama" id="penerima_nama" value="{{ $kjbPesanan->penerima_nama }}" class="form-control font-weight-semibold" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">NO KAD PENGENALAN: </label>
                                                            <div class="col-lg-3">
																<input type="text" name="penerima_nokp" id="penerima_nokp" value="{{ $kjbPesanan->penerima_nokp }}" class="form-control font-weight-semibold" />
                                                            </div>
															<div class="col-lg-1"></div>
                                                            <label class="col-lg-2 col-form-label">JAWATAN: </label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="penerima_jawatan" id="penerima_jawatan" class="form-control font-weight-semibold" value="{{$penerima_jawatan}}" />
                                                            </div>
                                                        </div>
														<div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">NO TEL PEJABAT: </label>
                                                            <div class="col-lg-3">
																<input type="text" name="penerima_tel_pejabat" id="penerima_tel_pejabat" value="{{ $kjbPesanan->penerima_tel_pejabat }}" class="form-control font-weight-semibold" />
                                                            </div>
                                                            <div class="col-lg-1"></div>
                                                            <label class="col-lg-2 col-form-label">NO TEL BIMBIT: </label>
                                                            <div class="col-lg-3">
																<input type="text" name="penerima_tel_bimbit" id="penerima_tel_bimbit" value="{{ $kjbPesanan->penerima_tel_bimbit }}" class="form-control font-weight-semibold" />
                                                            </div>
                                                        </div>
														<div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red"></font> ALAMAT:</label>
                                                            <div class="col-lg-9">
																<input type="text" name="penerima_alamat1" id="penerima_alamat1" value="{{ $kjbPesanan->penerima_alamat1 }}" class="form-control font-weight-semibold" />
                                                            </div>
                                                        </div>
														<div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red">&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                            <div class="col-lg-9">
																<input type="text" name="penerima_alamat2" id="penerima_alamat2" value="{{ $kjbPesanan->penerima_alamat2 }}" class="form-control font-weight-semibold" />
                                                            </div>
                                                        </div>
														<div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red">&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                            <div class="col-lg-9">
																<input type="text" name="penerima_alamat3" id="penerima_alamat3" value="{{ $kjbPesanan->penerima_alamat3 }}" class="form-control font-weight-semibold" />
                                                            </div>
                                                        </div> 
														<div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red"></font> POSKOD:</label>
                                                            <div class="col-lg-9">
																<select name="poskod" id="poskod" data-placeholder="Masukkan poskod" class="form-control select-minimum font-weight-semibold" maxlength="5" data-container-css-class="{{ $errors->has('poskod') ? 'border-danger' : '' }}" data-fouc>
																<option></option>
																	@foreach ($poskod1 as $item)
																		<option value="{{ $item->poskod }}" {{ old('poskod', $kjbPesanan->poskod->poskod) == $item->poskod ? 'selected' : '' }}>{{ $item->poskod }} </option>
																	@endforeach
																</select>
                                                            </div>
                                                        </div>
														<div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red"></font> BANDAR:</label>
                                                            <div class="col-lg-9">
																<select name="bandar" id="bandar" data-placeholder="Sila pilih bandar" class="form-control form-control-select2" data-fouc>
																	<option></option>
																</select>
                                                            </div>
                                                        </div>
														<div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red"></font> NEGERI:</label>
                                                            <div class="col-lg-9">
                                                                <input name="negeri" id="negeri" type="text" class="form-control font-weight-semibold" value="{{ $kjbPesanan->poskod->negeri->nama }}" disabled>
                                                            </div>
                                                        </div>
														<div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> TARIKH:</label>
                                                            <div class="col-lg-3">
																<div class="input-group">
																	<input type="text" name="penerima_tarikh" id="penerima_tarikh" class="form-control pickadate-accessibility font-weight-semibold" value="{{$penerima_tarikh}}">
																	<span class="input-group-prepend">
																		<span class="input-group-text"><i class="icon-calendar2"></i></span>
																	</span>
																</div>
															</div>
                                                        </div>
                                                        <hr class="col-lg-8">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> NAMA SAKSI PENERIMA:</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" name="saksi_terima_nama" id="saksi_terima_nama" class="form-control font-weight-semibold" value="{{$saksi_terima_nama}}" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">NO KAD PENGENALAN: </label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="saksi_terima_nokp" id="saksi_terima_nokp" class="form-control font-weight-semibold" value="{{$saksi_terima_nokp}}" />
                                                            </div>
                                                            <div class="col-lg-1"></div>
                                                            <label class="col-lg-2 col-form-label">JAWATAN: </label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="saksi_terima_jawatan" id="saksi_terima_jawatan" class="form-control font-weight-semibold" value="{{$saksi_terima_jawatan}}" />
                                                            </div>
                                                        </div>
														<div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> TARIKH:</label>
                                                            <div class="col-lg-3">
																<div class="input-group">
																	<input type="text" name="saksi_terima_tarikh" id="saksi_terima_tarikh" class="form-control pickadate-accessibility font-weight-semibold" value="{{$saksi_terima_tarikh}}">
																	<span class="input-group-prepend">
																		<span class="input-group-text"><i class="icon-calendar2"></i></span>
																	</span>
																</div>
															</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- /Penghantaran -->
									
									<!-- Akuan Penghantaran Kereta -->
                                    <fieldset>
                                        <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                                            <i class="icon-people mr-2"></i>
                                            AKUAN PENGHANTARAN KERETA JABATAN
                                            <a class="float-right text-default" data-toggle="collapse" data-target="#peghubung">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                                        <div class="collapse show" id="peghubung">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"><font color="red">*</font> AKUAN PENGHANTARAN:</label>
                                                <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
														<input type="radio" name="akuan_hantar" id="akuan_hantar" value="1" class="form-input-styled" data-fouc />&nbsp;PENGHANTARAN KERETA TELAH SELESAI
                                                    </label>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- /Akuan Penghantaran kereta -->

                                    <br>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="list-inline ml-0">
                                            <div class="btn-group" role="group">
												<a href="{{ route('kjb.konsesi.cetakaod', $kjbPesanan->id) }}" class="btn btn-outline bg-slate text-slate border-slate">CETAK AOD <i class="icon-printer4 ml-2"></i></a>
											</div>
                                        </div>
                                        <div class="list-inline mr-0">
											<button type="submit" name="submit" id="submit" value="simpan" class="btn btn-outline bg-teal-400 text-teal-400 border-teal-400">SIMPAN <i class="icon-drawer-in ml-2"></i></button>
                                            <button type="submit" name="submit" id="submit" value="hantar" class="btn btn-primary">HANTAR <i class="icon-paperplane ml-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <!-- /Konsesi pajak -->
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
		$("#nama_hantar").on('change', function(){
			//alert("dah klik");
			var id_hantar = $("#nama_hantar").val();
			if (id_hantar != ""){
				$.get("{{url('conf/getpegkonsesi/')}}" + '/' + id_hantar , function(data) {
					
                    $('#nokp_hantar').text(data.nokp);
                    $('#jaw_hantar').text(data.jaw);
                });
			}
		});
		
		$("#nama_saksi").on('change', function(){
			//alert("dah klik");
			var id_saksi = $("#nama_saksi").val();
			if (id_saksi != ""){
				$.get("{{url('conf/getpegkonsesi/')}}" + '/' + id_saksi , function(data) {
					
                    $('#nokp_saksi').text(data.nokp);
                    $('#jaw_saksi').text(data.jaw);
                });
			}
		});
		
		if( $('#poskod').val() )
            {
                var poskod = $('#poskod').val();

                $.get("{{url('conf/getposkod/')}}" + '/' + poskod, function(data){
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
				//alert (poskod);
                console.log(poskod);
                $.get("{{url('conf/getposkod/')}}" + '/' + poskod, function(data) {
                    $('#bandar').empty();

                    $.each(data, function(index, dataObj){
                        $('#bandar').append('<option value=' + dataObj.id + '>' + dataObj.bandar +'</option>');
                    });
                    // console.log(data[0].negeri.nama);
                    $('#negeri').val(data[0].negeri.nama);
                });
            });
	</script>
@endsection