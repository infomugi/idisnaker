<?php
/* @var $this CitizenshipController */
/* @var $model Citizenship */

$this->breadcrumbs=array(
	'Citizenships'=>array('index'),
	$model->name,
	);

$this->pageTitle='Citizenship - '.$model->name;

$dataProvider=new CActiveDataProvider('WnaExistence',array('criteria'=>array('condition'=>'citizenship_id='.$model->id_citizenship)));
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Citizenship'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Citizenship'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Citizenship'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_citizenship,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Citizenship'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_citizenship,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Citizenship'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Citizenship'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Citizenship'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Citizenship'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_citizenship,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Citizenship'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_citizenship,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Citizenship'));
															?>

																<?php echo CHtml::link('Report', 
														array('wnaexistence/citizenship', 'id'=>$model->id_citizenship,
															),  array('class' => 'btn btn-success btn-flat', 'title'=>'Report by Citizenship'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'id_citizenship',
																	'code',
																	'name',
																	'description',
																	'status',
																	),
																	)); ?>


																			<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'wna-existence-grid',
						'dataProvider'=>$dataProvider,
						// 'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							// 'id_wna_existence',
							// 'created_date',
							// 'user_id',
							'no_registration',
							// 'no_report',
							// 'date_report',
							'name',
							array('name'=>'company_id','value'=>'$data->Company->name'),
							'department',
							array('name'=>'expired_date','value'=>'WnaExistence::model()->deadline($data->expired_date)'),
							'expired_date',

							/*
							'place',
							'birth',
							'gender',
							'citizenship_id',
							'no_passport',
							'no_rptka',
							'no_imta',
							'no_kitaskitap',
							'status',
							*/
							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}',
								'buttons'=>array(
									'view'=>
									array(
										'url'=>'Yii::app()->createUrl("WnaExistence/view", array("id"=>$data->id_wna_existence))',
										'options'=>array(
											'ajax'=>array(
												'type'=>'POST',
												'url'=>"js:$(this).attr('href')",
												'success'=>'function(data) { $("#viewModal .modal-body p").html(data); $("#viewModal").modal(); }'
												),
											),
										),
									),
								),
							),
							)); ?>



							<!-- Modal -->
							<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<!-- Popup Header -->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title"><strong>View</strong> WnaExistence</h4>
										</div>
										<!-- Popup Content -->
										<div class="modal-body">
											<p>Details</p>
										</div>
										<!-- Popup Footer -->
										<div class="modal-footer">
											<BR>
												<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>




															<STYLE>
																th{width:150px;}
															</STYLE>

