<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		)); ?>

		<div class="row">
			<?php echo $form->label($model,'id_department'); ?>
			<?php echo $form->textField($model,'id_department'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'code'); ?>
			<?php echo $form->textField($model,'code'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'education_id'); ?>
			<?php echo $form->textField($model,'education_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'name'); ?>
			<?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>30)); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>

		<?php $this->endWidget(); ?>

</div><!-- search-form -->