<?php
/* @var $this CompanyjobfairController */
/* @var $model Job Fair */

$this->breadcrumbs=array(
	'Job Fairs'=>array('index'),
	$model->id_company_jobfair,
	);

$this->pageTitle='Detail Job Fair';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Job Fair'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Job Fair'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Job Fair'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_company_jobfair,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Job Fair'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_company_jobfair,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Job Fair'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Job Fair'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Job Fair'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Job Fair'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_company_jobfair,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Job Fair'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_company_jobfair,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Job Fair'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	// 'id_company_jobfair',
																	// 'created_date',
																	// 'user_id',
																	array('name'=>'company_id','value'=>$model->Company->name),
																	array('name'=>'job_id','value'=>$model->Job->name),
																	array('name'=>'education_id','value'=>$model->Education->name),
																	'department',
																	'skill',
																	'age',
																	'gender',
																	'quantity',
																	'status',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

