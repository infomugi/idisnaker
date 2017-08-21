<?php
/* @var $this WnaImtaReceiptController */
/* @var $model WnaImtaReceipt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_wna_imta_receipt'); ?>
		<?php echo $form->textField($model,'id_wna_imta_receipt'); ?>
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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_bap'); ?>
		<?php echo $form->textField($model,'no_bap',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_recomended'); ?>
		<?php echo $form->textField($model,'no_recomended',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_recomended'); ?>
		<?php echo $form->textField($model,'date_recomended'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_expired'); ?>
		<?php echo $form->textField($model,'date_expired'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_request'); ?>
		<?php echo $form->textField($model,'letter_request'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_stuffing_imta'); ?>
		<?php echo $form->textField($model,'letter_stuffing_imta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_imta'); ?>
		<?php echo $form->textField($model,'letter_imta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_rpkta'); ?>
		<?php echo $form->textField($model,'letter_rpkta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_passport'); ?>
		<?php echo $form->textField($model,'letter_passport'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_kitas'); ?>
		<?php echo $form->textField($model,'letter_kitas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_tka_existence'); ?>
		<?php echo $form->textField($model,'letter_tka_existence'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_permission'); ?>
		<?php echo $form->textField($model,'letter_permission'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_akta'); ?>
		<?php echo $form->textField($model,'letter_akta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_npwp'); ?>
		<?php echo $form->textField($model,'letter_npwp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_employment'); ?>
		<?php echo $form->textField($model,'letter_employment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_appointment_tki'); ?>
		<?php echo $form->textField($model,'letter_appointment_tki'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_realization_of_training'); ?>
		<?php echo $form->textField($model,'letter_realization_of_training'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_organizational_structure'); ?>
		<?php echo $form->textField($model,'letter_organizational_structure'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_permit_domicile'); ?>
		<?php echo $form->textField($model,'letter_permit_domicile'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_insurance_tka'); ?>
		<?php echo $form->textField($model,'letter_insurance_tka'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_foto'); ?>
		<?php echo $form->textField($model,'letter_foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'letter_bpjs'); ?>
		<?php echo $form->textField($model,'letter_bpjs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_date'); ?>
		<?php echo $form->textField($model,'email_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supervision_id'); ?>
		<?php echo $form->textField($model,'supervision_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supervision_date'); ?>
		<?php echo $form->textField($model,'supervision_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'general_id'); ?>
		<?php echo $form->textField($model,'general_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'general_date'); ?>
		<?php echo $form->textField($model,'general_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bpmp_id'); ?>
		<?php echo $form->textField($model,'bpmp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bpmp_date'); ?>
		<?php echo $form->textField($model,'bpmp_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->