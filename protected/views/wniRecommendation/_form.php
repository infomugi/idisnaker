<?php
/* @var $this WnaExistenceController */
/* @var $model WnaExistence */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'wna-existence-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-danger',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>



			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'recommendation_code'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'recommendation_code'); ?>
					<?php echo $form->textField($model,'recommendation_code',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'recommendation_date'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'recommendation_date'); ?>
					<?php
					$this->widget('CMaskedTextField', array(
						'model' => $model,
						'attribute' => 'recommendation_date',
						'mask' => '99-99-2099',
						'htmlOptions' => array('class'=>'form-control')
						));
						?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'registration_code'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'registration_code'); ?>
						<?php echo $form->textField($model,'registration_code',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'registration_date'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'registration_date'); ?>
						<?php
						$this->widget('CMaskedTextField', array(
							'model' => $model,
							'attribute' => 'registration_date',
							'mask' => '99-99-2099',
							'htmlOptions' => array('class'=>'form-control')
							));
							?>
						</div>

					</div>  				


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'government_code'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'government_code'); ?>
							<?php echo $form->textField($model,'government_code',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'government_date'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'government_date'); ?>
							<?php
							$this->widget('CMaskedTextField', array(
								'model' => $model,
								'attribute' => 'government_date',
								'mask' => '99-99-2099',
								'htmlOptions' => array('class'=>'form-control')
								));
								?>
							</div>

						</div>  				


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'institution_code'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'institution_code'); ?>
								<?php echo $form->textField($model,'institution_code',array('class'=>'form-control')); ?>
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'institution_date'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'institution_date'); ?>
								<?php
								$this->widget('CMaskedTextField', array(
									'model' => $model,
									'attribute' => 'institution_date',
									'mask' => '99-99-2099',
									'htmlOptions' => array('class'=>'form-control')
									));
									?>
								</div>

							</div>  	

							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'job_seeker_code'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'job_seeker_code'); ?>
									<?php echo $form->textField($model,'job_seeker_code',array('class'=>'form-control')); ?>
								</div>

							</div>  

							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'company_code'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'company_code'); ?>
									<?php echo $form->textField($model,'company_code',array('class'=>'form-control')); ?>
								</div>

							</div>  																	


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'name'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'name'); ?>
									<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'place'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'place'); ?>
									<?php echo $form->textField($model,'place',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'birth'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'birth'); ?>
									<?php
									$this->widget('CMaskedTextField', array(
										'model' => $model,
										'attribute' => 'birth',
										'mask' => '99-99-1999',
										'htmlOptions' => array('class'=>'form-control')
										));
										?>
									</div>

								</div>  


								<div class="form-group">

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'gender'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'gender'); ?>
										<?php
										echo $form->radioButtonList($model,'gender',
											array('1'=>'Laki-laki','0'=>'Perempuan'),
											array(
												'template'=>'{input}{label}',
												'separator'=>'',
												'labelOptions'=>array(
													'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

												)                              
											);
											?>
										</div>

									</div>  


									<div class="form-group">

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'country_id'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'country_id'); ?>
											<?php echo $form->dropDownList($model, "country_id",
												CHtml::listData(Citizenship::model()->findAll(array('condition'=>'status=1','order'=>'name ASC')),
													'id_citizenship', 'name'
													),
												array("empty"=>"-- Pilih Kewarganegaraan --", 'class'=>'select2 form-control')
												); ?> 
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'program_type'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'program_type'); ?>
												<?php
												echo $form->radioButtonList($model,'program_type',
													array('1'=>'Program G to G','2'=>'Lainnya'),
													array(
														'template'=>'{input}{label}',
														'separator'=>'',
														'labelOptions'=>array(
															'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

														)                              
													);
													?>
												</div>

											</div> 






											<div class="form-group">
												<div class="col-md-12">  
												</br></br>
												<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
											</div>
										</div>

										<?php $this->endWidget(); ?>

									</div></div><!-- form -->
