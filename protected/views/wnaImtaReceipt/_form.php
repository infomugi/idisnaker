<?php
/* @var $this WnaImtaReceiptController */
/* @var $model WnaImtaReceipt */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'wna-imta-receipt-form',
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
					<?php echo $form->labelEx($model,'signature_name'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'signature_name'); ?>
					<?php echo $form->textField($model,'signature_name',array('class'=>'form-control')); ?>
				</div>

			</div>  


			
			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'contact_name'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'contact_name'); ?>
					<?php echo $form->textField($model,'contact_name',array('class'=>'form-control')); ?>
				</div>

			</div>  


			
			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'contact_mobile'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'contact_mobile'); ?>
					<?php echo $form->textField($model,'contact_mobile',array('class'=>'form-control')); ?>
				</div>

			</div>  


			
			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'contact_email'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'contact_email'); ?>
					<?php echo $form->textField($model,'contact_email',array('class'=>'form-control')); ?>
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
					<?php echo $form->labelEx($model,'date_expired'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'date_expired'); ?>
					<?php
					$this->widget('CMaskedTextField', array(
						'model' => $model,
						'attribute' => 'date_expired',
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
							<?php echo $form->labelEx($model,'no_bap'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'no_bap'); ?>
							<?php echo $form->textField($model,'no_bap',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'no_recomended'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'no_recomended'); ?>
							<?php echo $form->textField($model,'no_recomended',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'date_recomended'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'date_recomended'); ?>
							<?php echo $form->textField($model,'date_recomended',array('class'=>'form-control')); ?>
						</div>

					</div>  




					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'letter_request'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'letter_request'); ?>
							<div class="radio radio-info radio-inline">
								<?php
								echo $form->radioButtonList($model,'letter_request',
									array('1'=>'Ada','0'=>'Tidak Ada'),
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
								<?php echo $form->labelEx($model,'letter_stuffing_imta'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'letter_stuffing_imta'); ?>
								<div class="radio radio-info radio-inline">
									<?php
									echo $form->radioButtonList($model,'letter_stuffing_imta',
										array('1'=>'Ada','0'=>'Tidak Ada'),
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
									<?php echo $form->labelEx($model,'letter_imta'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'letter_imta'); ?>
									<div class="radio radio-info radio-inline">
										<?php
										echo $form->radioButtonList($model,'letter_imta',
											array('1'=>'Ada','0'=>'Tidak Ada'),
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
										<?php echo $form->labelEx($model,'letter_rpkta'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'letter_rpkta'); ?>
										<div class="radio radio-info radio-inline">
											<?php
											echo $form->radioButtonList($model,'letter_rpkta',
												array('1'=>'Ada','0'=>'Tidak Ada'),
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
											<?php echo $form->labelEx($model,'letter_passport'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'letter_passport'); ?>
											<div class="radio radio-info radio-inline">
												<?php
												echo $form->radioButtonList($model,'letter_passport',
													array('1'=>'Ada','0'=>'Tidak Ada'),
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
												<?php echo $form->labelEx($model,'letter_kitas'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'letter_kitas'); ?>
												<div class="radio radio-info radio-inline">
													<?php
													echo $form->radioButtonList($model,'letter_kitas',
														array('1'=>'Ada','0'=>'Tidak Ada'),
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
													<?php echo $form->labelEx($model,'letter_tka_existence'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'letter_tka_existence'); ?>
													<div class="radio radio-info radio-inline">
														<?php
														echo $form->radioButtonList($model,'letter_tka_existence',
															array('1'=>'Ada','0'=>'Tidak Ada'),
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
														<?php echo $form->labelEx($model,'letter_permission'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'letter_permission'); ?>
														<div class="radio radio-info radio-inline">
															<?php
															echo $form->radioButtonList($model,'letter_permission',
																array('1'=>'Ada','0'=>'Tidak Ada'),
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
															<?php echo $form->labelEx($model,'letter_akta'); ?>
														</div>   

														<div class="col-sm-8">
															<?php echo $form->error($model,'letter_akta'); ?>
															<div class="radio radio-info radio-inline">
																<?php
																echo $form->radioButtonList($model,'letter_akta',
																	array('1'=>'Ada','0'=>'Tidak Ada'),
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
																<?php echo $form->labelEx($model,'letter_npwp'); ?>
															</div>   

															<div class="col-sm-8">
																<?php echo $form->error($model,'letter_npwp'); ?>
																<div class="radio radio-info radio-inline">
																	<?php
																	echo $form->radioButtonList($model,'letter_npwp',
																		array('1'=>'Ada','0'=>'Tidak Ada'),
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
																	<?php echo $form->labelEx($model,'letter_employment'); ?>
																</div>   

																<div class="col-sm-8">
																	<?php echo $form->error($model,'letter_employment'); ?>
																	<div class="radio radio-info radio-inline">
																		<?php
																		echo $form->radioButtonList($model,'letter_employment',
																			array('1'=>'Ada','0'=>'Tidak Ada'),
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
																		<?php echo $form->labelEx($model,'letter_appointment_tki'); ?>
																	</div>   

																	<div class="col-sm-8">
																		<?php echo $form->error($model,'letter_appointment_tki'); ?>
																		<div class="radio radio-info radio-inline">
																			<?php
																			echo $form->radioButtonList($model,'letter_appointment_tki',
																				array('1'=>'Ada','0'=>'Tidak Ada'),
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
																			<?php echo $form->labelEx($model,'letter_realization_of_training'); ?>
																		</div>   

																		<div class="col-sm-8">
																			<?php echo $form->error($model,'letter_realization_of_training'); ?>
																			<div class="radio radio-info radio-inline">
																				<?php
																				echo $form->radioButtonList($model,'letter_realization_of_training',
																					array('1'=>'Ada','0'=>'Tidak Ada'),
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
																				<?php echo $form->labelEx($model,'letter_organizational_structure'); ?>
																			</div>   

																			<div class="col-sm-8">
																				<?php echo $form->error($model,'letter_organizational_structure'); ?>
																				<div class="radio radio-info radio-inline">
																					<?php
																					echo $form->radioButtonList($model,'letter_organizational_structure',
																						array('1'=>'Ada','0'=>'Tidak Ada'),
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
																					<?php echo $form->labelEx($model,'letter_permit_domicile'); ?>
																				</div>   

																				<div class="col-sm-8">
																					<?php echo $form->error($model,'letter_permit_domicile'); ?>
																					<div class="radio radio-info radio-inline">
																						<?php
																						echo $form->radioButtonList($model,'letter_permit_domicile',
																							array('1'=>'Ada','0'=>'Tidak Ada'),
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
																						<?php echo $form->labelEx($model,'letter_insurance_tka'); ?>
																					</div>   

																					<div class="col-sm-8">
																						<?php echo $form->error($model,'letter_insurance_tka'); ?>
																						<div class="radio radio-info radio-inline">
																							<?php
																							echo $form->radioButtonList($model,'letter_insurance_tka',
																								array('1'=>'Ada','0'=>'Tidak Ada'),
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
																							<?php echo $form->labelEx($model,'letter_foto'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'letter_foto'); ?>
																							<div class="radio radio-info radio-inline">
																								<?php
																								echo $form->radioButtonList($model,'letter_foto',
																									array('1'=>'Ada','0'=>'Tidak Ada'),
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
																								<?php echo $form->labelEx($model,'letter_bpjs'); ?>
																							</div>   

																							<div class="col-sm-8">
																								<?php echo $form->error($model,'letter_bpjs'); ?>
																								<div class="radio radio-info radio-inline">
																									<?php
																									echo $form->radioButtonList($model,'letter_bpjs',
																										array('1'=>'Ada','0'=>'Tidak Ada'),
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
																									<?php echo $form->labelEx($model,'description'); ?>
																								</div>   

																								<div class="col-sm-8">
																									<?php echo $form->error($model,'description'); ?>
																									<?php echo $form->textField($model,'description',array('class'=>'form-control')); ?>
																								</div>

																							</div>  


																					<!-- <div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'status'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'status'); ?>
																							<?php echo $form->textField($model,'status',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'email'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'email'); ?>
																							<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'email_date'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'email_date'); ?>
																							<?php echo $form->textField($model,'email_date',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'supervision_id'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'supervision_id'); ?>
																							<?php echo $form->textField($model,'supervision_id',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'supervision_date'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'supervision_date'); ?>
																							<?php echo $form->textField($model,'supervision_date',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'general_id'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'general_id'); ?>
																							<?php echo $form->textField($model,'general_id',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'general_date'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'general_date'); ?>
																							<?php echo $form->textField($model,'general_date',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'bpmp_id'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'bpmp_id'); ?>
																							<?php echo $form->textField($model,'bpmp_id',array('class'=>'form-control')); ?>
																						</div>

																					</div>  


																					<div class="form-group">

																						<div class="col-sm-4 control-label">
																							<?php echo $form->labelEx($model,'bpmp_date'); ?>
																						</div>   

																						<div class="col-sm-8">
																							<?php echo $form->error($model,'bpmp_date'); ?>
																							<?php echo $form->textField($model,'bpmp_date',array('class'=>'form-control')); ?>
																						</div>

																					</div>   -->

																					<div class="form-group">
																						<div class="col-md-12">  
																						</br></br>
																						<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
																					</div>
																				</div>

																				<?php $this->endWidget(); ?>

</div></div><!-- form -->