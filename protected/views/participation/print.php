<?php
/* @var $this ParticipationController */
/* @var $model Participation */

$this->widget('ext.yii-toastr.MugiToastr', array(
	'flashMessagesOnly' => true, 
	'options' => array(
		"closeButton" => true,
		"debug" => true,
		"progressBar"=> true,
		"positionClass" => "toast-bottom-left",
		"showDuration" => "600",
		"hideDuration" => "1000",
		"timeOut" => "15000",
		"extendedTimeOut" => "1000",
		"showEasing" => "swing",
		"hideEasing" => "linear",
		"showMethod" => "fadeIn",
		"hideMethod" => "fadeOut"
		)
	));

$this->pageTitle='Print Ticket';
?>

<div class="col-md-8">

	<H3><i class="fa fa-ticket"></i> Ticket #<?PHP echo $model->Event->name; ?></H3>
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
			array('label'=>'Ticket ID','value'=>"#".$model->id_participation),
			'created_date',
			array('name'=>'event_id','value'=>$model->Event->name),
			array('name'=>'member_id','value'=>$model->Member->first_name . " " . $model->Member->last_name),
			),
			)); ?>
			<div id="footer">This Ticket Generate by E-DISNAKER Management System - Printed at <?php echo date('d-m-Y h:i:s'); ?></div>


		</div>
		<div class="col-md-4">

			<H3><i class="fa fa-qrcode"></i> QR-Ticket</H3>
			<?php 
			$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
				'data' => 'http://192.168.43.29/project_skripsi_disnaker/participation/attend/id/'.$model->id_participation,
				'filename' => "ticket".$model->id_participation.$model->event_id.$model->member_id.".png",
				'subfolderVar' => false,
				'matrixPointSize' => 5,
				'displayImage'=>true, // default to true, if set to false display a URL path
				'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
				'matrixPointSize'=>6, // 1 to 10 only
				)) 
				?>

			</div>






			<STYLE>
				th{width:150px;}
				#footer{background:#000;color:#FFF;padding:10px;text-align: center;font-size: 10px}
			</STYLE>

