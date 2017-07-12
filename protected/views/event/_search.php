<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_event'); ?>
		<?php echo $form->textField($model,'id_event'); ?>
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
		<?php echo $form->label($model,'subdistrict_id'); ?>
		<?php echo $form->textField($model,'subdistrict_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'village_id'); ?>
		<?php echo $form->textField($model,'village_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chief_instance'); ?>
		<?php echo $form->textField($model,'chief_instance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chief_event'); ?>
		<?php echo $form->textField($model,'chief_event'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chief_division'); ?>
		<?php echo $form->textField($model,'chief_division'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agrement_date'); ?>
		<?php echo $form->textField($model,'agrement_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'instructor_id'); ?>
		<?php echo $form->textField($model,'instructor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'degree_date'); ?>
		<?php echo $form->textField($model,'degree_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'committee_code'); ?>
		<?php echo $form->textField($model,'committee_code',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'committee_date'); ?>
		<?php echo $form->textField($model,'committee_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'certificate_code'); ?>
		<?php echo $form->textField($model,'certificate_code',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'certificate_date'); ?>
		<?php echo $form->textField($model,'certificate_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'treasurer_id'); ?>
		<?php echo $form->textField($model,'treasurer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invitation_date'); ?>
		<?php echo $form->textField($model,'invitation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'socialization_date'); ?>
		<?php echo $form->textField($model,'socialization_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recrutment_date'); ?>
		<?php echo $form->textField($model,'recrutment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'opening_date'); ?>
		<?php echo $form->textField($model,'opening_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'closhing_date'); ?>
		<?php echo $form->textField($model,'closhing_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_implementation_date'); ?>
		<?php echo $form->textField($model,'start_implementation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_implementation_date'); ?>
		<?php echo $form->textField($model,'end_implementation_date'); ?>
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