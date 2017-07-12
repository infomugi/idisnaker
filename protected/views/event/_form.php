<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'event-form',
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
					<?php echo $form->labelEx($model,'name'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'name'); ?>
					<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'description'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'description'); ?>
					<?php echo $form->textArea($model,'description',array('class'=>'form-control')); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'category_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'category_id'); ?>
					<?php 
					echo $form->dropDownList($model, "category_id",
						CHtml::listData(Category::model()->findAll(array('condition'=>'status=1')),
							'id_category', 'name'
							),
						array("empty"=>"-- Kategori Kegiatan --", 'class'=>'select2 form-control')
						); 
						?> 
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'subdistrict_id'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'subdistrict_id'); ?>
						<?php 
						echo $form->dropDownList($model, "subdistrict_id",
							CHtml::listData(Subdistrict::model()->findAll(),
								'id_subdistrict', 'name'
								),
							array("empty"=>"-- Kecamatan --", 'class'=>'select2 form-control')
							); 
							?> 
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'village_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'village_id'); ?>
							<?php 
							echo $form->dropDownList($model, "village_id",
								CHtml::listData(Village::model()->findAll(),
									'id_village', 'name'
									),
								array("empty"=>"-- Desa --", 'class'=>'select2 form-control')
								); 
								?> 
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
								<?php echo $form->labelEx($model,'chief_instance'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'chief_instance'); ?>
								<?php 
								echo $form->dropDownList($model, "chief_instance",
									CHtml::listData(Users::model()->findAll(array('condition'=>'status=1')),
										'id_user', 'first_name'
										),
									array("empty"=>"-- Kepala Dinas --", 'class'=>'select2 form-control')
									); 
									?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'chief_event'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'chief_event'); ?>
									<?php 
									echo $form->dropDownList($model, "chief_event",
										CHtml::listData(Users::model()->findAll(array('condition'=>'status=1')),
											'id_user', 'first_name'
											),
										array("empty"=>"-- Ketua Kegiatan --", 'class'=>'select2 form-control')
										); 
										?>
									</div>

								</div>  


								<div class="form-group">

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'chief_division'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'chief_division'); ?>
										<?php 
										echo $form->dropDownList($model, "chief_division",
											CHtml::listData(Users::model()->findAll(array('condition'=>'status=1')),
												'id_user', 'first_name'
												),
											array("empty"=>"-- Kepala Seksi Jabatan --", 'class'=>'select2 form-control')
											); 
											?>
										</div>

									</div>  


									<div class="form-group">

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'start_date'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'start_date'); ?>
											<?php echo $form->textField($model,'start_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
										</div>

									</div>  


									<div class="form-group">

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'end_date'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'end_date'); ?>
											<?php echo $form->textField($model,'end_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
										</div>

									</div>  


									<div class="form-group">

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'agrement_date'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'agrement_date'); ?>
											<?php echo $form->textField($model,'agrement_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
										</div>

									</div>  


									<div class="form-group">

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'instructor_id'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'instructor_id'); ?>
											<?php 
											echo $form->dropDownList($model, "instructor_id",
												CHtml::listData(Users::model()->findAll(array('condition'=>'status=1')),
													'id_user', 'first_name'
													),
												array("empty"=>"-- Instruktur --", 'class'=>'select2 form-control')
												); 
												?> 
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'degree_date'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'degree_date'); ?>
												<?php echo $form->textField($model,'degree_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'committee_code'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'committee_code'); ?>
												<?php echo $form->textField($model,'committee_code',array('class'=>'form-control','data-mask'=>"999/99-SEKRE/2016")); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'committee_date'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'committee_date'); ?>
												<?php echo $form->textField($model,'committee_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'certificate_code'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'certificate_code'); ?>
												<?php echo $form->textField($model,'certificate_code',array('class'=>'form-control','data-mask'=>"999-999/SEKRE/2016")); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'certificate_date'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'certificate_date'); ?>
												<?php echo $form->textField($model,'certificate_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'treasurer_id'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'treasurer_id'); ?>
												<?php 
												echo $form->dropDownList($model, "treasurer_id",
													CHtml::listData(Users::model()->findAll(array('condition'=>'status=1')),
														'id_user', 'first_name'
														),
													array("empty"=>"-- Bendahara --", 'class'=>'select2 form-control')
													); 
													?> 
												</div>

											</div>  


											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'invitation_date'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'invitation_date'); ?>
													<?php echo $form->textField($model,'invitation_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
												</div>

											</div>  


											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'socialization_date'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'socialization_date'); ?>
													<?php echo $form->textField($model,'socialization_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
												</div>

											</div>  


											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'recrutment_date'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'recrutment_date'); ?>
													<?php echo $form->textField($model,'recrutment_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
												</div>

											</div>  


											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'opening_date'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'opening_date'); ?>
													<?php echo $form->textField($model,'opening_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
												</div>

											</div>  


											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'closhing_date'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'closhing_date'); ?>
													<?php echo $form->textField($model,'closhing_date',array('class'=>'form-control','data-mask'=>"99-99-9999")); ?>
												</div>

											</div>  


											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'start_implementation_date'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'start_implementation_date'); ?>
													<?php echo $form->textField($model,'start_implementation_date',array('class'=>'form-control')); ?>
												</div>

											</div>  


											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'end_implementation_date'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'end_implementation_date'); ?>
													<?php echo $form->textField($model,'end_implementation_date',array('class'=>'form-control')); ?>
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