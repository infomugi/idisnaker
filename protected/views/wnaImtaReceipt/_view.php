<?php
/* @var $this WnaImtaReceiptController */
/* @var $data WnaImtaReceipt */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_wna_imta_receipt), array('view', 'id'=>$data->id_wna_imta_receipt)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_wna_imta_receipt',
		'created_date',
		'user_id',
		'name',
		'company_id',
		'no_bap',
		'no_recomended',
		'date_recomended',
		'date_expired',
		'letter_request',
		'letter_stuffing_imta',
		'letter_imta',
		'letter_rpkta',
		'letter_passport',
		'letter_kitas',
		'letter_tka_existence',
		'letter_permission',
		'letter_akta',
		'letter_npwp',
		'letter_employment',
		'letter_appointment_tki',
		'letter_realization_of_training',
		'letter_organizational_structure',
		'letter_permit_domicile',
		'letter_insurance_tka',
		'letter_foto',
		'letter_bpjs',
		'description',
		'status',
		'email',
		'email_date',
		'supervision_id',
		'supervision_date',
		'general_id',
		'general_date',
		'bpmp_id',
		'bpmp_date',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
