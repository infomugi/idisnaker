<?php
/* @var $this WnaExistenceController */
/* @var $model WnaExistence */

$this->breadcrumbs=array(
	'WNA Imtas'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail IMTA - '.$model->no_registration;	
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Keberadaan TKA'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Keberadaan TKA'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Keberadaan TKA'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_wna_imta,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Keberadaan TKA'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_wna_imta,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Keberadaan TKA'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Keberadaan TKA'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Keberadaan TKA'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Keberadaan TKA'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_wna_imta,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Keberadaan TKA'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_wna_imta,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Keberadaan TKA'));
															?>

															<?php echo CHtml::link('Print', 
																array('print', 'id'=>$model->id_wna_imta,
																	),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Print Data'));
																	?>

																	<?php echo CHtml::link('Verify', 
																		array('decrypt', 'verify'=>$model->encrypt,
																			), array('class' => 'btn btn-info btn-flat', 'title'=>'Verify Letter'));
																			?>

																		</span>

																		<H3><i class="fa fa-check-square"></i> Perpanjangan IMTA <span class="hidden-xs">No BAP. : <?php echo $model->no_registration; ?></span></H3>

																		
																		
																		<HR>
																			<H4><i class="fa fa-building-o"></i> I. Data Perusahaan</H4>
																			<?php $this->widget('zii.widgets.CDetailView', array(
																				'data'=>$model,
																				'htmlOptions'=>array("class"=>"table"),
																				'attributes'=>array(
																					array('name'=>'company_id','value'=>$model->Company->name),
																					array('label'=>'Nama Pimpinan/ Penanggung Jawab','value'=>$model->Company->owner),
																					array('label'=>'Alamat Perusahaan','value'=>$model->Company->address),
																					array('label'=>'No. Telephone','value'=>$model->Company->phone),
																					array('label'=>'Fax','value'=>$model->Company->faximile),
																					array('label'=>'Email','value'=>$model->Company->email),
																					array('label'=>'Tempat Kedudukan Cabang','value'=>Company::model()->place($model->Company->place)),
																					array('label'=>'Ijin Usaha Dari','value'=>Company::model()->license($model->Company->place)),
																					array('label'=>'Ijin Usaha Nomor','value'=>$model->Company->business_license_no),
																					array('label'=>'Ijin Usaha Tanggal','value'=>$model->Company->business_license_date),
																					),
																					)); ?>

																					<HR>
																						<H4><i class="fa fa-user"></i> II. Data Tenaga Kerja Asing (TKA)</H4>
																						<?php $this->widget('zii.widgets.CDetailView', array(
																							'data'=>$model,
																							'htmlOptions'=>array("class"=>"table"),
																							'attributes'=>array(
																								'name',
																								'address',
																								'address_foreign',
																								array('name'=>'citizenship_id','value'=>$model->Citizenship->name),

																								'no_passport',
																								array('label'=>'Tanggal Berlaku','value'=>$model->passport_startdate . " s/d " . $model->passport_enddate),
																								'place',
																								'birth',
																								array('name'=>'gender','value'=>$model->gender == 0 ? "Perempuan" : "Laki-laki"),
																								array('name'=>'marital_status','value'=>$model->marital_status == 1 ? "Kawin" : "Belum Kawin"),
																								array('name'=>'education','value'=>WnaImta::model()->education($model->education)),
																								'experience_one',
																								'experience_two',
																								'experience_three',
																								'experience_four',


																								),
																								)); ?>
																								<HR>
																									<H4><i class="fa fa-file-o"></i> Surat Ijin Tinggal yang Dimiliki</H4>
																									<?php $this->widget('zii.widgets.CDetailView', array(
																										'data'=>$model,
																										'htmlOptions'=>array("class"=>"table"),
																										'attributes'=>array(
																											'no_passport',
																											array('label'=>'Tanggal Berlaku','value'=>$model->passport_startdate . " s/d " . $model->passport_enddate),
																											'no_rptka',
																											'rptka_enddate',
																											'no_imta',
																														array('name'=>'imta_extension_to','value'=>WnaImta::model()->imta($model->imta_extension_to)),
																											'imta_date',
																											'no_kitaskitap',
																											array('label'=>'Tanggal Berlaku','value'=>$model->kitas_startdate . " s/d " . $model->kitas_enddate),
																											'no_lk',
																											array('label'=>'Tanggal Berlaku','value'=>$model->lk_startdate . " s/d " . $model->lk_enddate),
																											),
																											)); ?>
																											<HR>
																												<H4><i class="fa fa-star"></i> III. JABATAN YANG AKAN DIISI OLEH TENAGA KERJA ASING :
																												</H4>
																												<?php $this->widget('zii.widgets.CDetailView', array(
																													'data'=>$model,
																													'htmlOptions'=>array("class"=>"table"),
																													'attributes'=>array(
																														'department',
																														array('name'=>'department_level','value'=>WnaImta::model()->department($model->department_level)),

																														'department_description',
																														array('name'=>'department_education','value'=>WnaImta::model()->education($model->department_education)),
																														array('name'=>'department_year','value'=>WnaImta::model()->experience($model->department_year)),
																														'department_place',

																														),
																														)); ?>
																														<HR>
																														<HR>
																												<H4><i class="fa fa-star"></i> IV. JABATAN YANG AKAN DIISI OLEH PENDAMPING TENAGA 
																												</H4>
																												<?php $this->widget('zii.widgets.CDetailView', array(
																													'data'=>$model,
																													'htmlOptions'=>array("class"=>"table"),
																													'attributes'=>array(
																														'companion_name',
																														array('name'=>'companion_education','value'=>WnaImta::model()->education($model->companion_education)),
																														'companion_department',
																														array('name'=>'companion_work_experience','value'=>WnaImta::model()->experience($model->companion_work_experience)),
																														'companion_address',
																														),
																														)); ?>

																														<H4><i class="fa fa-calendar"></i> V.HASIL PEMERIKSAAN &PENINJAUAN LAPANGAN
																												</H4>
																												<?php $this->widget('zii.widgets.CDetailView', array(
																													'data'=>$model,
																													'htmlOptions'=>array("class"=>"table"),
																													'attributes'=>array(
																														array('name'=>'employment_agreement','value'=>WnaImta::model()->agreement($model->employment_agreement)),
																														),
																														)); ?>







																															<STYLE>
																																th{width:250px;}
																															</STYLE>




