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

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bpmp_no'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bpmp_no'); ?>
					<?php echo $form->textField($model,'bpmp_no',array('class'=>'form-control')); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bpmp_date'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bpmp_date'); ?>
					<?php
					$this->widget('CMaskedTextField', array(
						'model' => $model,
						'attribute' => 'bpmp_date',
						'mask' => '99-99-2019',
						'htmlOptions' => array('class'=>'form-control')
						));
						?>

					</div>

				</div>  

				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'bpmp_expire_date'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'bpmp_expire_date'); ?>
						<?php
						$this->widget('CMaskedTextField', array(
							'model' => $model,
							'attribute' => 'bpmp_expire_date',
							'mask' => '99-99-2019',
							'htmlOptions' => array('class'=>'form-control')
							));
							?>

						</div>

					</div>  					


					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'disnaker_no'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'disnaker_no'); ?>
							<?php echo $form->textField($model,'disnaker_no',array('class'=>'form-control')); ?>
						</div>

					</div>  

					<div class="form-group">

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'disnaker_date'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'disnaker_date'); ?>
							<?php
							$this->widget('CMaskedTextField', array(
								'model' => $model,
								'attribute' => 'disnaker_date',
								'mask' => '99-99-2019',
								'htmlOptions' => array('class'=>'form-control')
								));
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



				<script type="text/javascript">
					jQuery(function($){
						$("#WnaImta_bpmp_no").mask("99999/IMTA-DPMPTSP/<?php echo date('Y'); ?>");
						$("#WnaImta_disnaker_no").mask("569/9999-PTK/2019");
						$("#WnaImta_bpmp_expire_date").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
						$("#WnaImta_bpmp_date").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
						$("#WnaImta_disnaker_date").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
					});     	
				</script>
