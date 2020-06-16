<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Borang AOD</title>
	<style>
		td {
			font-size: 12px;
			vertical-align: text-top;
		}
		
		.title {
			font-size: 12px;
		}
		
		.notes {
			font-size: 10px;
		}
		
		.page-break {
    		page-break-after: always;
		}
	</style>
</head>

<body>
	
	<!-- Kronologi permohonan -->
    @include('function/number_to_word')
    <!-- /Kronologi permohonan -->
	
	<div align="center">
		<strong>AKAUN MAKLUMAT PENGHANTARAN</strong>
	</div>
	<div align="center">
		<strong>JADUAL</strong>
	</div>
	<div class="notes" align="right">
		<strong>salinan wakil kerajaan</strong>
	</div>
	<div align="center">
		<strong>BUTIR-BUTIR PAJAKAN</strong>
	</div>
	<table width="100%">
		<tr>
			<td>No. Pajakan</td>
			<td>{{$konsesiPajakan->no_pajakan}}</td>
			<td>No. Pesanan Kenderaan Kerajaan</td>
			<td>{{$kjbPesanan->no_pesanan}}</td>
			<td>Tarikh Pesanan Kenderaan Kerajaan</td>
			<td>{{date("d-m-Y", strtotime($kjbPesanan->tarikh_permohonan))}}</td>
		</tr>
	</table>
	<div class="title">
		<strong>Butir-butir Pengguna yang Layak</strong>
	</div>
	<table width="100%">
		<tr>
			<td>Cawangan</td>
			<td>{{$kjbPesanan->cawangan}}</td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>{{$jabatan->nama}}</td>
		</tr>
		<tr>
			<td>Kementerian</td>
			<td>{{$jabatan->kementerian->nama}}</td>
		</tr>
	</table>
	<div class="title">
		<strong>Ringkasan syarat-syarat pajakan</strong>
	</div>
	<table width="100%">
		<tr>
			<td>Tarikh Bermula Pajakan</td>
			<td>{{date("d-m-Y", strtotime($konsesiPajakan->tarikh_mula_pajakan))}}</td>
			<td>Tempoh Pajakan</td>
			<td>5 Tahun</td>
			<td>Tarikh Luput Pajakan</td>
			<td>{{date("d-m-Y", strtotime($konsesiPajakan->tarikh_akhir_pajakan))}}</td>
		</tr>
	</table>
	<?php
	/*$a = new \NumberFormatter("ms-MY", \NumberFormatter::CURRENCY); 
	$sewa = $a->formatCurrency($konsesiPajakan->sewa_bulanan, "MYR");*/
	/*$sewa = $konsesiPajakan->sewa_bulanan;
	$f = new NumberFormatter("ms", NumberFormatter::SPELLOUT);*/
	$sewa=ucwords(number_2_words($konsesiPajakan->sewa_bulanan,'matawang'));
	$tahun1_kos = ucwords(number_2_words($konsesiPajakan->tahun1_kos,'matawang'));
	?>
	<table width="100%">
		<tr>
			<td width="30%">Sewa Bulanan (RM)</td>
			<td width="6.5%">&nbsp;</td>
			<td>{{$sewa." (RM ".$konsesiPajakan->sewa_bulanan.")"}}</td>
		</tr>
		<tr>
			<td>Bayaran Pembaikan dan Penyenggaraan untuk 12 bulan pertama (RM)</td>
			<td>&nbsp;</td>
			<td>{{$tahun1_kos." (RM ".$konsesiPajakan->tahun1_kos.")"}}</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td width="25%"><strong>Nota Tambahan dan/atau Peruntukan Tambahan</strong></td>
			<td>Bayaran Pembaikan dan Penyenggaraan untuk bulan ketiga belas (13) Pajakan dan Seterusnya adalah seperti berikut:</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<table width="100%">
					<tr>
						<td><u>Dari Tarikh</u></td>
						<td><u>Hingga Tarikh</u></td>
						<td><u>RM</u></td>
					</tr>
					<tr>
						<td>{{$konsesiPajakan->tahun2_mula}}</td>
						<td>{{$konsesiPajakan->tahun2_akhir}}</td>
						<td>{{$konsesiPajakan->tahun2_kos}}</td>
					</tr>
					<tr>
						<td>{{$konsesiPajakan->tahun3_mula}}</td>
						<td>{{$konsesiPajakan->tahun3_akhir}}</td>
						<td>{{$konsesiPajakan->tahun3_kos}}</td>
					</tr>
					<tr>
						<td>{{$konsesiPajakan->tahun4_mula}}</td>
						<td>{{$konsesiPajakan->tahun4_akhir}}</td>
						<td>{{$konsesiPajakan->tahun4_kos}}</td>
					</tr>
					<tr>
						<td>{{$konsesiPajakan->tahun5_mula}}</td>
						<td>{{$konsesiPajakan->tahun5_akhir}}</td>
						<td>{{$konsesiPajakan->tahun5_kos}}</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td width="50%" style="font-size: 16px;"><strong>MAKLUMAT PENGHANTARAN</strong></td>
			<td width="10%"><strong>TEMPAT</strong></td>
			<td>{{$penerimaan->tempat_penghantaran}}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>Dihantar oleh</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td width="25%">Tandatangan Penerima</td>
			<td width="25%" align="center">COP JABATAN</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td align="center">(untuk Dan Bagi Syarikat Konsesi)</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td width="10%">Nama</td>
			<td width="25%" colspan="3">{{strtoupper($kjbPesanan->penerima_nama)}}</td>
			<td width="10%">Nama</td>
			<td width="25%" colspan="3">{{strtoupper($pegKonsesihantar->nama)}}</td>
		</tr>
		<tr>
			<td>Jawatan</td>
			<td colspan="3">{{strtoupper($penerimaan->penerima_jawatan)}}</td>
			<td>Jawatan</td>
			<td colspan="3">{{strtoupper($pegKonsesihantar->jaw)}}</td>
		</tr>
		<?php
			if ($penerimaan->penerima_tarikh == NULL)
			{
				$trk_terima = "";
			}
			else
			{
				$trk_terima = date("d-m-Y", strtotime($penerimaan->penerima_tarikh));
			}
		
			if ($penerimaan->penghantar_tarikh == NULL)
			{
				$trk_hantar = "";
			}
			else
			{
				$trk_hantar = date("d-m-Y", strtotime($penerimaan->penghantar_tarikh));
			}
		?>
		<tr>
			<td>No. KP</td>
			<td>{{strtoupper($kjbPesanan->penerima_nokp)}}</td>
			<td>Tarikh</td>
			<td>{{$trk_terima}}</td>
			<td>No. KP</td>
			<td>{{strtoupper($pegKonsesihantar->nokp)}}</td>
			<td>Tarikh</td>
			<td>{{$trk_hantar}}</td>
		</tr>
		<tr>
			<td colspan="4">Saksi</td>
			<td colspan="4">Saksi</td>
		</tr>
		<tr>
			<td width="10%">Nama</td>
			<td width="25%" colspan="3">{{strtoupper($penerimaan->saksi_terima_nama)}}</td>
			<td width="10%">Nama</td>
			<td width="25%" colspan="3">{{strtoupper($pegKonsesisaksi->nama)}}</td>
		</tr>
		<tr>
			<td>Jawatan</td>
			<td colspan="3">{{strtoupper($penerimaan->saksi_terima_jawatan)}}</td>
			<td>Jawatan</td>
			<td colspan="3">{{strtoupper($pegKonsesisaksi->jaw)}}</td>
		</tr>
		<?php
			if ($penerimaan->saksi_terima_tarikh == NULL)
			{
				$trk_saksi_terima = "";
			}
			else
			{
				$trk_saksi_terima = date("d-m-Y", strtotime($penerimaan->saksi_terima_tarikh));
			}
		
			if ($penerimaan->saksi_hantar_tarikh == NULL)
			{
				$trk_saksi_hantar = "";
			}
			else
			{
				$trk_saksi_hantar = date("d-m-Y", strtotime($penerimaan->saksi_hantar_tarikh));
			}
		?>
		<tr>
			<td>No. KP</td>
			<td>{{strtoupper($penerimaan->saksi_terima_nokp)}}</td>
			<td>Tarikh</td>
			<td>{{$trk_saksi_terima}}</td>
			<td>No. KP</td>
			<td>{{strtoupper($pegKonsesisaksi->nokp)}}</td>
			<td>Tarikh</td>
			<td>{{$trk_saksi_hantar}}</td>
		</tr>
		<tr>
			<td colspan="8" align="justify">
				Pihak Kerajaan dengan ini mengesahkan dan mengakui bahawa kenderaan tersebut (butir-butirnya dibentangkan didalam jadual) telah dihantar oleh pihak Syarikat Konsesi dan diterima oleh pegawai yang namanya tersebut di atas bagi pihak Kerajaan dan bersesuaian dengan syarat-syarat yang terdapat dalam Perjanjian Konsesi
			</td>
		</tr>
		<tr>
			<td colspan="8">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td colspan="8">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td colspan="8">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td colspan="2">
				Ditandatangani oleh wakil kerajaan
			</td>
			<td colspan="2">
				Cop Jabatan
			</td>
			<td>Nama</td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;
				
			</td>
			<td colspan="2">&nbsp;
				
			</td>
			<td>Jawatan</td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;
				
			</td>
			<td colspan="2">&nbsp;
				
			</td>
			<td>No. KP</td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;
				
			</td>
			<td colspan="2">&nbsp;
				
			</td>
			<td>Tarikh</td>
			<td colspan="3">&nbsp;</td>
		</tr>
	</table>
	<br />
	<div class="notes" align="center">
		<strong>BUTIR-BUTIR KENDERAAN KONSESI</strong>
	</div>
	<table width="100%">
		<tr>
			<td class="notes">&nbsp;</td>
			<td class="notes"><strong>No. Fleet Kenderaan</strong></td>
			<td colspan="4" class="notes"><strong>{{ $konsesiPajakan->no_pajakan }}</strong></td>
		</tr>
		<tr>
			<td class="notes">Buatan</td>
			<td class="notes">{{ $keretaVariasi->keretaModel->keretaBuatan->buatan }}</td>
			<td class="notes">Model</td>
			<td class="notes">{{ $keretaVariasi->keretaModel->model }}</td>
			<td class="notes">Kuasa Enjin (cc)</td>
			<td class="notes">{{$konsesiKereta->kuasa_enjin}}</td>
		</tr>
		<tr>
			<td class="notes">Cat</td>
			<td class="notes">{{ $keretaVariasi->keretaCat->cat }}</td>
			<td class="notes">Warna</td>
			<td class="notes">{{ $keretaVariasi->keretaWarna->warna }}</td>
			<td class="notes">No. Enjin (cc)</td>
			<td class="notes">{{ $konsesiKereta->no_enjin }}</td>
		</tr>
		<tr>
			<td class="notes">Bahan Bakar</td>
			<td class="notes">{{ $bahanbakar->fuel }}</td>
			<td class="notes">Tahun Dibuat</td>
			<td class="notes">{{ $konsesiKereta->tahun_buatan }}</td>
			<td class="notes">Tarikh Pendaftaran</td>
			<td class="notes">{{ date("d-m-Y", strtotime($konsesiKereta->trk_daftar)) }}</td>
		</tr>
		<tr>
			<td class="notes">No. Chasis</td>
			<td class="notes">{{ $konsesiKereta->no_chasis }}</td>
			<td class="notes">No. Pendaftaran</td>
			<td class="notes">{{ $konsesiKereta->no_pendaftaran }}</td>
			<td class="notes">Transmisi</td>
			<td class="notes">{{ $keretaVariasi->keretaTransmisi->transmisi }}</td>
		</tr>
	</table>
	
	<div class="page-break"></div>
	<div align="center">
		<strong>AKAUN MAKLUMAT PENGHANTARAN</strong>
	</div>
	<div align="center">
		<strong>JADUAL</strong>
	</div>
	<div class="notes" align="right">
		<strong>salinan perbendaharaan</strong>
	</div>
	<div align="center">
		<strong>BUTIR-BUTIR PAJAKAN</strong>
	</div>
	<table width="100%">
		<tr>
			<td>No. Pajakan</td>
			<td>{{$konsesiPajakan->no_pajakan}}</td>
			<td>No. Pesanan Kenderaan Kerajaan</td>
			<td>{{$kjbPesanan->no_pesanan}}</td>
			<td>Tarikh Pesanan Kenderaan Kerajaan</td>
			<td>{{date("d-m-Y", strtotime($kjbPesanan->tarikh_permohonan))}}</td>
		</tr>
	</table>
	<div class="title">
		<strong>Butir-butir Pengguna yang Layak</strong>
	</div>
	<table width="100%">
		<tr>
			<td>Cawangan</td>
			<td>{{$kjbPesanan->cawangan}}</td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>{{$jabatan->nama}}</td>
		</tr>
		<tr>
			<td>Kementerian</td>
			<td>{{$jabatan->kementerian->nama}}</td>
		</tr>
	</table>
	<div class="title">
		<strong>Ringkasan syarat-syarat pajakan</strong>
	</div>
	<table width="100%">
		<tr>
			<td>Tarikh Bermula Pajakan</td>
			<td>{{date("d-m-Y", strtotime($konsesiPajakan->tarikh_mula_pajakan))}}</td>
			<td>Tempoh Pajakan</td>
			<td>5 Tahun</td>
			<td>Tarikh Luput Pajakan</td>
			<td>{{date("d-m-Y", strtotime($konsesiPajakan->tarikh_akhir_pajakan))}}</td>
		</tr>
	</table>
	<?php
	/*$a = new \NumberFormatter("ms-MY", \NumberFormatter::CURRENCY); 
	$sewa = $a->formatCurrency($konsesiPajakan->sewa_bulanan, "MYR");*/
	//$sewa = $konsesiPajakan->sewa_bulanan;
	//$f = new NumberFormatter("ms", NumberFormatter::SPELLOUT);
	$sewa=ucwords(number_2_words($konsesiPajakan->sewa_bulanan,'matawang'));
	$tahun1_kos = ucwords(number_2_words($konsesiPajakan->tahun1_kos,'matawang'));
	?>
	<table width="100%">
		<tr>
			<td width="30%">Sewa Bulanan (RM)</td>
			<td width="6.5%">&nbsp;</td>
			<td>{{$sewa." (RM ".$konsesiPajakan->sewa_bulanan.")"}}</td>
		</tr>
		<tr>
			<td>Bayaran Pembaikan dan Penyenggaraan untuk 12 bulan pertama (RM)</td>
			<td>&nbsp;</td>
			<td>{{$tahun1_kos." (RM ".$konsesiPajakan->tahun1_kos.")"}}</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td width="25%"><strong>Nota Tambahan dan/atau Peruntukan Tambahan</strong></td>
			<td>Bayaran Pembaikan dan Penyenggaraan untuk bulan ketiga belas (13) Pajakan dan Seterusnya adalah seperti berikut:</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<table width="100%">
					<tr>
						<td><u>Dari Tarikh</u></td>
						<td><u>Hingga Tarikh</u></td>
						<td><u>RM</u></td>
					</tr>
					<tr>
						<td>{{$konsesiPajakan->tahun2_mula}}</td>
						<td>{{$konsesiPajakan->tahun2_akhir}}</td>
						<td>{{$konsesiPajakan->tahun2_kos}}</td>
					</tr>
					<tr>
						<td>{{$konsesiPajakan->tahun3_mula}}</td>
						<td>{{$konsesiPajakan->tahun3_akhir}}</td>
						<td>{{$konsesiPajakan->tahun3_kos}}</td>
					</tr>
					<tr>
						<td>{{$konsesiPajakan->tahun4_mula}}</td>
						<td>{{$konsesiPajakan->tahun4_akhir}}</td>
						<td>{{$konsesiPajakan->tahun4_kos}}</td>
					</tr>
					<tr>
						<td>{{$konsesiPajakan->tahun5_mula}}</td>
						<td>{{$konsesiPajakan->tahun5_akhir}}</td>
						<td>{{$konsesiPajakan->tahun5_kos}}</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td width="50%" style="font-size: 16px;"><strong>MAKLUMAT PENGHANTARAN</strong></td>
			<td width="10%"><strong>TEMPAT</strong></td>
			<td>{{$penerimaan->tempat_penghantaran}}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>Dihantar oleh</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td width="25%">Tandatangan Penerima</td>
			<td width="25%" align="center">COP JABATAN</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td align="center">(untuk Dan Bagi Syarikat Konsesi)</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td width="10%">Nama</td>
			<td width="25%" colspan="3">{{strtoupper($kjbPesanan->penerima_nama)}}</td>
			<td width="10%">Nama</td>
			<td width="25%" colspan="3">{{strtoupper($pegKonsesihantar->nama)}}</td>
		</tr>
		<tr>
			<td>Jawatan</td>
			<td colspan="3">{{strtoupper($penerimaan->penerima_jawatan)}}</td>
			<td>Jawatan</td>
			<td colspan="3">{{strtoupper($pegKonsesihantar->jaw)}}</td>
		</tr>
		<?php
			if ($penerimaan->penerima_tarikh == NULL)
			{
				$trk_terima = "";
			}
			else
			{
				$trk_terima = date("d-m-Y", strtotime($penerimaan->penerima_tarikh));
			}
		
			if ($penerimaan->penghantar_tarikh == NULL)
			{
				$trk_hantar = "";
			}
			else
			{
				$trk_hantar = date("d-m-Y", strtotime($penerimaan->penghantar_tarikh));
			}
		?>
		<tr>
			<td>No. KP</td>
			<td>{{strtoupper($kjbPesanan->penerima_nokp)}}</td>
			<td>Tarikh</td>
			<td>{{$trk_terima}}</td>
			<td>No. KP</td>
			<td>{{strtoupper($pegKonsesihantar->nokp)}}</td>
			<td>Tarikh</td>
			<td>{{$trk_hantar}}</td>
		</tr>
		<tr>
			<td colspan="4">Saksi</td>
			<td colspan="4">Saksi</td>
		</tr>
		<tr>
			<td width="10%">Nama</td>
			<td width="25%" colspan="3">{{strtoupper($penerimaan->saksi_terima_nama)}}</td>
			<td width="10%">Nama</td>
			<td width="25%" colspan="3">{{strtoupper($pegKonsesisaksi->nama)}}</td>
		</tr>
		<tr>
			<td>Jawatan</td>
			<td colspan="3">{{strtoupper($penerimaan->saksi_terima_jawatan)}}</td>
			<td>Jawatan</td>
			<td colspan="3">{{strtoupper($pegKonsesisaksi->jaw)}}</td>
		</tr>
		<?php
			if ($penerimaan->saksi_terima_tarikh == NULL)
			{
				$trk_saksi_terima = "";
			}
			else
			{
				$$trk_saksi_terima = date("d-m-Y", strtotime($penerimaan->saksi_terima_tarikh));
			}
		
			if ($penerimaan->saksi_hantar_tarikh == NULL)
			{
				$trk_saksi_hantar = "";
			}
			else
			{
				$trk_saksi_hantar = date("d-m-Y", strtotime($penerimaan->saksi_hantar_tarikh));
			}
		?>
		<tr>
			<td>No. KP</td>
			<td>{{strtoupper($kjbPesanan->saksi_terima_nokp)}}</td>
			<td>Tarikh</td>
			<td>{{$trk_saksi_terima}}</td>
			<td>No. KP</td>
			<td>{{strtoupper($pegKonsesisaksi->nokp)}}</td>
			<td>Tarikh</td>
			<td>{{$trk_saksi_hantar}}</td>
		</tr>
		<tr>
			<td colspan="8" align="justify">
				Pihak Kerajaan dengan ini mengesahkan dan mengakui bahawa kenderaan tersebut (butir-butirnya dibentangkan didalam jadual) telah dihantar oleh pihak Syarikat Konsesi dan diterima oleh pegawai yang namanya tersebut di atas bagi pihak Kerajaan dan bersesuaian dengan syarat-syarat yang terdapat dalam Perjanjian Konsesi
			</td>
		</tr>
		<tr>
			<td colspan="8">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td colspan="8">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td colspan="8">&nbsp;
				
			</td>
		</tr>
		<tr>
			<td colspan="2">
				Ditandatangani oleh wakil kerajaan
			</td>
			<td colspan="2">
				Cop Jabatan
			</td>
			<td>Nama</td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;
				
			</td>
			<td colspan="2">&nbsp;
				
			</td>
			<td>Jawatan</td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;
				
			</td>
			<td colspan="2">&nbsp;
				
			</td>
			<td>No. KP</td>
			<td colspan="3">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;
				
			</td>
			<td colspan="2">&nbsp;
				
			</td>
			<td>Tarikh</td>
			<td colspan="3">&nbsp;</td>
		</tr>
	</table>
	<br />
	<div class="notes" align="center">
		<strong>BUTIR-BUTIR KENDERAAN KONSESI</strong>
	</div>
	<table width="100%">
		<tr>
			<td class="notes">&nbsp;</td>
			<td class="notes"><strong>No. Fleet Kenderaan</strong></td>
			<td colspan="4" class="notes"><strong>{{ $konsesiPajakan->no_pajakan }}</strong></td>
		</tr>
		<tr>
			<td class="notes">Buatan</td>
			<td class="notes">{{ $keretaVariasi->keretaModel->keretaBuatan->buatan }}</td>
			<td class="notes">Model</td>
			<td class="notes">{{ $keretaVariasi->keretaModel->model }}</td>
			<td class="notes">Kuasa Enjin (cc)</td>
			<td class="notes">{{$konsesiKereta->kuasa_enjin}}</td>
		</tr>
		<tr>
			<td class="notes">Cat</td>
			<td class="notes">{{ $keretaVariasi->keretaCat->cat }}</td>
			<td class="notes">Warna</td>
			<td class="notes">{{ $keretaVariasi->keretaWarna->warna }}</td>
			<td class="notes">No. Enjin (cc)</td>
			<td class="notes">{{ $konsesiKereta->no_enjin }}</td>
		</tr>
		<tr>
			<td class="notes">Bahan Bakar</td>
			<td class="notes">{{ $bahanbakar->fuel }}</td>
			<td class="notes">Tahun Dibuat</td>
			<td class="notes">{{ $konsesiKereta->tahun_buatan }}</td>
			<td class="notes">Tarikh Pendaftaran</td>
			<td class="notes">{{ date("d-m-Y", strtotime($konsesiKereta->trk_daftar)) }}</td>
		</tr>
		<tr>
			<td class="notes">No. Chasis</td>
			<td class="notes">{{ $konsesiKereta->no_chasis }}</td>
			<td class="notes">No. Pendaftaran</td>
			<td class="notes">{{ $konsesiKereta->no_pendaftaran }}</td>
			<td class="notes">Transmisi</td>
			<td class="notes">{{ $keretaVariasi->keretaTransmisi->transmisi }}</td>
		</tr>
	</table>
</body>
</html>