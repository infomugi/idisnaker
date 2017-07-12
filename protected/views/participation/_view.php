<?php
/* @var $this ParticipationController */
/* @var $data Participation */
?>

<div class="col-xs-12 col-md-12 col-lg-12">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				
				<br />

				<H3><i class="fa fa-ticket"></i> Ticket ID #<?php echo CHtml::link(CHtml::encode($data->id_participation), array('view', 'id'=>$data->id_participation)); ?></H3>

				
			</div>
			<div class="box-body">

				<div class="col-md-8">


					<?php $this->widget('zii.widgets.CDetailView', array(
						'data'=>$data,
						'htmlOptions'=>array("class"=>"table"),
						'attributes'=>array(
							'id_participation',
							'created_date',
							array('name'=>'event_id','value'=>$data->Event->name),
							array('name'=>'member_id','value'=>$data->Member->first_name . " " . $data->Member->last_name),
							array('name'=>'status','value'=>Participation::model()->status($data->status)),
							),
							)); ?>


						</div>
						<div class="col-md-4">

							<?php 
							$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
								'data' => 'http://192.168.43.29/project_skripsi_disnaker/participation/attend/id/'.$data->id_participation,
								'filename' => "ticket".$data->id_participation.$data->event_id.$data->member_id.".png",
								'subfolderVar' => false,
								'matrixPointSize' => 5,
																		'displayImage'=>true, // default to true, if set to false display a URL path
																		'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
																		'matrixPointSize'=>6, // 1 to 10 only
																		)) 
																		?>

																	</div>

																</div><!-- /.box-body -->
															</div><!-- /.box -->
														</div>
