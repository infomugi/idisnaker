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

$created_date = date_create($model->created_date);
$expire = date_create($model->date_expired);
$tanggal_buat = date_format($created_date,'d').' '.(ucfirst($bulan[date_format($created_date,'m')])).' '.date_format($created_date,'Y'); 
$tanggal_expire = date_format($expire,'d').' '.(ucfirst($bulan[date_format($expire,'m')])).' '.date_format($expire,'Y'); 
$this->pageTitle="IMTA - ". $model->Company->name . " an ". $model->name;	
?>

<style type="text/css">
	table {
		border-collapse: collapse;
		width: 100%;
	}

	.table, th, td {
		border: 1px solid black;
		height: 10px;
		padding: 5px;
	}
	.isi, .jadwal {
		width: 100%;
		float: right;
		font-size: 13px;
	}
	body{font-family: tahoma;}
	.kanan{
		text-align:right;
	}
</style>

<div class="kotak">
	<div class="line3"></div>
	<div class="line2"></div>
	<div class="judul"><U>PERSYARATAN IJIN MEMPERPANJANG TENAGA KERJA ASING</U></div>
	<BR>
	</div>

	<div class="kotak">
		<div class="kiri">

			<table>
				<tr>
					<td width="50%"><B>No. BAP / Nama TKA</B></td>
					<td width="50%"><B><?php echo $model->no_bap; ?> / <?php echo $model->name; ?></B></td>
				</tr>

				<tr>
					<td width="50%"><B>Perusahaan</B></td>
					<td width="50%"><?php echo $model->Company->name; ?></td>
				</tr>

				<tr>
					<td width="50%"><B>Tanggal Masuk</B></td>
					<td width="50%"><?php echo $tanggal_buat; ?></td>
				</tr>

				<tr>
					<td width="50%"><B>Tanggal Berakhir</B></td>
					<td width="50%"><B><?php echo $tanggal_expire; ?> </B></td>
				</tr>
			</table>

		</div>
		<div class="kanan" style="text-align:right">

			<?php 
			$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
				// 'data' => YII::app()->baseUrl.'/wnaimtareceipt/print/id/'.$model->id_wna_imta_receipt,
				'data' => "SMSTO:+".$model->contact_mobile.":".$model->contact_name." untuk ".$model->Company->name." diharapkan Perwakilan Perusahaan menghadap Bpk. H. Muslih di DISNAKER Perihal Verifikasi BPJS",
				'filename' => "wna-receipt-".$model->id_wna_imta_receipt."-call.png",
				'subfolderVar' => false,
				'matrixPointSize' => 5,
				'displayImage'=>true, // default to true, if set to false display a URL path
				'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
				'matrixPointSize'=>2, // 1 to 10 only
				)) 
				?>

				<?php 
				$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
				// 'data' => YII::app()->baseUrl.'/wnaimtareceipt/print/id/'.$model->id_wna_imta_receipt,
					'data' => "SMSTO:+".$model->contact_mobile.":".$model->contact_name." Status Berkas IMTA (No. BAP ".$model->no_bap.") ".$model->Company->name."an. ".$model->name.":",
					'filename' => "wna-receipt-".$model->id_wna_imta_receipt."-status.png",
					'subfolderVar' => false,
					'matrixPointSize' => 5,
				'displayImage'=>true, // default to true, if set to false display a URL path
				'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
				'matrixPointSize'=>3, // 1 to 10 only
				)) 
				?>

			</div>
		</div>

		<div class="kotak" style="text-align:left;font-size:18px;line-height:20px;">
			<div class="isi">
				<p>
					<div class="jadwal">
						<table>
							<tr>
								<td width="2%"><B>No</B></td>
								<td width="50%"><B>Kelengkapan Administrasi</B></td>
								<td width="28%"><center><B>Ada</B></center></td>
								<td width="28%"><center><B>Keterangan</B></center></td>
							</tr>

							<tr>
								<td width="2%">1.</td>
								<td width="50%">Surat Permohonan dari Pemohon dan Fotocopy KTP Pemohon</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_request); ?>"/></center></td>
								<td width="28%"></td>
							</tr>	

							<tr>
								<td width="2%">2.</td>
								<td width="50%">Daftar isian Perpanjangan Izin mempekerjakan Tenaga Kerja Asing (IMTA)</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_stuffing_imta); ?>"/></center></td>
								<td width="28%"></td>
							</tr>			


							<tr>
								<td width="2%">3.</td>
								<td width="50%">Fotocopy Izin mempekerjakan Tenaga Kerja Asing (IMTA) yang masih berlaku dan bukti pembayaran Dana Kompensasi terakhir.</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_imta); ?>"/></center></td>
								<td width="28%"></td>
							</tr>


							<tr>
								<td width="2%">4.</td>
								<td width="50%">Fotocopy Rencana Penggunaan Tenaga Kerja Asing (RPTKA) yang masih berlaku</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_rpkta); ?>"/></center></td>
								<td width="28%"></td>
							</tr>

							<tr>
								<td width="2%">5.</td>
								<td width="50%">Fotocopy Passport yang masih berlaku</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_passport); ?>"/></center></td>
								<td width="28%"></td>
							</tr>


							<tr>
								<td width="2%">6.</td>
								<td width="50%">Fotocopy Kitas yang masih berlaku </td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_kitas); ?>"/></center></td>
								<td width="28%"></td>
							</tr>

							<tr>
								<td width="2%">7.</td>
								<td width="50%">Fotocopy Lapor Keberadaan TKA</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_tka_existence); ?>"/></center></td>
								<td width="28%"></td>
							</tr>		

							<!-- AAAAAAAAAAAAA  --> 

							<tr>
								<td width="2%">8.</td>
								<td width="50%">Fotocopy Surat Ijin usaha dari Instansi yang berwenang.</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_permission); ?>"/></center></td>
								<td width="28%"></td>
							</tr>	

							<tr>
								<td width="2%">9.</td>
								<td width="50%">Fotocopy Akta pendirian dan perubahan terakhir sebagai badan hukum yang sudah disyahkan oleh pejabat yang berwenang </td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_akta); ?>"/></center></td>
								<td width="28%"></td>
							</tr>			


							<tr>
								<td width="2%">10.</td>
								<td width="50%">Fotocopy NPWP Perusahaan</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_npwp); ?>"/></center></td>
								<td width="28%"></td>
							</tr>


							<tr>
								<td width="2%">11.</td>
								<td width="50%">Fotocopy UU Nomor  : 7 Tahun 1981 Tentang Wajib Lapor Ketenagakerjaan yang  berlaku.</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_employment); ?>"/></center></td>
								<td width="28%"></td>
							</tr>

							<tr>
								<td width="2%">12.</td>
								<td width="50%">Surat penunjukan TKI sebagai pendamping TKA yang dipekerjakan</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_appointment_tki); ?>"/></center></td>
								<td width="28%"></td>
							</tr>


							<tr>
								<td width="2%">13.</td>
								<td width="50%">Laporan Realisasi Pelaksanaan Diklat TKI</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_realization_of_training); ?>"/></center></td>
								<td width="28%"></td>
							</tr>

							<tr>
								<td width="2%">14.</td>
								<td width="50%">Struktur Organisasi Perusahaan</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_organizational_structure); ?>"/></center></td>
								<td width="28%"></td>
							</tr>	

							<tr>
								<td width="2%">15.</td>
								<td width="50%">Ijin Domisili Perusahaan </td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_permit_domicile); ?>"/></center></td>
								<td width="28%"></td>
							</tr>	



							<tr>
								<td width="2%">16.</td>
								<td width="50%">Photo Copy Polis Asuransi TKA</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_insurance_tka); ?>"/></center></td>
								<td width="28%"></td>
							</tr>

							<tr>
								<td width="2%">17.</td>
								<td width="50%">Pas Photo TKA  berwarna 3x4 ( 4 lembar)</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_foto); ?>"/></center></td>
								<td width="28%"></td>
							</tr>	

							<tr>
								<td width="2%">18.</td>
								<td width="50%">BPJS Kesehatan & BPJS Ketenagakerjaan (Billing Statements)</td>
								<td width="28%"><center><img src="<?php echo WnaImtaReceipt::model()->status($model->letter_bpjs); ?>"/></center></td>
								<td width="28%"></td>
							</tr>	

						</table>
					</div>
				</p>


			</div>
		</div>

		<div class="kotak">
			<div class="kiri">

			</div>
			<div class="kanan" style="font-size:18px;line-height:20px;text-align: left;">


			</div>
		</div>

