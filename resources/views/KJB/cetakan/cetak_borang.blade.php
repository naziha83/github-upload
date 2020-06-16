<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pesanan Kereta Baru</title>
</head>

<body>
	<table width="100%">
		<tr>
			<td colspan="6" valign="top"><b>No. Pesanan Kenderaan:</b> {{ $kjbPesanan->no_pesanan }}</td>
		</tr>
	</table>
	<br />
	<br />
	<fieldset>
		<legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
        	<i class="icon-car mr-2"></i>
            <strong>MODEL KERETA</strong>
            <a class="float-right text-default" data-toggle="collapse" data-target="#model">
            	<i class="icon-circle-down2"></i>
            </a>
        </legend>
		
		<table width="100%">
			<tr>
				<td width="20%">Buatan</td><td width="5%">:</td><td>{{ $keretaVariasi->keretaModel->keretaBuatan->buatan }}</td>
				<td>Model</td><td>:</td><td>{{ $keretaVariasi->keretaModel->model }}</td>
			</tr>
			<tr>
				<td>Transmisi</td><td>:</td><td>{{ $keretaVariasi->keretaTransmisi->transmisi }}</td>
				<td>Cat</td><td>:</td><td>{{ $keretaVariasi->keretaCat->cat }}</td>
			</tr>
			<tr>
				<td>Warna</td><td>:</td><td>{{ $keretaVariasi->keretaWarna->warna }}</td>
			</tr>
		</table>
	</fieldset>
	<br />
	<fieldset>
		<legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
        	<i class="icon-car mr-2"></i>
            <strong>PUSAT KOS</strong>
            <a class="float-right text-default" data-toggle="collapse" data-target="#model">
            	<i class="icon-circle-down2"></i>
            </a>
        </legend>
		
		<table width="100%">
			<tr>
				<td width="20%">Kementerian</td><td width="5%">:</td><td colspan="3">{{ $kjbPesanan->jabatan->kementerian->nama }}</td>
			</tr>
			<tr>
				<td>Jabatan</td><td>:</td><td colspan="3">{{ $jabatan->nama }}</td>
			</tr>
			<tr>
				<td>Program</td><td>:</td><td>{{ $kjbPesanan->program }}</td>
				<td>Aktiviti</td><td>:</td><td></td>
			</tr>
			<tr>
				<td>Lokasi</td><td>:</td><td>{{ $kjbPesanan->lokasi }}</td>
				<td>Cawangan/Unit</td><td>:</td><td>{{ $kjbPesanan->cawangan }}</td>
			</tr>
		</table>
	</fieldset>
	<br />
	<fieldset>
		<legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
        	<i class="icon-car mr-2"></i>
            <strong>BUTIR-BUTIR PEMANDU</strong>
            <a class="float-right text-default" data-toggle="collapse" data-target="#model">
            	<i class="icon-circle-down2"></i>
            </a>
        </legend>
		
		<table width="100%">
			<tr>
				<td width="20%">Nama</td><td width="5%">:</td><td colspan="3"></td>
			</tr>
			<tr>
				<td>No. Kad Pengenalan</td><td>:</td><td colspan="3"></td>
			</tr>
			<tr>
				<td>Tarikh Lahir</td><td>:</td><td></td>
				<td>Jantina</td><td>:</td><td></td>
			</tr>
			<tr>
				<td>No. Lesen Memandu</td><td>:</td><td></td>
				<td>Tarikh Luput Lesen Memandu</td><td>:</td><td></td>
			</tr>
		</table>
	</fieldset>
	<br />
	<fieldset>
		<legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
        	<i class="icon-car mr-2"></i>
            <strong>BUTIR-BUTIR PEGAWAI PENERIMAAN/LOKASI PENGHANTARAN</strong>
            <a class="float-right text-default" data-toggle="collapse" data-target="#model">
            	<i class="icon-circle-down2"></i>
            </a>
        </legend>
		
		<table width="100%">
			<tr>
				<td width="20%">Nama</td><td width="5%">:</td><td colspan="3">{{ $kjbPesanan->penerima_nama }}</td>
			</tr>
			<tr>
				<td>No. Kad Pengenalan</td><td>:</td><td colspan="3">{{ $kjbPesanan->penerima_nokp }}</td>
			</tr>
			<tr>
				<td>No. Telefon (P)</td><td>:</td><td>{{ $kjbPesanan->penerima_tel_pejabat }}</td>
				<td>No. Telefon (B)</td><td>:</td><td>{{ $kjbPesanan->penerima_tel_bimbit }}</td>
			</tr>
			<tr>
				<td>Alamat Pejabat</td><td>:</td><td colspan="3">{{ $kjbPesanan->penerima_alamat1 }}</td>
			</tr>
			<tr>
				<td></td><td></td><td colspan="3">{{ $kjbPesanan->penerima_alamat2 }}</td>
			</tr>
			<tr>
				<td></td><td></td><td colspan="3">{{ $kjbPesanan->penerima_alamat3 }}</td>
			</tr>
			<tr>
				<td>Poskod</td><td>:</td><td colspan="3">{{ $poskod->poskod }}</td>
			</tr>
			<tr>
				<td>Bandar</td><td>:</td><td colspan="3">{{ $poskod->bandar }}</td>
			</tr>
			<tr>
				<td>Negeri</td><td>:</td><td colspan="3">{{ $poskod->negeri->nama }}</td>
			</tr>
		</table>
	</fieldset>
	<br />
	<fieldset>
		<legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
        	<i class="icon-car mr-2"></i>
            <strong>BUTIR-BUTIR PEGAWAI PERHUBUNGAN</strong>
            <a class="float-right text-default" data-toggle="collapse" data-target="#model">
            	<i class="icon-circle-down2"></i>
            </a>
        </legend>
		
		<table width="100%">
			<tr>
				<td width="20%">Nama</td><td width="5%">:</td><td colspan="3">{{ $pegawaiPerhubungan->nama }}</td>
			</tr>
			<tr>
				<td>No. Kad Pengenalan</td><td>:</td><td colspan="3">{{ $pegawaiPerhubungan->no_kp }}</td>
			</tr>
			<tr>
				<td>Jawatan</td><td>:</td><td>{{ $pegawaiPerhubungan->jawatan }}</td>
				<td>Gred</td><td>:</td><td>{{ $pegawaiPerhubungan->gred }}</td>
			</tr>
			<tr>
				<td>Jantina</td><td>:</td><td colspan="3"></td>
			</tr>
			<tr>
				<td>No. Telefon (P)</td><td>:</td><td>{{ $pegawaiPerhubungan->tel_pejabat }}</td>
				<td>No. Telefon (B)</td><td>:</td><td>{{ $pegawaiPerhubungan->tel_bimbit }}</td>
			</tr>
			<tr>
				<td>Alamat Pejabat</td><td>:</td><td colspan="3">{{ $pegawaiPerhubungan->alamat1 }}</td>
			</tr>
			<tr>
				<td></td><td></td><td colspan="3">{{ $pegawaiPerhubungan->alamat2 }}</td>
			</tr>
			<tr>
				<td></td><td></td><td colspan="3">{{ $pegawaiPerhubungan->alamat3 }}</td>
			</tr>
			<tr>
				<td></td><td></td><td colspan="3">{{ $pegawaiPerhubungan->poskod->poskod }}</td>
			</tr>
			<tr>
				<td></td><td></td><td colspan="3">{{ $pegawaiPerhubungan->poskod->bandar }}</td>
			</tr>
			<tr>
				<td></td><td></td><td colspan="3">{{ $pegawaiPerhubungan->poskod->negeri->nama }}</td>
			</tr>
		</table>
	</fieldset>
	<br />
	<fieldset>
		<legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
        	<i class="icon-car mr-2"></i>
            <strong>JUSTIFIKASI KEPERLUAN</strong>
            <a class="float-right text-default" data-toggle="collapse" data-target="#model">
            	<i class="icon-circle-down2"></i>
            </a>
        </legend>
		
		<?php
			if ($kjbPesanan->maklumat_bahagian == "1"){
				$bahagian = "Bahagian sedia ada";
			}
			else{
				$bahagian = "Bahagian baru";
			}
		
			if ($kjbPesanan->maklumat_peruntukan == "1"){
				$peruntukan = "Ya";
			}
			else{
				$peruntukan = "Tidak";
			}
		?>
		
		<table width="100%">
			<tr>
				<td width="20%">Status Bahagian</td><td width="5%">:</td><td colspan="3">{{ $bahagian }}</td>
			</tr>
			<tr>
				<td>Keterangan</td><td>:</td><td colspan="3">{{ $kjbPesanan->keterangan }}</td>
			</tr>
			<tr>
				<td colspan="6"><u>Waran Perjawatan</u></td>
			</tr>
			<tr>
				<td>No. Rujukan</td><td>:</td><td colspan="3">{{ $kjbPesanan->rujukan_waran }}</td>
			</tr>
			<tr>
				<td>Bil. Perjawatan</td><td>:</td><td colspan="3">{{ $kjbPesanan->bil_jawatan }}</td>
			</tr>
			<tr>
				<td>Bil. Pemandu</td><td>:</td><td colspan="3">{{ $kjbPesanan->bil_pemandu }}</td>
			</tr>
			<tr>
				<td colspan="6">Justifikasi sedia ada</td>
			</tr>
			<tr>
				<td colspan="6">
					<table border="1">
						<tr>
							<th>Jenis Kenderaan</th>
							<th>Model</th>
							<th>Bilangan</th>
							<th>Kegunaan</th>
						</tr>
						@forelse ($kjbJustifikasi as $i=>$item)
                        <tr>
                        	<td>
								{{ $item->kjbKenderaan->kenderaan }}
							</td>
                            <td>
								{{ $item->model }}
							</td>
                            <td>
								{{ $item->bilangan }}
							</td>
                            <td style="white-space: pre-wrap;">
								{{ $item->kegunaan }}
							</td>
                        </tr>
                        @empty
                        <tr id="listnothing">
                        	<td colspan='5' align='center'><b>- Tiada -</b></td>
                        </tr>
                        @endforelse
					</table>
				</td>
			</tr>
			<tr>
				<td>Peruntukan mencukupi</td><td>:</td><td colspan="3">{{ $peruntukan }}</td>
			</tr>
		</table>
	</fieldset>
	<br />
	<fieldset>
		<legend class="font-weight-semibold text-uppercase font-size-sm text-info-700">
        	<i class="icon-car mr-2"></i>
            <strong>KELULUSAN JABATAN</strong>
            <a class="float-right text-default" data-toggle="collapse" data-target="#model">
            	<i class="icon-circle-down2"></i>
            </a>
        </legend>
		
		<table width="100%">
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5"></td>
			</tr>
			<tr>
				<td colspan="5">.........................................................</td>
			</tr>
			<tr>
				<td>Tandatangan</td>
			</tr>
			<?php 
				if (empty($penggunaSistem)) {
					$name = "";
					$jawatan = "";
					$gred = "";
					$tarikh_kelulusan = "";
				}
				else {
					$name = $penggunaSistem->user->name;
					$jawatan = $penggunaSistem->jawatan;
					$gred = $penggunaSistem->gred;
					$tarikh_kelulusan = date("d-m-Y", strtotime($kjbPesanan->tarikh_kelulusan));
				}
			?>
			<tr>
				<td width="15%">Nama</td><td width="5%">:</td><td width="40%">{{ $name }}</td>
				<td width="15%">Cop Jabatan</td><td></td>
			</tr>
			<tr>
				<td width="15%">Jawatan</td><td width="5%">:</td><td colspan="2">{{ $jawatan }}</td>
			</tr>
			<tr>
				<td width="15%">Gred</td><td width="5%">:</td><td colspan="2">{{ $gred }}</td>
			</tr>
			<tr>
				<td width="15%">Tarikh</td><td width="5%">:</td><td colspan="2">{{ $tarikh_kelulusan }}</td>
			</tr>
			<tr>
				<td colspan="5" align="center"><strong>&nbsp;</strong></td>
			</tr>
			<tr>
				<td colspan="5" align="center"><strong>"CETAKAN KOMPUTER TANDATANGAN TIDAK DIPERLUKAN"</strong></td>
			</tr>
		</table>
	</fieldset>
</body>
</html>