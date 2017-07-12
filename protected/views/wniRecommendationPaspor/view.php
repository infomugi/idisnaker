<?php
/* @var $this WniRecommendationPasporController */
/* @var $model WniRecommendationPaspor */

$this->breadcrumbs=array(
	'Wni Recommendation Paspors'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Rekomendasi Paspor';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Rekomendasi Paspor'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Rekomendasi Paspor'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Rekomendasi Paspor'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_wni_recommendation,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Rekomendasi Paspor'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_wni_recommendation,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Rekomendasi Paspor'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Rekomendasi Paspor'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Rekomendasi Paspor'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Rekomendasi Paspor'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_wni_recommendation,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Rekomendasi Paspor'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_wni_recommendation,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Rekomendasi Paspor'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'id_wni_recommendation',
																	'created_date',
																	'user_id',
																	'registration_code',
																	'registration_date',
																	'recommendation_code',
																	'recommendation_date',
																	'government_code',
																	'government_date',
																	'institution_code',
																	'institution_date',
																	'job_seeker_code',
																	'company_code',
																	'name',
																	'place',
																	'birth',
																	'gender',
																	'address',
																	'country_id',
																	'program_type',
																	'status',
																	'publickey',
																	'privatekey',
																	'encrypt',
																	'modulo',
																	'views',
																	'last_view',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

