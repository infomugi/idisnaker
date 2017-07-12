<?php
/* @var $this EventController */
/* @var $model Event */
$dataProvider=new CActiveDataProvider('Participation',array('criteria'=>array('condition'=>'status=1 AND event_id='.$model->id_event)));

$this->widget('ext.yii-toastr.MugiToastr', array(
	'flashMessagesOnly' => true, 
	'options' => array(
		"closeButton" => true,
		"debug" => true,
		"progressBar"=> true,
		"positionClass" => "toast-bottom-left",
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
	'Events'=>array('index'),
	$model->id_event,
	);

$this->pageTitle='Detail Event';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Event'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Event'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Event'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_event,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Event'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_event,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Event'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Event'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Event'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Event'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_event,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Event'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_event,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Event'));
															?>
															<?php echo CHtml::link('Clone', 
																array('clone', 'id'=>$model->id_event,
																	), array('class' => 'btn btn-warning btn-flat', 'title'=>'Clone this Event'));
																	?>	
																	<?php echo CHtml::link('Join', 
																		array('participation/join', 'event'=>$model->id_event,
																			), array('class' => 'btn btn-success btn-flat', 'title'=>'Join this Event'));
																			?>	
																			<?php echo CHtml::link('Cancel', 
																				array('participation/cancel', 'member'=>YII::app()->user->id, 'event'=>$model->id_event
																					), array('class' => 'btn btn-warning btn-flat', 'title'=>'Cancel Join this Event'));
																					?>															

																				</span>

																				<HR>
																					<H3><i class="fa fa-tasks"></i> Data Pelaksanaan</H3>
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6">
			<div class="mini-stat clearfix bx-shadow bg-success">
				<span class="mini-stat-icon">
					<i class="fa fa-check-square"></i>
				</span>
				<div class="mini-stat-info text-right">
					<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_participation) FROM participation where event_id=".$model->id_event." and status=1")->queryScalar();?></span> Present
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 col-lg-6">
			<div class="mini-stat clearfix bx-shadow bg-danger">
				<span class="mini-stat-icon">
					<i class="fa fa-minus-square"></i>
				</span>
				<div class="mini-stat-info text-right">
					<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_participation) FROM participation where event_id=".$model->id_event." and status=0")->queryScalar();?></span> Absen
				</div>
			</div>
		</div>
		</div>

																					<?php $this->widget('zii.widgets.CDetailView', array(
																						'data'=>$model,
																						'htmlOptions'=>array("class"=>"table"),
																						'attributes'=>array(

																							'name',
																							'description',
																							array('name'=>'subdistrict_id','value'=>$model->Subdistrict->name),
																							array('name'=>'village_id','value'=>$model->Village->name),
																							'place',

																							),
																							)); ?>
																							<H3><i class="fa fa-users"></i> Kepanitiaan</H3>
																							<?php $this->widget('zii.widgets.CDetailView', array(
																								'data'=>$model,
																								'htmlOptions'=>array("class"=>"table"),
																								'attributes'=>array(
																									array('name'=>'user_id','value'=>$model->Admin->first_name . " " . $model->Admin->last_name),
																									array('name'=>'chief_instance','value'=>$model->ChiefInstance->first_name . " " . $model->ChiefInstance->last_name),
																									array('name'=>'chief_event','value'=>$model->ChiefEvent->first_name . " " . $model->ChiefEvent->last_name),
																									array('name'=>'chief_division','value'=>$model->ChiefDivision->first_name . " " . $model->ChiefDivision->last_name),
																									array('name'=>'instructor_id','value'=>$model->Instructor->first_name . " " . $model->Instructor->last_name),
																									array('name'=>'treasurer_id','value'=>$model->Treasurer->first_name . " " . $model->Treasurer->last_name),
																									),
																									)); ?>
																									<H3><i class="fa fa-calendar"></i> Tanggal Pelaksanaan</H3>
																									<?php $this->widget('zii.widgets.CDetailView', array(
																										'data'=>$model,
																										'htmlOptions'=>array("class"=>"table"),
																										'attributes'=>array(
																											'committee_code',
																											'committee_date',
																											'certificate_code',
																											'certificate_date',
																											),
																											)); ?>

																											<H3><i class="fa fa-calendar"></i> Tanggal Pelaksanaan</H3>
																											<?php $this->widget('zii.widgets.CDetailView', array(
																												'data'=>$model,
																												'htmlOptions'=>array("class"=>"table"),
																												'attributes'=>array(
																													'start_date',
																													'end_date',
																													'agrement_date',
																													'degree_date',
																													'invitation_date',
																													'socialization_date',
																													'recrutment_date',
																													'opening_date',
																													'closhing_date',
																													'start_implementation_date',
																													'end_implementation_date',

																													),
																													)); ?>


																											<?php $this->widget('zii.widgets.grid.CGridView', array(
																												'id'=>'participation-grid',
																												'dataProvider'=>$dataProvider,
																								//'filter'=>$model,
																												'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
																												'columns'=>array(

																									// array(
																									// 	'header'=>'No',
																									// 	'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
																									// 	'htmlOptions'=>array('width'=>'10px', 
																									// 		'style' => 'text-align: center;')),

																													'id_participation',
																													'created_date',
																													array('name'=>'member_id','value'=>'$data->Member->first_name . " " . $data->Member->last_name'),
																													array('name'=>'status','value'=>'Participation::model()->status($data->status)'),
																													
																													array(
																														'header'=>'Certificate',
																														'type'=>'raw',
																														'value'=>'CHtml::link("Generate", array("certificate/create/participation/".$data->id_participation))',
																														),

																													array(
																														'class'=>'CButtonColumn',
																														'template'=>'{view}',
																														'buttons'=>array(
																															'view'=>
																															array(
																																'url'=>'Yii::app()->createUrl("participation/view", array("id"=>$data->id_participation))',
																																),
																															),
																														),
																													),
																													)); ?>

																											<STYLE>
																												th{width:200px;}
																											</STYLE>

