<?php
/* @var $this WnaImtaReceiptController */
/* @var $model WnaImtaReceipt */

$this->breadcrumbs=array(
	'Wna Imta Receipts'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Tanda Terima IMTA';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Tanda Terima IMTA'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Tanda Terima IMTA'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Tanda Terima IMTA'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_wna_imta_receipt,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Tanda Terima IMTA'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_wna_imta_receipt,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Tanda Terima IMTA'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Tanda Terima IMTA'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Tanda Terima IMTA'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Tanda Terima IMTA'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_wna_imta_receipt,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Tanda Terima IMTA'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_wna_imta_receipt,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Tanda Terima IMTA'));
															?>

															<?php echo CHtml::link('Print', 
																array('print', 'id'=>$model->id_wna_imta_receipt,
																	), array('class' => 'btn btn-info btn-flat', 'title'=>'Print Tanda Terima IMTA'));
																	?>

																</span>

																<HR>

																	<?php $this->widget('zii.widgets.CDetailView', array(
																		'data'=>$model,
																		'htmlOptions'=>array("class"=>"table"),
																		'attributes'=>array(
																			'id_wna_imta_receipt',
																			'created_date',
																			'user_id',
																			'name',
																			'company_id',
																			'no_bap',
																			'no_recomended',
																			'date_recomended',
																			'date_expired',
																			'letter_request',
																			'letter_stuffing_imta',
																			'letter_imta',
																			'letter_rpkta',
																			'letter_passport',
																			'letter_kitas',
																			'letter_tka_existence',
																			'letter_permission',
																			'letter_akta',
																			'letter_npwp',
																			'letter_employment',
																			'letter_appointment_tki',
																			'letter_realization_of_training',
																			'letter_organizational_structure',
																			'letter_permit_domicile',
																			'letter_insurance_tka',
																			'letter_foto',
																			'letter_bpjs',
																			'description',
																			'status',
																			'email',
																			'email_date',
																			'supervision_id',
																			'supervision_date',
																			'general_id',
																			'general_date',
																			'bpmp_id',
																			'bpmp_date',
																			),
																			)); ?>

																	<STYLE>
																		th{width:350px;}
																	</STYLE>

