<?php
/* @var $this CompanyjobfairController */
/* @var $data Job Fair */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->id_company_jobfair), array('view', 'id'=>$data->id_company_jobfair)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'id_company_jobfair',
						'created_date',
						'user_id',
						'company_id',
						'job_id',
						'education_id',
						'skill',
						'age',
						'gender',
						'quantity',
						'status',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
