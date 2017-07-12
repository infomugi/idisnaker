<?php
/* @var $this WnaExistenceController */
/* @var $data WnaExistence */
?>

<div class="col-xs-12 col-md-12 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->no_registration . " - " . $data->name), array('view', 'id'=>$data->id_wna_imta)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'created_date',
						'user_id',
						'no_registration',
						'no_report',
						'date_report',
						'name',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
