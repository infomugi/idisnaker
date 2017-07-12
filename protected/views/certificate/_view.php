<?php
/* @var $this CertificateController */
/* @var $data Certificate */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->Event->name), array('view', 'id'=>$data->id_certificate)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'created_date',
						array('name'=>'event_id','value'=>$data->Event->name),
						array('name'=>'member_id','value'=>$data->Member->first_name . " " . $data->Member->last_name),
						array('name'=>'status','value'=>$data->status == 1 ? "Active" : "Disable"),
						array('name'=>'views','value'=>$data->views . " Views"),
						'last_view',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
