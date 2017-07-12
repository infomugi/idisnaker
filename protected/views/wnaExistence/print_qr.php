<?php
/* @var $this WnaExistenceController */
/* @var $model WnaExistence */

$this->breadcrumbs=array(
	'Wna Existences'=>array('index'),
	$model->name,
	);

$this->pageTitle=$model->id_wna_existence . ' - '.$model->Citizenship->name. ' - '.$model->name;	
?>

<div class="kotak">
	<HR>
		<BR>
			<BR>
				
				<div class="judul"><U>SURAT KETERANGAN</U></div>
				<div class="info">NOMOR : 569/.......-PTK/VII/2016</div>
				
			</div>

			<div class="kotak" style="text-align:justify;font-size:18px;line-height:20px;">
				<div class="isi">

					<BR>
						<BR>
							<p>
								Berdasarkan Surat <?php echo $model->Company->name; ?>, Nomor <?php echo $model->no_report; ?> Tanggal <?php echo $model->date_report; ?>, Perihal Lapor Keberadaan Tenaga Kerja Warga Negara Asing Pendatang (TKWNAP) dengan ini, Kepala Dinas Tenaga Kerja Kabupaten Bandung menerangkan bahwa:
							</p>
							<p>
								<div class="jadwal">
									<table>
										<tr>
											<td width="30%">N a m a</td>
											<td width="70%">: <b><?php echo strtoupper($model->name); ?></b></td>
										</tr>
										<tr>
											<td width="30%">Tempat Tgl. Lahir</td>
											<td width="70%">: <?php echo $model->place; ?>, <?php $birth=date_create($model->birth); echo date_format($birth,"d F Y"); ?></td>
										</tr>
										<tr>
											<td width="30%">Jenis Kelamin</td>
											<td width="70%">: <?php echo $model->gender == 1 ? "Laki-laki" : "Perempuan"; ?></td>
										</tr>	
										<tr>
											<td width="30%">Kewarganegaraan</td>
											<td width="70%">: <?php echo $model->Citizenship->name; ?></td>
										</tr>
										<tr>
											<td width="30%">J a b a t a n</td>
											<td width="70%">: <?php echo strtoupper($model->department); ?></td>
										</tr>
										<tr>
											<td width="30%">Nama/Alamat Perusahaan</td>
											<td width="70%">: <?php echo strtoupper($model->Company->name); ?></td>
										</tr>
										<tr>
											<td width="30%"></td>
											<td width="70%">: <?php echo $model->Company->address; ?></td>
										</tr>
										<tr>
											<td width="30%">Nomor PASSPORT</td>
											<td width="70%">: <?php echo $model->no_passport; ?></td>
										</tr>
										<tr>
											<td width="30%">Nomor RPTKA</td>
											<td width="70%">: <?php echo $model->no_rptka; ?></td>
										</tr>
										<tr>
											<td width="30%">Nomor IMTA</td>
											<td width="70%">: <?php echo $model->no_imta; ?></td>
										</tr>
										<tr>
											<td width="30%">Nomor KITAS / KITAP</td>
											<td width="70%">: <?php echo $model->no_kitaskitap; ?></td>
										</tr>
										<tr>
											<td width="30%">Alamat Tempat Tinggal</td>
											<td width="70%">: <?php echo $model->Company->address; ?></td>
										</tr>

									</table>
								</div>
							</p>
							<BR>
								<BR>
									<BR>
										<BR>
											<BR>
												<BR>
													<BR>
														<BR>
															<BR>
																<BR>
																	<BR>
																		<BR>
																			<BR>
																				<BR>
																					<BR>
																						<p>
																							Nama tersebut telah terdaftar pada Dinas Tenaga Kerja Kabupaten Bandung dengan Nomor Pendaftaran <?php echo $model->no_registration; ?>. Surat Keterangan ini berlaku sampai dengan tanggal <b><?php 
																							$date=date_create($model->expired_date);
																							echo date_format($date,"d F Y");
																							?></b>.
																						</p>
																						Demikian Surat Keterangan ini dibuat agar yang berkepentingan menjadi maklum.																															<p>
																					</p>												

																				</div>
																			</div>
																			<BR>
																				<BR>
																					<div class="kotak">
																						<div class="kiri">
																							<BR>
																								<BR>
																									
																										<BR>
																										<?php 
																											$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
																												'data' => 'http://192.168.43.29/project_skripsi_disnaker/letter/'.$model->encrypt,
																												'filename' => "sk-".$model->id_wna_existence.".png",
																												'subfolderVar' => false,
																												'matrixPointSize' => 5,
																												'displayImage'=>true, // default to true, if set to false display a URL path
																												'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
																												'matrixPointSize'=>3, // 1 to 10 only
																												)) 
																												?>	<BR>
																																		Pin Verifikasi : <?php echo gmp_strval($model->privatekey,16); ?>
																																				<BR>
																																					<BR>
																																						<b><u>Tembusan</u></b> disampaikan kepada : <br>
																																						<small>
																																							1. Yth. Bapak Bupati Bandung <br>
																																							2. Yth. Bapak Kepala Dinas Tenaga Kerja & Transmigrasi Provinsi Jawa Barat
																																						</small>
																																					</div>
																																					<div class="kanan" style="font-size:18px;line-height:20px;">
																																						
																																						<BR>

																																							Soreang, <?php $created=date_create($model->created_date);
																																							echo date_format($created,"d F Y");?> <BR>
																																							KEPALA DINAS TENAGA KERJA <BR>
																																							KABUPATEN BANDUNG<BR>
																																							<BR>
																																								<BR>
																																									<BR>
																																										<BR>
																																											<b><u>DRS. RUKMANA, MSi.</u></b><BR>
																																											Pembina Utama Muda<BR>
																																											NIP. 19650520 199102 1 002
																																											



																																										</div>
																																									</div>

