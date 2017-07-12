<?php
/* @var $this EventController */
/* @var $data Event */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id_event)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(

						'name',
						'description',
						array('name'=>'subdistrict_id','value'=>$data->Subdistrict->name),
						array('name'=>'village_id','value'=>$data->Village->name),
						'place',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
