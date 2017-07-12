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
					<?php echo $form->labelEx($model,'created_date'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'created_date'); ?>
					<?php
					$this->widget('CMaskedTextField', array(
						'model' => $model,
						'attribute' => 'created_date',
						'mask' => '99-99-2099',
						'htmlOptions' => array('class'=>'form-control')
						));
						?>
					</div>

				</div>  

				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'no_registration'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'no_registration'); ?>
						<?php echo $form->textField($model,'no_registration',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'no_report'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'no_report'); ?>
						<?php echo $form->textField($model,'no_report',array('class'=>'form-control')); ?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'date_report'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'date_report'); ?>
						<?php
						$this->widget('CMaskedTextField', array(
							'model' => $model,
							'attribute' => 'date_report',
							'mask' => '99-99-2099',
							'htmlOptions' => array('class'=>'form-control')
							));
							?>
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
									<?php echo $form->labelEx($model,'citizenship_id'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'citizenship_id'); ?>
									<?php echo $form->dropDownList($model, "citizenship_id",
										CHtml::listData(Citizenship::model()->findAll(array('condition'=>'status=1','order'=>'name ASC')),
											'id_citizenship', 'name'
											),
										array("empty"=>"-- Pilih Kewarganegaraan --", 'class'=>'form-control')
										); ?> 
									</div>

								</div>  


								<div class="form-group">

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'department'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'department'); ?>
										<?php echo $form->textField($model,'department',array('class'=>'select2 form-control')); ?>
										</div>

									</div>  


									<div class="form-group">

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'company_id'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'company_id'); ?>
													<?php echo $form->dropDownList($model, "company_id",
												CHtml::listData(Company::model()->findAll(array('condition'=>'status=1','order'=>'name ASC')),
													'id_company', 'name'
													),
												array("empty"=>"-- Pilih Perusahaan --", 'class'=>'select2 form-control')
												); ?> 
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'no_passport'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'no_passport'); ?>
												<?php echo $form->textField($model,'no_passport',array('class'=>'form-control')); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'no_rptka'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'no_rptka'); ?>
												<?php echo $form->textField($model,'no_rptka',array('class'=>'form-control')); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'no_imta'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'no_imta'); ?>
												<?php echo $form->textField($model,'no_imta',array('class'=>'form-control')); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'no_kitaskitap'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'no_kitaskitap'); ?>
												<?php echo $form->textField($model,'no_kitaskitap',array('class'=>'form-control')); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'expired_date'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'expired_date'); ?>
												<?php
												$this->widget('CMaskedTextField', array(
													'model' => $model,
													'attribute' => 'expired_date',
													'mask' => '99-99-2999',
													'htmlOptions' => array('class'=>'form-control')
													));
													?>
												</div>

											</div>  

									<div class="form-group">

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'address'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'address'); ?>
											<?php echo $form->textArea($model,'address',array('class'=>'form-control')); ?>
										</div>

									</div>  											


											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'status'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'status'); ?>
													<?php
													echo $form->radioButtonList($model,'status',
														array('1'=>'Aktif','0'=>'Tidak Aktif'),
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

       