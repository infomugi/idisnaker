<?php
/* @var $this CompanyjobfairController */
/* @var $model Job Fair */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		)); ?>

		<div class="row">
			<?php echo $form->label($model,'id_company_jobfair'); ?>
			<?php echo $form->textField($model,'id_company_jobfair'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'created_date'); ?>
			<?php echo $form->textField($model,'created_date'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'user_id'); ?>
			<?php echo $form->textField($model,'user_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'company_id'); ?>
			<?php echo $form->textField($model,'company_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'job_id'); ?>
			<?php echo $form->textField($model,'job_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'education_id'); ?>
			<?php echo $form->textField($model,'education_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'skill'); ?>
			<?php echo $form->textArea($model,'skill',array('rows'=>6, 'cols'=>50)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'age'); ?>
			<?php echo $form->textField($model,'age'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'gender'); ?>
			<?php echo $form->textField($model,'gender',array('size'=>5,'maxlength'=>5)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'quantity'); ?>
			<?php echo $form->textField($model,'quantity'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'status'); ?>
			<?php echo $form->textField($model,'status'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>

		<?php $this->endWidget(); ?>

</div><!-- search-form -->