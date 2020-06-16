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
						if ($statusSemasa == "C5")
						{
							$kuasa_enjin = $konsesiKereta->kuasa_enjin;
							$bahan_bakar = $konsesiKereta->bahan_bakar;
							$tahun_buatan = $konsesiKereta->tahun_buatan;
							$no_pendaftaran = $konsesiKereta->no_pendaftaran;
							$trk_daftar = date("d-m-Y", strtotime($konsesiKereta->trk_daftar));
							$trk_jadual_pakajan = $konsesiPajakan->jadual_pajakan_id;
							
							if ($jadualPajakan2->lokasi_id == "1") 
							{
								$lokasi = "Malaysia Barat";
							}
							else 
							{
								$lokasi = "Malaysia Timur";
							}
							
							$no_pajakan = $konsesiPajakan->no_pajakan;
							$trk_mula_pajakan = date("d-m-Y", strtotime($konsesiPajakan->tarikh_mula_pajakan));
							$trk_akhir_pajakan = date("d-m-Y", strtotime($konsesiPajakan->tarikh_akhir_pajakan));
							$sewa_bulanan = $konsesiPajakan->sewa_bulanan;
							$tahun1_mula = $konsesiPajakan->tahun1_mula;
							$tahun1_akhir = $konsesiPajakan->tahun1_akhir;
							$tahun1_kos = $konsesiPajakan->tahun1_kos;
							$tahun2_mula = $konsesiPajakan->tahun2_mula;
							$tahun2_akhir = $konsesiPajakan->tahun2_akhir;
							$tahun2_kos = $konsesiPajakan->tahun2_kos;
							$tahun3_mula = $konsesiPajakan->tahun3_mula;
							$tahun3_akhir = $konsesiPajakan->tahun3_akhir;
							$tahun3_kos = $konsesiPajakan->tahun3_kos;
							$tahun4_mula = $konsesiPajakan->tahun4_mula;
							$tahun4_akhir = $konsesiPajakan->tahun4_akhir;
							$tahun4_kos = $konsesiPajakan->tahun4_kos;
							$tahun5_mula = $konsesiPajakan->tahun5_mula;
							$tahun5_akhir = $konsesiPajakan->tahun5_akhir;
							$tahun5_kos = $konsesiPajakan->tahun5_kos;
							$tarikh_penghantaran = date("d-m-Y", strtotime($penerimaan->tarikh_penghantaran));
							$tpt_penghantaran = $penerimaan->tempat_penghantaran;
							$nama_hantar = $penerimaan->penghantar_id;
							$kp_hantar = $pegKonsesihantar->nokp;
							$jaw_hantar = $pegKonsesihantar->jaw;
							$nama_saksi = $penerimaan->saksi_hantar_id;
							$kp_saksi = $pegKonsesisaksi->nokp;
							$jaw_saksi = $pegKonsesisaksi->jaw;
						}
						else 
						{
							$kuasa_enjin = "";
							$bahan_bakar = "";
							$tahun_buatan = "";
							$no_pendaftaran = "";
							$trk_daftar = "";
							$trk_jadual_pakajan = "";
							$lokasi = "";
							$no_pajakan = "";
							$trk_mula_pajakan = "";
							$trk_akhir_pajakan = "";
							$sewa_bulanan = "";
							$tahun1_mula = "";
							$tahun1_akhir = "";
							$tahun1_kos = "";
							$tahun2_mula = "";
							$tahun2_akhir = "";
							$tahun2_kos = "";
							$tahun3_mula = "";
							$tahun3_akhir = "";
							$tahun3_kos = "";
							$tahun4_mula = "";
							$tahun4_akhir = "";
							$tahun4_kos = "";
							$tahun5_mula = "";
							$tahun5_akhir = "";
							$tahun5_kos = "";
							$tarikh_penghantaran = "";
							$tpt_penghantaran = "";
							$nama_hantar = "";
							$kp_hantar = "";
							$jaw_hantar = "";
							$nama_saksi = "";
							$kp_saksi = "";
							$jaw_saksi = "";
						}
						?>

                        <!-- Konsesi pajak -->
                        <div class="card border-top-orange-700 border-top-2">
                            <div class="card-header bg-white header-elements-inline">
                                <p class="card-title font-weight-semibold text-uppercase"><b>TINDAKAN SYARIKAT KONSESI </b></p>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>
							<?php 
								$thnbuat = [];
								for ($i=date('Y'); $i>=2015; $i--)
								{
									$thnbuat[$i] = $i;
								}
							?>
                            <div class="card-body">
                                <form action="{{ route('kjb.konsesi.simpaninfokonsesi', $kjbPesanan->id) }}" method="POST">
									@csrf
                                    @method('PUT')
									
                                    <!-- Butiran kenderaan konsesi -->
                                    <fieldset>
                                        <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                                            {{-- <i class="mi-directions-car mr-2"></i> --}}
                                            <i class="icon-car mr-2"></i>
                                            BUTIRAN KENDERAAN KONSESI
                                            <a class="float-right text-default" data-toggle="collapse" data-target="#model">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                                        <div class="collapse show" id="model">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"><font color="red">*</font> KUASA ENJIN (CC):</label>
                                                <div class="col-lg-3">
                                                    <input type="text" name="kuasa_enjin" id="kuasa_enjin" class="form-control font-weight-semibold" value="{{$kuasa_enjin}}">
                                                </div>
                                                <label class="col-lg-2 offset-lg-1 col-form-label"><font color="red">*</font> BAHAN BAKAR:</label>
                                                <div class="col-lg-3">
                                                    <select name="bahan_bakar" id="bahan_bakar" data-placeholder="Sila Pilih Bahan Bakar" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
														<?php 
															foreach ($bhnBakar as $index => $bahan)
															{
														?>
														<option value="<?php echo $index; ?>" <?php if ($index == $bahan_bakar) {echo "selected";} ?>><?php echo $bahan ?></option>
														<?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"><font color="red">*</font> TAHUN DIBUAT:</label>
                                                <div class="col-lg-3">
                                                    <select name="tahun_buatan" id="tahun_buatan" data-placeholder="Sila Pilih Tahun Dibuat" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
														<?php 
															foreach($thnbuat as $tahun)
															{
														?>
                                                        <option value="<?php echo $tahun; ?>" <?php if ($tahun == $tahun_buatan) {echo "selected";} ?>><?php echo $tahun; ?> </option>
														<?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"><font color="red">*</font> NO PENDAFTARAN:</label>
                                                <div class="col-lg-3">
                                                    <input type="text" name="no_pendaftaran" id="no_pendaftaran" class="form-control font-weight-semibold" value="{{$no_pendaftaran}}">
                                                </div>
                                                <label class="col-lg-2 offset-lg-1 col-form-label"><font color="red">*</font> TARKIH PENDAFTARAN:</label>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" name="trk_daftar" id="trk_daftar" class="form-control pickadate-accessibility font-weight-semibold" value="{{$trk_daftar}}">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icon-calendar2"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- /Butiran kenderaan konsesi -->

                                    <!-- Butiran Pajakan -->
                                    <fieldset>
                                        <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                                            <i class="icon-calendar mr-2"></i>
                                            BUTIRAN PAJAKAN
                                            <a class="float-right text-default" data-toggle="collapse" data-target="#pusat">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                                        <div class="collapse show" id="pusat">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label"><font color="red">*</font> TARIKH KUATKUASA JADUAL PAJAKAN:</label>
                                                <div class="col-lg-2">
                                                    <select name="trk_jadual_pakajan" id="trk_jadual_pakajan" data-placeholder="Sila Pilih Tahun Dibuat" class="form-control form-control-select2" data-fouc>
                                                        <option></option>
														<?php 
															foreach ($jadualPajakan as $index=>$trk)
															{
														?>
														<option value="{{ $index }}" <?php if ($trk_jadual_pakajan==$index) {echo "selected";} ?>>{{ $trk }}</option>
														<?php } ?>
                                                    </select>
                                                </div>
                                                <label class="col-lg-2 offset-lg-1 col-form-label">LOKASI:</label>
                                                <div class="col-lg-3">
                                                    <div id="lokasi" class="form-control-plaintext font-weight-semibold">{{$lokasi}}</div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"><font color="red">*</font> NO PAJAKAN:</label>
                                                <div class="col-lg-3">
                                                    <input name="no_pajakan" id="no_pajakan" type="text" class="form-control font-weight-semibold" value="{{$no_pajakan}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"><font color="red">*</font> TARIKH MULA PAJAKAN:</label>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" name="trk_mula_pajakan" id="trk_mula_pajakan" class="form-control pickadate-accessibility font-weight-semibold" value="{{$trk_mula_pajakan}}">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icon-calendar2"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <label class="col-lg-2 offset-1  col-form-label">TEMPOH PAJAKAN:</label>
                                                <div class="col-lg-3">
                                                    <div class="form-control-plaintext font-weight-semibold">5 TAHUN</div>
													<input type="hidden" name="tempoh_pajakan" id="tempoh_pajakan" value="5">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"><font color="red">*</font> TARIKH LUPUT PAJAKAN:</label>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" name="trk_akhir_pajakan" id="trk_akhir_pajakan" class="form-control pickadate-accessibility font-weight-semibold" value="{{$trk_akhir_pajakan}}">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icon-calendar2"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <label class="col-lg-2 offset-1 col-form-label">SEWA BULANAN:</label>
                                                <div class="col-lg-3">
                                                    <div id="sewa_bulanan" class="form-control-plaintext font-weight-semibold">RM {{$sewa_bulanan}}</div>
													<input type="hidden" name="sewa_bulanan" id="sewa_bulanan1" value="{{$sewa_bulanan}}">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- /Butiran Pajakan -->

                                    <!-- Kos PNP -->
                                    <fieldset>
                                        <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                                            <i class="icon-coins mr-2"></i>
                                            KOS PEMBAIKAN DAN PENYENGGARAAN TAHUNAN
                                            <a class="float-right text-default" data-toggle="collapse" data-target="#pnp">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                                        <div class="collapse show" id="pnp">
                                            <div class="form-group row">
                                                <label class="col-md-2 offset-md-1 col-form-label">TAHUN 1 </label>
                                                <div id="dari1" class="col-md-1 offset-md-1 form-control-plaintext font-weight-semibold">{{$tahun1_mula}}</div>
												<input type="hidden" name="awal1" id="awal1" value="{{$tahun1_mula}}" />
                                                <label class="col-md-1 col-form-label">hingga </label>
                                                <div id="hgga1" class="col-md-1 form-control-plaintext font-weight-semibold">{{$tahun1_akhir}}</div>
												<input type="hidden" name="akhir1" id="akhir1" value="{{$tahun1_akhir}}" />
                                                <label class="col-md-1 offset-md-1 col-form-label">RM </label>
                                                <div id="rm1" class="col-md-2 form-control-plaintext font-weight-bold">{{$tahun1_kos}}</div>
												<input type="hidden" name="tahun1_kos" id="tahun1_kos" value="{{$tahun1_kos}}">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 offset-md-1 col-form-label">TAHUN 2 </label>
                                                <div id="dari2" class="col-md-1 offset-md-1 form-control-plaintext font-weight-semibold">{{$tahun2_mula}}</div>
												<input type="hidden" name="awal2" id="awal2" value="{{$tahun2_mula}}">
                                                <label class="col-md-1 col-form-label">hingga </label>
                                                <div id="hgga2" class="col-md-1 form-control-plaintext font-weight-semibold">{{$tahun2_akhir}}</div>
												<input type="hidden" name="akhir2" id="akhir2" value="{{$tahun2_akhir}}">
                                                <label class="col-md-1 offset-md-1 col-form-label">RM </label>
                                                <div id="rm2" class="col-md-2 form-control-plaintext font-weight-bold">{{$tahun2_kos}}</div>
												<input type="hidden" name="tahun2_kos" id="tahun2_kos" value="{{$tahun2_kos}}">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 offset-md-1 col-form-label">TAHUN 3 </label>
                                                <div id="dari3" class="col-md-1 offset-md-1 form-control-plaintext font-weight-semibold">{{$tahun3_mula}}</div>
												<input type="hidden" name="awal3" id="awal3" value="{{$tahun3_mula}}">
                                                <label class="col-md-1 col-form-label">hingga </label>
                                                <div id="hgga3" class="col-md-1 form-control-plaintext font-weight-semibold">{{$tahun3_akhir}}</div>
												<input type="hidden" name="akhir3" id="akhir3" value="{{$tahun3_akhir}}">
                                                <label class="col-md-1 offset-md-1 col-form-label">RM </label>
                                                <div id="rm3" class="col-md-2 form-control-plaintext font-weight-bold">{{$tahun3_kos}}</div>
												<input type="hidden" name="tahun3_kos" id="tahun3_kos" value="{{$tahun3_kos}}">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 offset-md-1 col-form-label">TAHUN 4 </label>
                                                <div id="dari4" class="col-md-1 offset-md-1 form-control-plaintext font-weight-semibold">{{$tahun4_mula}}</div>
												<input type="hidden" name="awal4" id="awal4" value="{{$tahun4_mula}}">
                                                <label class="col-md-1 col-form-label">hingga </label>
                                                <div id="hgga4" class="col-md-1 form-control-plaintext font-weight-semibold">{{$tahun4_akhir}}</div>
												<input type="hidden" name="akhir4" id="akhir4" value="{{$tahun4_akhir}}">
                                                <label class="col-md-1 offset-md-1 col-form-label">RM </label>
                                                <div id="rm4" class="col-md-2 form-control-plaintext font-weight-bold">{{$tahun4_kos}}</div>
												<input type="hidden" name="tahun4_kos" id="tahun4_kos" value="{{$tahun4_kos}}">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 offset-md-1 col-form-label">TAHUN 5 </label>
                                                <div id="dari5" class="col-md-1 offset-md-1 form-control-plaintext font-weight-semibold">{{$tahun5_mula}}</div>
												<input type="hidden" name="awal5" id="awal5" value="{{$tahun5_mula}}">
                                                <label class="col-md-1 col-form-label">hingga </label>
                                                <div id="hgga5" class="col-md-1 form-control-plaintext font-weight-semibold">{{$tahun5_akhir}}</div>
												<input type="hidden" name="akhir5" id="akhir5" value="{{$tahun5_akhir}}">
                                                <label class="col-md-1 offset-md-1 col-form-label">RM </label>
                                                <div id="rm5" class="col-md-2 form-control-plaintext font-weight-bold">{{$tahun5_kos}}</div>
												<input type="hidden" name="tahun5_kos" id="tahun5_kos" value="{{$tahun5_kos}}">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- /Kos PNP -->

                                    <!-- Penghantaran -->
                                    <fieldset>
                                        <legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
                                            <i class="icon-people mr-2"></i>
                                            MAKLUMAT PENGHANTARAN
                                            <a class="float-right text-default" data-toggle="collapse" data-target="#peghubung">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                                        <div class="collapse show" id="peghubung">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"><font color="red">*</font> TARIKH PENGHANTARAN:</label>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input name="tarikh_penghantaran" id="tarikh_penghantaran" type="text" class="form-control pickadate-accessibility font-weight-semibold" value="{{$tarikh_penghantaran}}">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icon-calendar2"></i></span>
                                                        </span>
                                                    </div>
												</div>
												<label class="col-lg-3 col-form-label"><font color="red">*</font> TEMPAT:</label>
												<div class="col-lg-3">
													<div class="input-group">
														<input type="text" name="tempat_penghantaran" id="tempat_penghantaran" class="form-control font-weight-semibold" value="{{$tpt_penghantaran}}">
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
																	<option value="{{ $index }}" <?php if ($nama_hantar == $index) {echo "selected";} ?>>{{ $nama }}</option>
																	<?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">NO KAD PENGENALAN: </label>
                                                            <div class="col-lg-3">
                                                                <div id="nokp_hantar" class="form-control-plaintext font-weight-semibold">{{$kp_hantar}}</div>
                                                            </div>
                                                            <div class="col-lg-1"></div>
                                                            <label class="col-lg-2 col-form-label">JAWATAN: </label>
                                                            <div class="col-lg-3">
                                                                <div id="jaw_hantar" class="form-control-plaintext font-weight-semibold">{{$jaw_hantar}}</div>
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
																	<option value="{{ $index }}" <?php if ($nama_saksi == $index) {echo "selected";} ?>>{{ $nama }}</option>
																	<?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">NO KAD PENGENALAN: </label>
                                                            <div class="col-lg-3">
                                                                <div id="nokp_saksi" class="form-control-plaintext font-weight-semibold">{{$kp_saksi}}</div>
                                                            </div>
                                                            <div class="col-lg-1"></div>
                                                            <label class="col-lg-2 col-form-label">JAWATAN: </label>
                                                            <div class="col-lg-3">
                                                                <div id="jaw_saksi" class="form-control-plaintext font-weight-semibold">{{$jaw_saksi}}</div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <?php /*<legend class="font-weight-bold text-uppercase font-size-sm text-slate-700 border-bottom-info-700">
                                                            MAKLUMAT PENERIMA
                                                        </legend>
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> NAMA PENERIMA:</label>
                                                            <div class="col-lg-9">
                                                                <select data-placeholder="Sila pilih pegawai penerima" class="form-control form-control-select2" data-fouc>
                                                                    <option></option>
                                                                    <option value="#">Penerima Agensi Pertama </option>
                                                                    <option value="#">Penerima Agensi Kedua </option>
                                                                    <option value="#">Penerima Agensi Ketiga </option>
                                                                    <option value="#">Penerima Agensi Keempat </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">NO KAD PENGENALAN: </label>
                                                            <div class="col-lg-3">
                                                                <div class="form-control-plaintext font-weight-semibold">851224-13-1234</div>
                                                            </div>
                                                            <div class="col-lg-1"></div>
                                                            <label class="col-lg-2 col-form-label">JAWATAN: </label>
                                                            <div class="col-lg-3">
                                                                <div class="form-control-plaintext font-weight-semibold">Account Executive</div>
                                                            </div>
                                                        </div>
                                                        <hr class="col-lg-8">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label"><font color="red">*</font> NAMA SAKSI PENERIMA:</label>
                                                            <div class="col-lg-9">
                                                                <select data-placeholder="Sila pilih saksi penghantar" class="form-control form-control-select2" data-fouc>
                                                                    <option></option>
                                                                    <option value="#">Saksi Penerima Agensi Pertama </option>
                                                                    <option value="#">Saksi Penerima Agensi Kedua </option>
                                                                    <option value="#">Saksi Penerima Agensi Ketiga </option>
                                                                    <option value="#">Saksi Penerima Agensi Keempat </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label">NO KAD PENGENALAN: </label>
                                                            <div class="col-lg-3">
                                                                <div class="form-control-plaintext font-weight-semibold">851224-13-1234</div>
                                                            </div>
                                                            <div class="col-lg-1"></div>
                                                            <label class="col-lg-2 col-form-label">JAWATAN: </label>
                                                            <div class="col-lg-3">
                                                                <div class="form-control-plaintext font-weight-semibold">Account Executive</div>
                                                            </div>
                                                        </div>*/ ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!-- /Penghantaran -->

                                    <?php /*<br>
                                    <div class="d-flex justify-content-between align-items-center">
										<?php if ($statusSemasa != "C2") { ?>
                                        <div class="list-inline ml-0">
                                            <?php /*<button type="button" class="btn btn-outline bg-slate text-slate border-slate">CETAK AOD <i class="icon-printer4 ml-2"></i></button>?>
											<div class="btn-group" role="group">
												<a href="{{ route('kjb.konsesi.cetakaod', $kjbPesanan->id) }}" class="btn btn-outline bg-slate text-slate border-slate">CETAK AOD <i class="icon-printer4 ml-2"></i></a>
											</div>
                                        </div>
										<?php } ?>
										<div class="list-inline mr-0">
											<button type="submit" name="submit" value="simpan" class="btn btn-outline bg-teal-400 text-teal-400 border-teal-400">SIMPAN <i class="icon-drawer-in ml-2"></i></button>
                                    
                                        </div>
										<?php if ($statusSemasa != "C2") { ?>
                                        <div class="list-inline mr-0">
                                            <button type="submit" name="submit" value="hantar" class="btn btn-primary">HANTAR <i class="icon-paperplane ml-2"></i></button>
                                        </div>
										<?php } ?>
                                    </div>*/ ?>
									<?php /*<br><br>
									<div class="d-flex justify-content-between align-items-center">
										<?php if ($statusSemasa != "C2") { ?>
                                        <div class="list-inline ml-0">
											<div class="btn-group" role="group">
												<a href="{{ route('kjb.konsesi.cetakaod', $kjbPesanan->id) }}" class="btn btn-outline bg-slate text-slate border-slate">CETAK AOD <i class="icon-printer4 ml-2"></i></a>
											</div>
                                        </div>
										<?php } ?>
										<div class="list-inline ml-0"></div>
										<div class="list-inline mr-0">
											<?php /*<button type="submit" name="submit" value="simpan" class="btn btn-outline bg-teal-400 text-teal-400 border-teal-400">SIMPAN <i class="icon-drawer-in ml-2"></i></button> ?>
											<?php if ($statusSemasa != "C2") { ?>
											<button type="submit" name="submit" value="hantar" class="btn btn-primary">HANTAR <i class="icon-paperplane ml-2"></i></button>
											<?php } ?>
										</div>
									</div>*/ ?>
									<br>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="list-inline ml-0">
											<?php if ($statusSemasa != "C2") { ?>
                                            <div class="btn-group" role="group">
												<a href="{{ route('kjb.konsesi.cetakaod', $kjbPesanan->id) }}" class="btn btn-outline bg-slate text-slate border-slate">CETAK AOD <i class="icon-printer4 ml-2"></i></a>
											</div>
											<?php } ?>
                                        </div>
                                        <div class="list-inline mr-0">
											 <button type="submit" name="send" value="simpan" class="btn btn-outline bg-teal-400 text-teal-400 border-teal-400">SIMPAN <i class="icon-drawer-in ml-2"></i></button>
											<?php if ($statusSemasa != "C2") { ?>
                                            <button type="submit" name="send" value="hantar" class="btn btn-primary">HANTAR <i class="icon-paperplane ml-2"></i></button>
											<?php } ?>
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
		function set_date (userday, usermonth, useryear)
		{
			newMonth = usermonth-1;
			the_date = new Date();
			the_date.setFullYear (useryear);
			the_date.setMonth (newMonth);
			the_date.setDate (userday);
			
			//alert(the_date);
			return the_date;
		}
		
		function kiraLuput (tempoh_pajak)
		{
			days = 0;
			var begDate1 = $("#trk_daftar").val();
			var trkh_split_begDate1 = begDate1.split(/[/-]+/);
			var daftar = set_date (trkh_split_begDate1[0],trkh_split_begDate1[1],trkh_split_begDate1[2]);
			var begDate = $("#trk_mula_pajakan").val();
			var trkh_split_begDate = begDate.split(/[/-]+/);
			var mula = set_date (trkh_split_begDate[0],trkh_split_begDate[1],trkh_split_begDate[2]);
			
			//Kira trh mula > tarikh daftar
			var difDate1 = mula.getTime() - daftar.getTime();
			var haridaftar = difDate1 / (24*60*60*1000);
			
			if (haridaftar < 0 || isNaN(haridaftar))
			{
				alert("Tarikh Mula Pajakan mesti melebihi tarikh pendaftaran.")
				$("#trk_mula_pajakan").val("");
				return false;
			}
			
			//start kira tarikh luput dan penyelenggaraan
			tempohPajak = Number(tempoh_pajak);
			var tahunMula = mula.getFullYear();
			var bulanMula = trkh_split_begDate[1];
			var hariMula = trkh_split_begDate[0];
			
			if (hariMula == 01)
			{
				//alert ("mula 1 hb");
				//jika 1 hari bulan
				if (bulanMula == 01)
				{
					//alert ("mula januari");
					//jika bulan januari
					var newHariMula = daysInMonth(trkh_split_begDate[2],trkh_split_begDate[1]);
					var newBulanMula = 12;
					var newTahunMula = mula.getFullYear();
					var newTahunTamat = Number(newTahunMula)+(tempohPajak-1);
					var tarikhLuput = (newHariMula+'-'+newBulanMula+'-'+newTahunTamat);
					var bulanPajakMula = 01;
					var bulanPajakTamat = 12;
					var tahunPajakMula = mula.getFullYear();
					var tahunPajakTamat = mula.getFullYear();
				}
				else
				{
					//alert ("mula bukan januari");
					//jika bukan bulan januari
					var newHariMula = daysInMonth(trkh_split_begDate[2],trkh_split_begDate[1]-1);
					var newBulanMula = Number(bulanMula)-1;
					var newTahunMula = mula.getFullYear();
					var newTahunTamat = Number(newTahunMula)+(tempohPajak);
					var tarikhLuput = (newHariMula+'-'+newBulanMula+'-'+newTahunTamat);
					var bulanPajakMula = Number(bulanMula);
					var bulanPajakTamat = Number(bulanMula)-1;
					var tahunPajakMula = Number(mula.getFullYear());
					var tahunPajakTamat = Number(mula.getFullYear())+1;
				}
			}
			else
			{
				//alert ("mula bukan 1 hb");
				//jika bukan 1 haribulan
				if (Number(hariMula)<16)
				{
					//alert ("mula < 16");
					//jika hari kurang dari 16
					var newHariMula = hariMula - 1;
					var newBulanMula = bulanMula;
					var newTahunMula = Number(mula.getFullYear());
					var newTahunTamat = Number(newTahunMula)+tempohPajak;
					var tarikhLuput = (newHariMula+'-'+newBulanMula+'-'+newTahunTamat);
					var bulanPajakMula = Number(bulanMula);
					if (bulanMula == 01)
					{
						var bulanPajakTamat=12;
						var tahunPajakMula = Number(mula.getFullYear());
						var tahunPajakTamat = Number(mula.getFullYear());
					}
					else
					{
						//alert ("mula != 01");
						var bulanPajakTamat=Number(bulanMula)-1;
						var tahunPajakMula = Number(mula.getFullYear());
						var tahunPajakTamat = Number(mula.getFullYear())+1;
					}
				}
				else
				{
					//alert ("mula > 16");
					//jika hari lebih dari 16
					if (bulanMula == 12)
					{
						var newHariMula = hariMula - 1;
						var newBulanMula = 1;
						var newTahunMula = Number(mula.getFullYear())+1;
						var newTahunTamat = Number(newTahunMula)+tempohPajak;
						var tarikhLuput = (newHariMula+'-'+newBulanMula+'-'+newTahunTamat);
						var bulanPajakMula = 01;
						var bulanPajakTamat=12;
						var tahunPajakMula = Number(mula.getFullYear())+1;
						var tahunPajakTamat = Number(mula.getFullYear())+1;
					}
					else
					{
						var newHariMula = hariMula - 1;
						var newBulanMula = bulanMula;
						var newTahunMula = Number(mula.getFullYear());
						var newTahunTamat = Number(newTahunMula)+tempohPajak;
						var tarikhLuput = (newHariMula+'-'+newBulanMula+'-'+newTahunTamat);
						var bulanPajakMula = Number(bulanMula)+1;
						var bulanPajakTamat=Number(bulanMula);
						var tahunPajakMula = Number(mula.getFullYear());
						var tahunPajakTamat = Number(mula.getFullYear())+1;	
					}
				}
			}
			
			if (bulanPajakMula.toString().length<2){
				bulanPajakMula = "0"+bulanPajakMula;
			}
			if (bulanPajakTamat.toString().length<2){
				bulanPajakTamat = "0"+bulanPajakTamat;
			}
			
			awal1 = bulanPajakMula+"-"+tahunPajakMula;
			akhir1 = bulanPajakTamat+"-"+tahunPajakTamat;
			
			awal2 = bulanPajakMula+"-"+(Number(tahunPajakMula)+1);
			akhir2 = bulanPajakTamat+"-"+(Number(tahunPajakTamat)+1);
			
			awal3 = bulanPajakMula+"-"+(Number(tahunPajakMula)+2);
			akhir3 = bulanPajakTamat+"-"+(Number(tahunPajakTamat)+2);
			
			awal4 = bulanPajakMula+"-"+(Number(tahunPajakMula)+3);
			akhir4 = bulanPajakTamat+"-"+(Number(tahunPajakTamat)+3);
			
			awal5 = bulanPajakMula+"-"+(Number(tahunPajakMula)+4);
			akhir5 = bulanPajakTamat+"-"+(Number(tahunPajakTamat)+4);
			
			//display
			if ($('#trk_mula_pajakan').val()!=""){
				$('#trk_akhir_pajakan').val(tarikhLuput);
				
				$("#awal1").val(awal1);
				$("#dari1").text(awal1);
				$("#akhir1").val(akhir1);
				$("#hgga1").text(akhir1);
				
				$("#awal2").val(awal2);
				$("#dari2").text(awal2);
				$("#akhir2").val(akhir2);
				$("#hgga2").text(akhir2);
				
				$("#awal3").val(awal3);
				$("#dari3").text(awal3);
				$("#akhir3").val(akhir3);
				$("#hgga3").text(akhir3);
				
				$("#awal4").val(awal4);
				$("#dari4").text(awal4);
				$("#akhir4").val(akhir4);
				$("#hgga4").text(akhir4);
				
				$("#awal5").val(awal5);
				$("#dari5").text(awal5);
				$("#akhir5").val(akhir5);
				$("#hgga5").text(akhir5);
				
			}
		}
		
		$('#trk_mula_pajakan').on("change", function (e){
			kiraLuput('5');
		});
		
		$("#trk_jadual_pakajan" ).on("change", function(e){
			var id_pajak = $(this).val();
			
			if (id_pajak != "")
			{
				$.get("{{url('conf/getpajakandetail/')}}" + '/' + id_pajak , function(data) {
					
					//get Lokasi 
					if (data.lokasi_id == 1){
						$('#lokasi').text("Malaysia Barat");
					}
					else {
						$('#lokasi').text("Malaysia Timur");
					}
                    $('#sewa_bulanan').text("RM "+data.kos);
					$('#sewa_bulanan1').val(data.kos);
                    $('#rm1').text(data.kos_selenggara1);
					$('#tahun1_kos').val(data.kos_selenggara1);
                    $('#rm2').text(data.kos_selenggara2);
					$('#tahun2_kos').val(data.kos_selenggara2);
                    $('#rm3').text(data.kos_selenggara3);
					$('#tahun3_kos').val(data.kos_selenggara3);
                    $('#rm4').text(data.kos_selenggara4);
					$('#tahun4_kos').val(data.kos_selenggara4);
                    $('#rm5').text(data.kos_selenggara5);
					$('#tahun5_kos').val(data.kos_selenggara5);
                });
			}
			else
			{
				$('#sewa_bulanan').text("RM 0");
                $('#rm1').text("0");
                $('#rm2').text("0");
                $('#rm3').text("0");
                $('#rm4').text("0");
                $('#rm5').text("0");
			}
		});
		
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
	</script>
@endsection
