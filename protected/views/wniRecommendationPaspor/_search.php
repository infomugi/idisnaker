<?php
/* @var $this WniRecommendationPasporController */
/* @var $model WniRecommendationPaspor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_wni_recommendation'); ?>
		<?php echo $form->textField($model,'id_wni_recommendation'); ?>
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
		<?php echo $form->label($model,'registration_code'); ?>
		<?php echo $form->textField($model,'registration_code',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registration_date'); ?>
		<?php echo $form->textField($model,'registration_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recommendation_code'); ?>
		<?php echo $form->textField($model,'recommendation_code',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recommendation_date'); ?>
		<?php echo $form->textField($model,'recommendation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'government_code'); ?>
		<?php echo $form->textField($model,'government_code',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'government_date'); ?>
		<?php echo $form->textField($model,'government_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institution_code'); ?>
		<?php echo $form->textField($model,'institution_code',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institution_date'); ?>
		<?php echo $form->textField($model,'institution_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_seeker_code'); ?>
		<?php echo $form->textField($model,'job_seeker_code',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_code'); ?>
		<?php echo $form->textField($model,'company_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birth'); ?>
		<?php echo $form->textField($model,'birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country_id'); ?>
		<?php echo $form->textField($model,'country_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_type'); ?>
		<?php echo $form->textField($model,'program_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'publickey'); ?>
		<?php echo $form->textArea($model,'publickey',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'privatekey'); ?>
		<?php echo $form->textArea($model,'privatekey',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'encrypt'); ?>
		<?php echo $form->textArea($model,'encrypt',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modulo'); ?>
		<?php echo $form->textArea($model,'modulo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_view'); ?>
		<?php echo $form->textField($model,'last_view'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->