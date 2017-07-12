<?php
/* @var $this WniRecommendationPasporController */
/* @var $data WniRecommendationPaspor */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_wni_recommendation), array('view', 'id'=>$data->id_wni_recommendation)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_wni_recommendation',
		'created_date',
		'user_id',
		'registration_code',
		'registration_date',
		'recommendation_code',
		'recommendation_date',
		'government_code',
		'government_date',
		'institution_code',
		'institution_date',
		'job_seeker_code',
		'company_code',
		'name',
		'place',
		'birth',
		'gender',
		'address',
		'country_id',
		'program_type',
		'status',
		'publickey',
		'privatekey',
		'encrypt',
		'modulo',
		'views',
		'last_view',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
