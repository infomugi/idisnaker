<?php
/* @var $this ParticipationController */
/* @var $model Participation */

$this->widget('ext.yii-toastr.MugiToastr', array(
	'flashMessagesOnly' => true, 
	'options' => array(
		"closeButton" => true,
		"debug" => true,
		"progressBar"=> true,
		"positionClass" => "toast-top-left",
		"showDuration" => "600",
		"hideDuration" => "1000",
		"timeOut" => "15000",
		"extendedTimeOut" => "1000",
		"showEasing" => "swing",
		"hideEasing" => "linear",
		"showMethod" => "fadeIn",
		"hideMethod" => "fadeOut"
		)
	));

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->id_participation,
	);

$this->pageTitle='Detail Ticket';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
		array('index'),
		array('class' => 'btn btn-primary btn-flat', 'title'=>'List Participation'));
		?>
		<?php echo CHtml::link('<i class="fa fa-table"></i>',
			array('admin'),
			array('class' => 'btn btn-primary btn-flat','title'=>'Manage Participation'));
			?>
			<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
				array('update', 'id'=>$model->id_participation,
					), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Participation'));
					?>
					<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
						array('delete', 'id'=>$model->id_participation,
							),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Participation'));
							?>

						</span> 

						<span class="hidden-xs">

							<?php echo CHtml::link('List',
								array('index'),
								array('class' => 'btn btn-primary btn-flat', 'title'=>'List Participation'));
								?>
								<?php echo CHtml::link('Manage',
									array('admin'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Manage Participation'));
									?>
									<?php echo CHtml::link('Edit', 
										array('update', 'id'=>$model->id_participation,
											), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Participation'));
											?>
											<?php echo CHtml::link('Delete', 
												array('delete', 'id'=>$model->id_participation,
													),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Participation'));
													?>
													<?php echo CHtml::link('Print', 
														array('print', 'id'=>$model->id_participation,
															), array('class' => 'btn btn-warning btn-flat', 'title'=>'Print Ticket'));
															?>

														</span>
														<HR>


															<div class="col-md-8">

																<H3><i class="fa fa-ticket"></i> Ticket ID #<?PHP echo $model->id_participation ?></H3>
																<?php $this->widget('zii.widgets.CDetailView', array(
																	'data'=>$model,
																	'htmlOptions'=>array("class"=>"table"),
																	'attributes'=>array(
																		'id_participation',
																		'created_date',
																		array('name'=>'event_id','value'=>$model->Event->name),
																		array('name'=>'member_id','value'=>$model->Member->first_name . " " . $model->Member->last_name),
																		array('name'=>'status','value'=>Participation::model()->status($model->status)),
																		),
																		)); ?>


																	</div>
																	<div class="col-md-4">

																		<H3><i class="fa fa-qrcode"></i> QR-Ticket</H3>
																		<?php 
																		$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
																			'data' => 'http://192.168.43.29/project_skripsi_disnaker/participation/attend/id/'.$model->id_participation,
																			'filename' => "ticket".$model->id_participation.$model->event_id.$model->member_id.".png",
																			'subfolderVar' => false,
																			'matrixPointSize' => 5,
																		'displayImage'=>true, // default to true, if set to false display a URL path
																		'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
																		'matrixPointSize'=>6, // 1 to 10 only
																		)) 
																		?>

																	</div>






																	<STYLE>
																		th{width:150px;}
																	</STYLE>

