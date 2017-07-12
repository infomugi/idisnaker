<?php
/* @var $this CompanyemployeeController */
/* @var $data CompanyEmployee */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_company_employee), array('view', 'id'=>$data->id_company_employee)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_company_employee',
		'created_date',
		'update_date',
		'user_id',
		'company_id',
		'year',
		'employee_male',
		'employee_female',
		'employee_strange_male',
		'employee_strange_female',
		'status',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
