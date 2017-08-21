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
$bulan_ini = (ucfirst($bulan[date_format($created_date,'m')])).' '.date_format($created_date,'Y'); 
$tanggal_expire = date_format($expire,'d').' '.(ucfirst($bulan[date_format($expire,'m')])).' '.date_format($expire,'Y'); 
$this->pageTitle="IMTA - ". $model->Company->name . " an. ". $model->name;	
?>

<style type="text/css">
	table {
		border-collapse: collapse;
		width: 100%;
	}

	.table, th, td {
		border: 1px solid black;
		height: 25px;
		padding: 10px;
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
	<div class="judul"><U>TANDA TERIMA IMTA</U></div>
	<H3><center>Bulan <?php echo $bulan_ini; ?></center></H3>
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
					<td width="50%"><B>Nama Perusahaan</B></td>
					<td width="50%"><?php echo $model->Company->name; ?></td>
				</tr>

				<tr>
					<td width="50%"><B>Kontak</B></td>
					<td width="50%"><?php echo $model->Company->phone; ?></td>
				</tr>

				<tr>
					<td width="50%"><B>Email</B></td>
					<td width="50%"><?php echo $model->Company->email; ?></td>
				</tr>				

				<tr>
					<td width="50%"><B>Tanggal Registrasi IMTA</B></td>
					<td width="50%"><?php echo $tanggal_buat; ?></td>
				</tr>

				<tr>
					<td width="50%"><B>Tanggal Berakhir KITAS</B></td>
					<td width="50%"><B><?php echo $tanggal_expire; ?> </B></td>
				</tr>
			</table>

		</div>
		<div class="kanan" style="text-align:right">

			<?php 
			$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
				'data' => YII::app()->baseUrl.'/wnaimtareceipt/print/id/'.$model->id_wna_imta_receipt,
				'filename' => "wna-receipt-".$model->id_wna_imta_receipt.".png",
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
								<td width="20%"><B>No. BAP</B></td>
								<td width="20%"><B>Tanggal</B></td>
								<td width="5%"><B>Banyaknya</B></td>
								<td width="20%"><center><B>Ttd Disnaker</B></center></td>
								<td width="20%"><center><B>TTD BPMP</B></center></td>
							</tr>

							<tr>
								<td width="2%"><center>1.</center></td>
								<td width="20%"><center><B><?php echo $model->no_bap; ?></B></center></td>
								<td width="20%"></td>
								<td width="5%"><center><B>1</B></center></td>
								<td width="20%"></td>
								<td width="20%"></td>
							</tr>

						</table>
					</div>
				</p>


			</div>
		</div>
