<?php
/* @var $this CertificateController */
/* @var $model Certificate */
/* @var $form CActiveForm */
?>
<?php

?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'certificate-form',
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
					<?php echo $form->textField($model,'created_date',array('class'=>'form-control','value'=>date('Y-m-d h:i:s'))); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'event_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'event_id'); ?>
					<input type="text" value="<?php echo $event_name; ?>" class="form-control" disabled>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'member_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'member_id'); ?>
					<input type="text" value="<?php echo $fullname; ?>"  class="form-control" disabled>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'code'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'code'); ?>
					<?php echo $form->textField($model,'code',array('class'=>'form-control','value'=>$certificate_code)); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'publickey'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'publickey'); ?>
					<?php echo $form->textField($model,'publickey',array('class'=>'form-control','value'=>$publicKeys)); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'privatekey'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'privatekey'); ?>
					<?php echo $form->textField($model,'privatekey',array('class'=>'form-control','value'=>$privateKeys)); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'modulo'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'modulo'); ?>
					<?php echo $form->textField($model,'modulo',array('class'=>'form-control','value'=>$modulo)); ?>
				</div>

			</div>  			


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'encrypt'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'encrypt'); ?>
					<?php 
						$ciphertext = RSA::model()->encrypt($certificate_code,$publicKeys,$modulo);
					echo $form->textField($model,'encrypt',array('class'=>'form-control','value'=>$ciphertext)); ?>
				</div>

			</div>  			

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'decrypt'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'decrypt'); ?>
					<textarea class="form-control" disabled="true"><?php 
					$plaintext = RSA::model()->decrypt($ciphertext,$privateKeys,$modulo);
					echo $plaintext; ?></textarea>
				</div>

			</div>  			

			
			<div class="form-group">
				<div class="col-md-12">  
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Generate' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div>
</div><!-- form -->