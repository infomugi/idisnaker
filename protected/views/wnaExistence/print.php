<?php
/* @var $this WnaExistenceController */
/* @var $model WnaExistence */

$this->breadcrumbs=array(
	'Wna Existences'=>array('index'),
	$model->name,
	);

$bulan = array(
	'01' => 'Januari',
	'02' => 'Februari',
	'03' => 'Maret',
	'04' => 'April',
	'05' => 'Mei',
	'06' => 'Juni',
	'07' => 'Juli',
	'08' => 'Agustus',
	'09' => 'September',
	'10' => 'Oktober',
	'11' => 'November',
	'12' => 'Desember',
	);

$expire = date_create($model->expired_date);
$buat = date_create($model->created_date);
$lahir = date_create($model->birth);
$report = date_create($model->date_report);
$tanggal_expire = date_format($expire,'d').' '.(ucfirst($bulan[date_format($expire,'m')])).' '.date_format($expire,'Y'); 
$tanggal_buat = date_format($buat,'d').' '.(ucfirst($bulan[date_format($buat,'m')])).' '.date_format($buat,'Y'); 
$tanggal_lahir = date_format($lahir,'d').' '.(ucfirst($bulan[date_format($lahir,'m')])).' '.date_format($lahir,'Y'); 
$date_report = date_format($report,'d').' '.(ucfirst($bulan[date_format($report,'m')])).' '.date_format($report,'Y'); 
$this->pageTitle=substr($model->no_registration, 0, 3) . ' - PT '.strtoupper(substr($model->Company->name,0,-4)). ' - an '.$model->name;	
?>

<div class="kotak">
	<div class="line3"></div>
	<div class="line2"></div>
	<BR> <BR>
		<div class="judul"><U>SURAT KETERANGAN</U></div>
		<!-- <div class="info">NOMOR : 569/&ensp; &ensp; &ensp; &ensp;-<?php echo substr($model->no_registration, 3); ?></div> -->
		<div class="info">NOMOR : 569/&ensp; &ensp; &ensp; &ensp;-<?php echo "PTK/".date('Y'); ?></div>

	</div>

	<div class="kotak" style="text-align:justify;font-size:18px;line-height:20px;">
		<div class="isi">

			<BR> <BR> <p>
				&ensp;
				&ensp;
				&ensp;
				Berdasarkan Surat dari PT. <?php echo substr($model->Company->name, 0,-4); ?>, Nomor : <?php echo $model->no_report; ?> Tanggal <?php echo $date_report; ?>, Perihal Lapor Keberadaan Tenaga Kerja Warga Negara Asing Pendatang (TKWNAP) dengan ini, Kepala Dinas Tenaga Kerja Kabupaten Bandung menerangkan bahwa:
			</p>
			<p>
				<div class="jadwal">
					<table>
						<tr>
							<td width="28%">N a m a</td>
							<td width="2%">:</td>
							<td width="70%"> <b><?php echo strtoupper($model->name); ?></b></td>
						</tr>
						<tr>
							<td width="28%">Tempat Tgl. Lahir</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->place; ?>, <?php echo $tanggal_lahir; ?></td>
						</tr>
						<tr>
							<td width="28%">Jenis Kelamin</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->gender == 1 ? "Laki-laki" : "Perempuan"; ?></td>
						</tr>	
						<tr>
							<td width="28%">Kewarganegaraan</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->Citizenship->name; ?></td>
						</tr>
						<tr>
							<td width="28%">J a b a t a n</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo strtoupper($model->department); ?></td>
						</tr>
						<tr>
							<td width="28%">Nama/Alamat Perusahaan</td>
							<td width="2%"></td>
							<td width="70%"> PT. <?php echo strtoupper(substr($model->Company->name,0,-4)); ?></td>
						</tr>
						<tr>
							<td width="28%"></td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->Company->address; ?></td>
						</tr>
						<tr>
							<td width="28%">Nomor PASSPORT</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->no_passport; ?></td>
						</tr>
						<tr>
							<td width="28%">Nomor RPTKA</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->no_rptka; ?></td>
						</tr>
						<tr>
							<td width="28%">Nomor IMTA</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->no_imta; ?></td>
						</tr>
						<tr>
							<td width="28%">Nomor KITAS / KITAP</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->no_kitaskitap; ?></td>
						</tr>
						<tr>
							<td width="28%">Alamat Tempat Tinggal</td>
							<td width="2%">:</td>
							<td width="70%"> <?php echo $model->address; ?></td>
						</tr>

					</table>
				</div>
			</p>
			<BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <p>
				&ensp; &ensp; &ensp; Nama tersebut telah terdaftar pada Dinas Tenaga Kerja Kabupaten Bandung dengan Nomor Pendaftaran <?php echo $model->no_registration; ?>. Surat Keterangan ini berlaku sampai dengan tanggal <b><?php echo $tanggal_expire; ?></b>.
			</p>
			&ensp; &ensp; &ensp;Demikian Surat Keterangan ini dibuat agar yang berkepentingan menjadi maklum.																															<p>
		</p>												

	</div>
</div>
<BR>
	<BR>
		<div class="kotak">
			<div class="kiri">
				<BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <b><u>Tembusan</u></b> disampaikan kepada : <br>
					<small>
						1. Yth. Bapak Bupati Bandung <br>
						2. Yth. Bapak Kepala Dinas Tenaga Kerja & Transmigrasi Provinsi Jawa Barat
					</small>
				</div>
				<div class="kanan" style="font-size:18px;line-height:20px;text-align: left;">

					<BR>

						Ditetapkan  di    : Soreang    
						<BR>
							Pada Tanggal	  :  <?php echo $tanggal_buat;?>
							<BR>
								<BR>
									KEPALA DINAS TENAGA KERJA <BR>
									KABUPATEN BANDUNG<BR>
									<BR> <BR> <BR> <BR> <BR> <BR> 
										<b><u>DRS. RUKMANA, MSi.</u></b><BR>
										Pembina Utama Muda<BR>
										NIP. 19650520 199102 1 002
									</div>
								</div>

