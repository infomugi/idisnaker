<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'company-form',
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
					<?php echo $form->labelEx($model,'owner'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'owner'); ?>
					<?php echo $form->textField($model,'owner',array('class'=>'form-control')); ?>
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
					<?php echo $form->labelEx($model,'phone'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'phone'); ?>
					<?php echo $form->textField($model,'phone',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'faximile'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'faximile'); ?>
					<?php echo $form->textField($model,'faximile',array('class'=>'form-control')); ?>
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
					<?php echo $form->labelEx($model,'place'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'place'); ?>
					<?php
					echo $form->radioButtonList($model,'place',
						array('1'=>'Pusat','2'=>'Cabang'),
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
						<?php echo $form->labelEx($model,'district_id'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'district_id'); ?>
						<?php echo $form->dropDownList($model, "district_id",
							CHtml::listData(Subdistrict::model()->findAll(array('order'=>'name ASC')),
								'subdistrict_code', 'name'
								),
							array("empty"=>"-- Pilih Kecamatan --", 'class'=>'select2 form-control')
							); ?> 

						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'klui'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'klui'); ?>
							<?php echo $form->textField($model,'klui',array('class'=>'form-control')); ?>
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'category_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'category_id'); ?>
							<?php echo $form->dropDownList($model, "category_id",
								CHtml::listData(Industry::model()->findAll(array('order'=>'name ASC')),
									'id_industry', 'description'
									),
								array("empty"=>"-- Pilih Sektor Usaha --", 'class'=>'select2 form-control')
								); ?> 							
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'classification'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'classification'); ?>
								<?php echo $form->dropDownList($model,'classification',array(''=>'-- Pilih Klasifikasi --','1'=>'Besar','2'=>'Kecil','3'=>'Sedang','4'=>'Menengah','5'=>'< Kecil'),array('class'=>'select2 form-control')); ?>
							</div>

						</div>  


						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'type'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'type'); ?>
								<?php echo $form->dropDownList($model,'type',array(''=>'-- Pilih Badan Usaha --','1'=>'PMDN','2'=>'Swasta Nasional','3'=>'Perseorangan','4'=>'PMA','5'=>'BUMN','6'=>'Kopeasi','7'=>'Join Vuture','8'=>'Join Venture','9'=>'Perorangan'),array('class'=>'select2 form-control')); ?>
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
							<!-- 
							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'startdate'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'startdate'); ?>
									<?php
									$this->widget('zii.widgets.jui.CJuiDatePicker', array(
										'options'=>array(
											'showAnim'=>'fold',
											),
										'model'=>$model,
										'attribute'=>'startdate',
										'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->startdate)),
										'htmlOptions'=>array(
											'class'=>'form-control',
											'tabindex'=>2
											),
										'options'=>array(
											'dateFormat' => 'd-mm-yy',
												'showAnim'=>'drop',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
												'showButtonPanel'=>true,
												'changeMonth'=>true,
												'changeYear'=>true,
												'defaultDate'=>'+1w',
												'onSelect'=>'js:function(selectedDate){
													var option = "minDate",
													instance = $(this).data("datepicker");
													date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
													$("#'.CHtml::activeId($model, 'enddate').'").datepicker("option", option, date);
												}'
												),
										));
										?>
									</div>

								</div>  

								<div class="form-group">

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'enddate'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'enddate'); ?>
										<?php
										$this->widget('zii.widgets.jui.CJuiDatePicker', array(
											'options'=>array(
												'showAnim'=>'drop',
												),
											'model'=>$model,
											'attribute'=>'enddate',
											'htmlOptions'=>array(
												'class'=>'form-control',
												'tabindex'=>3
												),
											'options'=>array(
												'dateFormat'=>'yy-mm-dd',
												'showButtonPanel'=>true,
												'changeMonth'=>true,
												'changeYear'=>true,
												'defaultDate'=>'+1w',
												'onSelect'=>'js:function(selectedDate){
													var option = "maxDate",
													instance = $(this).data("datepicker");
													date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
													$("#'.CHtml::activeId($model, 'startdate').'").datepicker("option", option, date);
												}'
												),
											));
											?>
										</div>

									</div>  
								-->


								<div class="form-group">

									<div class="col-sm-4 control-label">
										<?php echo $form->labelEx($model,'business_license_from'); ?>
									</div>   

									<div class="col-sm-8">
										<?php echo $form->error($model,'business_license_from'); ?>
										<?php
										echo $form->radioButtonList($model,'business_license_from',
											array('1'=>'BKPM','2'=>'BPMP','3'=>'BPPT','4'=>'Kementerian Pendidikan'),
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
											<?php echo $form->labelEx($model,'business_license_no'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'business_license_no'); ?>
											<?php echo $form->textField($model,'business_license_no',array('class'=>'form-control')); ?>
										</div>

									</div>  


									<div class="form-group">

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'business_license_date'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'business_license_date'); ?>
											<?php
											$this->widget('CMaskedTextField', array(
												'model' => $model,
												'attribute' => 'business_license_date',
												'mask' => '99-99-9999',
												'htmlOptions' => array('class'=>'form-control')
												));
												?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'technical_code'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'technical_code'); ?>
												<?php echo $form->textField($model,'technical_code',array('class'=>'form-control')); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'employee_local'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'employee_local'); ?>
												<?php echo $form->textField($model,'employee_local',array('class'=>'form-control')); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'employee_strange'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'employee_strange'); ?>
												<?php echo $form->textField($model,'employee_strange',array('class'=>'form-control')); ?>
											</div>

										</div>  


										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'use_plan_tka'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'use_plan_tka'); ?>
												<?php
												echo $form->radioButtonList($model,'use_plan_tka',
													array('1'=>'Sudah Disahkan','0'=>'Belum Disahkan'),
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
													<?php echo $form->labelEx($model,'use_plan_tka_no'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'use_plan_tka_no'); ?>
													<?php echo $form->textField($model,'use_plan_tka_no',array('class'=>'form-control')); ?>
												</div>

											</div>  


											<div class="form-group">

												<div class="col-sm-4 control-label">
													<?php echo $form->labelEx($model,'use_plan_tka_date'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'use_plan_tka_date'); ?>
													<?php
													$this->widget('CMaskedTextField', array(
														'model' => $model,
														'attribute' => 'use_plan_tka_date',
														'mask' => '99-99-9999',
														'htmlOptions' => array('class'=>'form-control')
														));
														?>
													</div>

												</div>  


												<!-- 
												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'letterno'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'letterno'); ?>
														<?php echo $form->textField($model,'letterno',array('class'=>'form-control')); ?>
													</div>

												</div>  

												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'spsb'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'spsb'); ?>
														<?php echo $form->textField($model,'spsb',array('class'=>'form-control')); ?>
													</div>

												</div> 

												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'lksbipartit'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'lksbipartit'); ?>
														<?php echo $form->textField($model,'lksbipartit',array('class'=>'form-control')); ?>
													</div>

												</div> 	

												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'kopkar'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'kopkar'); ?>
														<?php echo $form->textField($model,'kopkar',array('class'=>'form-control')); ?>
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

											-->

											<div class="form-group">
												<div class="col-md-12">  
												</br></br>
												<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
											</div>
										</div>

										<?php $this->endWidget(); ?>

</div></div><!-- form -->