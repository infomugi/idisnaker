<?php
/* @var $this WniRecommendationPasporController */
/* @var $model WniRecommendationPaspor */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'wni-recommendation-paspor-form',
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
							<?php echo $form->textField($model,'created_date'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'user_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'user_id'); ?>
							<?php echo $form->textField($model,'user_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'registration_code'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'registration_code'); ?>
							<?php echo $form->textField($model,'registration_code',array('size'=>60,'maxlength'=>100)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'registration_date'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'registration_date'); ?>
							<?php echo $form->textField($model,'registration_date'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'recommendation_code'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'recommendation_code'); ?>
							<?php echo $form->textField($model,'recommendation_code',array('size'=>60,'maxlength'=>100)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'recommendation_date'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'recommendation_date'); ?>
							<?php echo $form->textField($model,'recommendation_date'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'government_code'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'government_code'); ?>
							<?php echo $form->textField($model,'government_code',array('size'=>60,'maxlength'=>100)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'government_date'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'government_date'); ?>
							<?php echo $form->textField($model,'government_date'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'institution_code'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'institution_code'); ?>
							<?php echo $form->textField($model,'institution_code',array('size'=>60,'maxlength'=>100)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'institution_date'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'institution_date'); ?>
							<?php echo $form->textField($model,'institution_date'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'job_seeker_code'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'job_seeker_code'); ?>
							<?php echo $form->textField($model,'job_seeker_code',array('size'=>60,'maxlength'=>100)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'company_code'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'company_code'); ?>
							<?php echo $form->textField($model,'company_code'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'name'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'name'); ?>
							<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>150)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'place'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'place'); ?>
							<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>100)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'birth'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'birth'); ?>
							<?php echo $form->textField($model,'birth'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'gender'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'gender'); ?>
							<?php echo $form->textField($model,'gender'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'address'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'address'); ?>
							<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'country_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'country_id'); ?>
							<?php echo $form->textField($model,'country_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'program_type'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'program_type'); ?>
							<?php echo $form->textField($model,'program_type'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'status'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'status'); ?>
							<?php echo $form->textField($model,'status'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'publickey'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'publickey'); ?>
							<?php echo $form->textArea($model,'publickey',array('rows'=>6, 'cols'=>50)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'privatekey'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'privatekey'); ?>
							<?php echo $form->textArea($model,'privatekey',array('rows'=>6, 'cols'=>50)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'encrypt'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'encrypt'); ?>
							<?php echo $form->textArea($model,'encrypt',array('rows'=>6, 'cols'=>50)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'modulo'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'modulo'); ?>
							<?php echo $form->textArea($model,'modulo',array('rows'=>6, 'cols'=>50)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'views'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'views'); ?>
							<?php echo $form->textField($model,'views'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'last_view'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'last_view'); ?>
							<?php echo $form->textField($model,'last_view'),array('class'=>'form-control')); ?>
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