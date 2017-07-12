<?php
/* @var $this WnaImtaController */
/* @var $model WnaImta */
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

			
<!-- 			<div class="form-group">

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

				</div>   -->

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
						<?php echo $form->labelEx($model,'date_examination'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'date_examination'); ?>
						<?php
						$this->widget('CMaskedTextField', array(
							'model' => $model,
							'attribute' => 'date_examination',
							'mask' => '99-99-2019',
							'htmlOptions' => array('class'=>'form-control')
							));
							?>
							
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
								'mask' => '99-99-2019',
								'htmlOptions' => array('class'=>'form-control')
								));
								?>
								
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
									<?php echo $form->labelEx($model,'no_rptka'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'no_rptka'); ?>
									<?php echo $form->textField($model,'no_rptka',array('class'=>'form-control')); ?>
								</div>

							</div>  



							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'rptka_enddate'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'rptka_enddate'); ?>
									<?php
									$this->widget('CMaskedTextField', array(
										'model' => $model,
										'attribute' => 'rptka_enddate',
										'mask' => '99-99-2019',
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
										<?php echo $form->labelEx($model,'address_foreign'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'address_foreign'); ?>
										<?php echo $form->textArea($model,'address_foreign',array('class'=>'form-control')); ?>
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
										<?php echo $form->labelEx($model,'citizenship_id'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'citizenship_id'); ?>
										<?php echo $form->dropDownList($model, "citizenship_id",
											CHtml::listData(Citizenship::model()->findAll(array('condition'=>'status=1','order'=>'name ASC')),
												'id_citizenship', 'name'
												),
											array("empty"=>"-- Pilih Kewarganegaraan --", 'class'=>'select2 form-control')
											); ?> 
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
												<div class="radio radio-info radio-inline">
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

											</div>  

											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'marital_status'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'marital_status'); ?>
													<div class="radio radio-success radio-inline">
														<?php
														echo $form->radioButtonList($model,'marital_status',
															array('1'=>'Kawin','2'=>'Belum Kawin'),
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

												</div>  	

												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'education'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'education'); ?>
														<div class="radio radio-warning radio-inline">
															<?php
															echo $form->radioButtonList($model,'education',
																array('0'=>'-','4'=>'S1','5'=>'S2'),
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

													</div>													

													<div class="form-group">

														<div class="col-sm-4 control-label">
															<?php echo $form->labelEx($model,'experience_one'); ?>
														</div>   

														<div class="col-sm-8">
															<?php echo $form->error($model,'experience_one'); ?>
															<?php echo $form->textField($model,'experience_one',array('class'=>'form-control')); ?>
														</div>

													</div>  																						

													<div class="form-group">

														<div class="col-sm-4 control-label">
															<?php echo $form->labelEx($model,'experience_two'); ?>
														</div>   

														<div class="col-sm-8">
															<?php echo $form->error($model,'experience_two'); ?>
															<?php echo $form->textField($model,'experience_two',array('class'=>'form-control')); ?>
														</div>

													</div>  

													<div class="form-group">

														<div class="col-sm-4 control-label">
															<?php echo $form->labelEx($model,'experience_three'); ?>
														</div>   

														<div class="col-sm-8">
															<?php echo $form->error($model,'experience_three'); ?>
															<?php echo $form->textField($model,'experience_three',array('class'=>'form-control')); ?>
														</div>

													</div>  

													<div class="form-group">

														<div class="col-sm-4 control-label">
															<?php echo $form->labelEx($model,'experience_four'); ?>
														</div>   

														<div class="col-sm-8">
															<?php echo $form->error($model,'experience_four'); ?>
															<?php echo $form->textField($model,'experience_four',array('class'=>'form-control')); ?>
														</div>

													</div>  	


													<div class="form-group">

														<div class="col-sm-4 control-label">
															<?php echo $form->labelEx($model,'person_in_charge'); ?>
														</div>   

														<div class="col-sm-8">
															<?php echo $form->error($model,'person_in_charge'); ?>
															<?php echo $form->textField($model,'person_in_charge',array('class'=>'form-control')); ?>
														</div>

													</div>  																	


													<div class="form-group">

														<div class="col-sm-4 control-label">
															<?php echo $form->labelEx($model,'employment_agreement'); ?>
														</div>   

														<div class="col-sm-8">
															<?php echo $form->error($model,'employment_agreement'); ?>
															<?php
															$this->widget('CMaskedTextField', array(
																'model' => $model,
																'attribute' => 'employment_agreement',
																'mask' => '99-99-2019',
																'htmlOptions' => array('class'=>'form-control')
																));
																?>
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
																<?php echo $form->labelEx($model,'passport_startdate'); ?>
															</div>   

															<div class="col-sm-8">
																<?php echo $form->error($model,'passport_startdate'); ?>
																<?php
																$this->widget('CMaskedTextField', array(
																	'model' => $model,
																	'attribute' => 'passport_startdate',
																	'mask' => '99-99-2099',
																	'htmlOptions' => array('class'=>'form-control')
																	));
																	?>
																</div>

															</div> 

															<div class="form-group">

																<div class="col-sm-4 control-label">
																	<?php echo $form->labelEx($model,'passport_enddate'); ?>
																</div>   

																<div class="col-sm-8">
																	<?php echo $form->error($model,'passport_enddate'); ?>
																	<?php
																	$this->widget('CMaskedTextField', array(
																		'model' => $model,
																		'attribute' => 'passport_enddate',
																		'mask' => '99-99-2099',
																		'htmlOptions' => array('class'=>'form-control')
																		));
																		?>
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
																		<?php echo $form->labelEx($model,'kitas_startdate'); ?>
																	</div>   

																	<div class="col-sm-8">
																		<?php echo $form->error($model,'kitas_startdate'); ?>
																		<?php
																		$this->widget('CMaskedTextField', array(
																			'model' => $model,
																			'attribute' => 'kitas_startdate',
																			'mask' => '99-99-2019',
																			'htmlOptions' => array('class'=>'form-control')
																			));
																			?>
																		</div>

																	</div>  


																	<div class="form-group">

																		<div class="col-sm-4 control-label">
																			<?php echo $form->labelEx($model,'kitas_enddate'); ?>
																		</div>   

																		<div class="col-sm-8">
																			<?php echo $form->error($model,'kitas_enddate'); ?>
																			<?php
																			$this->widget('CMaskedTextField', array(
																				'model' => $model,
																				'attribute' => 'kitas_enddate',
																				'mask' => '99-99-2019',
																				'htmlOptions' => array('class'=>'form-control')
																				));
																				?>
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
																				<?php echo $form->labelEx($model,'imta_extension_to'); ?>
																			</div>   

																			<div class="col-sm-8">
																				<?php echo $form->error($model,'imta_extension_to'); ?>
																				<div class="radio radio-info radio-inline">
																					<?php
																					echo $form->radioButtonList($model,'imta_extension_to',
																						array('0'=>'-','1'=>'I','2'=>'II','3'=>'III','4'=>'IV','5'=>'V'),
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

																			</div>  




																			<div class="form-group">

																				<div class="col-sm-4 control-label">
																					<?php echo $form->labelEx($model,'imta_date'); ?>
																				</div>   

																				<div class="col-sm-8">
																					<?php echo $form->error($model,'imta_date'); ?>
																					<?php
																					$this->widget('CMaskedTextField', array(
																						'model' => $model,
																						'attribute' => 'imta_date',
																						'mask' => '99-99-2019',
																						'htmlOptions' => array('class'=>'form-control')
																						));
																						?>
																					</div>

																				</div>  







																				<div class="form-group">

																					<div class="col-sm-4 control-label">
																						<?php echo $form->labelEx($model,'no_lk'); ?>
																					</div>   

																					<div class="col-sm-8">
																						<?php echo $form->error($model,'no_lk'); ?>
																						<?php echo $form->textField($model,'no_lk',array('class'=>'form-control')); ?>
																					</div>

																				</div>  


																				<div class="form-group">

																					<div class="col-sm-4 control-label">
																						<?php echo $form->labelEx($model,'lk_startdate'); ?>
																					</div>   

																					<div class="col-sm-8">
																						<?php echo $form->error($model,'lk_startdate'); ?>
																						<?php
																						$this->widget('CMaskedTextField', array(
																							'model' => $model,
																							'attribute' => 'lk_startdate',
																							'mask' => '99-99-2019',
																							'htmlOptions' => array('class'=>'form-control')
																							));
																							?>
																						</div>

																					</div>  




																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'lk_enddate'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'lk_enddate'); ?>
																							<?php
																							$this->widget('CMaskedTextField', array(
																								'model' => $model,
																								'attribute' => 'lk_enddate',
																								'mask' => '99-99-2019',
																								'htmlOptions' => array('class'=>'form-control')
																								));
																								?>

																							</div>

																						</div> 

																						<div class="form-group">

																							<div class="col-sm-4 control-label">
																								<?php echo $form->labelEx($model,'department'); ?>
																							</div>   

																							<div class="col-sm-8">
																								<?php echo $form->error($model,'department'); ?>
																								<?php echo $form->textField($model,'department',array('class'=>'form-control')); ?>
																							</div>

																						</div>  

																						<div class="form-group">

																							<div class="col-sm-4 control-label">
																								<?php echo $form->labelEx($model,'department_level'); ?>
																							</div>   

																							<div class="col-sm-8">
																								<?php echo $form->error($model,'department_level'); ?>
																								<div class="radio radio-success radio-inline">
																									<?php
																									echo $form->radioButtonList($model,'department_level',
																										array('1'=>'Pimpinan Manager','2'=>'Advisor','3'=>'Professional','4'=>'Supervisor'),
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

																							</div>  


																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'department_description'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'department_description'); ?>
																									<?php echo $form->textArea($model,'department_description',array('class'=>'form-control')); ?>
																								</div>

																							</div>  				

																							<div class="form-group">

																								<div class="col-sm-4 control-label">
																									<?php echo $form->labelEx($model,'department_education'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'department_education'); ?>
																									<div class="radio radio-warning radio-inline">
																										<?php
																										echo $form->radioButtonList($model,'department_education',
																											array('0'=>'-','1'=>'SMA','2'=>'D1','3'=>'D3','4'=>'S1','5'=>'S2'),
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

																								</div>  



																								<div class="form-group">

																									<div class="col-sm-4 control-label">
																										<?php echo $form->labelEx($model,'department_year'); ?>
																									</div>   

																									<div class="col-sm-8">
																										<?php echo $form->error($model,'department_year'); ?>
																										<div class="radio radio-danger radio-inline">
																											<?php
																											echo $form->radioButtonList($model,'department_year',
																												array('1'=>'1 Tahun','2'=>'3 Tahun','3'=>'5 Tahun','4'=>'10 Tahun','5'=>'15 Tahun'),
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

																									</div>  		


																									<div class="form-group">

																										<div class="col-sm-4 control-label">
																											<?php echo $form->labelEx($model,'department_place'); ?>
																										</div>   

																										<div class="col-sm-8">
																											<?php echo $form->error($model,'department_place'); ?>
																											<?php echo $form->textField($model,'department_place',array('class'=>'form-control')); ?>
																										</div>

																									</div> 


																									<div class="form-group">

																										<div class="col-sm-4 control-label">
																											<?php echo $form->labelEx($model,'companion_name'); ?>
																										</div>   

																										<div class="col-sm-8">
																											<?php echo $form->error($model,'companion_name'); ?>
																											<?php echo $form->textField($model,'companion_name',array('class'=>'form-control')); ?>
																										</div>

																									</div>  


																									<div class="form-group">

																										<div class="col-sm-4 control-label">
																											<?php echo $form->labelEx($model,'companion_education'); ?>
																										</div>   

																										<div class="col-sm-8">
																											<?php echo $form->error($model,'companion_education'); ?>
																											<div class="radio radio-info radio-inline">
																												<?php
																												echo $form->radioButtonList($model,'companion_education',
																													array('0'=>'-','1'=>'SMA','2'=>'D1','3'=>'D3','4'=>'S1','5'=>'S2'),
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

																										</div>  

																										<div class="form-group">

																											<div class="col-sm-4 control-label">
																												<?php echo $form->labelEx($model,'companion_department'); ?>
																											</div>   

																											<div class="col-sm-8">
																												<?php echo $form->error($model,'companion_department'); ?>
																												<?php echo $form->textField($model,'companion_department',array('class'=>'form-control')); ?>
																											</div>

																										</div>  

																										<div class="form-group">

																											<div class="col-sm-4 control-label">
																												<?php echo $form->labelEx($model,'companion_work_experience'); ?>
																											</div>   

																											<div class="col-sm-8">
																												<?php echo $form->error($model,'companion_work_experience'); ?>
																												<div class="radio radio-success radio-inline">
																													<?php
																													echo $form->radioButtonList($model,'companion_work_experience',
																														array('1'=>'1 Tahun','2'=>'3 Tahun','3'=>'5 Tahun','4'=>'10 Tahun','5'=>'15 Tahun'),
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

																											</div> 

																											<div class="form-group">

																												<div class="col-sm-4 control-label">
																													<?php echo $form->labelEx($model,'companion_address'); ?>
																												</div>   

																												<div class="col-sm-8">
																													<?php echo $form->error($model,'companion_address'); ?>
																													<?php echo $form->textArea($model,'companion_address',array('class'=>'form-control')); ?>
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


																									<script type="text/javascript">
																										jQuery(function($){
											        // Apabila ingin ada notifikasi
											        // $("#WnaImta_created_date").mask("99/99/9999",{completed:function(){alert("You typed the following: "+this.val());}});
											        $("#WnaImta_created_date").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
											        $("#WnaImta_date_report").mask("99/09/2016",{placeholder:"dd/mm/yyyy"});
											        $("#WnaImta_birth").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
											        $("#WnaImta_expired_date").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
											        // $("#WnaImta_no_registration").mask("560/999/<?php echo WnaImta::model()->romawi(substr(date('m'),1)); ?>/PTK/<?php echo date('Y'); ?>");
											        $("#WnaImta_no_registration").mask("560/999/V/PTK/<?php echo date('Y'); ?>");
														   // $("#WnaImta_no_rptka").mask("KEP 999/99999/RPTKA-BPM/2019");
														   // $("#WnaImta_no_imta").mask("KEP 99999/IMTA/BPMP/2019");
														   // $("#WnaImta_no_passport").mask("*********");
														});     	
													</script>
