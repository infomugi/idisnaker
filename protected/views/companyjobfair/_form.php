<?php
/* @var $this CompanyjobfairController */
/* @var $model Job Fair */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'companyjobfair-form',
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
						<?php echo $form->labelEx($model,'job_id'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'job_id'); ?>
						<?php echo $form->dropDownList($model, "job_id",
							CHtml::listData(Job::model()->findAll(array('condition'=>'status=1','order'=>'name ASC')),
								'id_job', 'name'
								),
							array("empty"=>"-- Pilih Tawaran Jabatan --", 'class'=>'select2 form-control')
							); ?> 
						</div>

					</div>  


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'education_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'education_id'); ?>
							<?php echo $form->dropDownList($model, "education_id",
								CHtml::listData(Education::model()->findAll(array('order'=>'name ASC')),
									'id_education', 'name'
									),
								array("empty"=>"-- Pilih Pendidikan --", 'class'=>'select2 form-control')
								); ?> 
							</div>

						</div>  

						<div class="form-group">

							<div class="col-sm-4 control-label">
								<?php echo $form->labelEx($model,'department'); ?>
							</div>   

							<div class="col-sm-8">
								<?php echo $form->error($model,'department'); ?>
								<div class="checkbox checkbox-success checkbox-circle">
									<?php echo $form->checkBoxlist($model,'department',CHtml::listData(Department::model()->findAll(array('order'=>'name ASC')),
										'name', 'name'
										)); ?>
									</div>
								</div>

							</div>  				


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'skill'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'skill'); ?>
									<?php echo $form->textArea($model,'skill',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'experience'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'experience'); ?>
									<div class="radio radio-info radio-inline">
										<?php echo $form->radioButtonList($model,'experience',array('0'=>'-','1'=>'1 Tahun','2'=>'2 Tahun','3'=>'3 Tahun','4'=>'4 Tahun','5'=>'5 Tahun')); ?>
									</div>
								</div>

							</div>  				


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'age'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'age'); ?>
									<?php echo $form->textField($model,'age',array('class'=>'form-control')); ?>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'gender'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'gender'); ?>
									<div class="radio radio-info radio-inline">
										<?php echo $form->radioButtonList($model,'gender',array('1'=>'Laki-Laki','2'=>'Perempuan','3'=>'L/P')); ?>
									</div>
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'quantity'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'quantity'); ?>
									<?php echo $form->textField($model,'quantity',array('class'=>'form-control')); ?>
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