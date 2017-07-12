<?php
/* @var $this CertificateController */
/* @var $model Certificate */

$this->widget('ext.yii-toastr.MugiToastr', array(
	'flashMessagesOnly' => true, 
	'options' => array(
		"closeButton" => true,
		"debug" => true,
		"progressBar"=> true,
		"positionClass" => "toast-top-left",
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

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	$model->id_certificate,
	);

$this->pageTitle='Valid Certificate';
?>

<center><H3>CERTIFICATE</H3></center>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table"),
	'attributes'=>array(
		'code',
		array('name'=>'event_id','value'=>$model->Event->name),
		array('name'=>'member_id','value'=>$model->Member->first_name . " " . $model->Member->last_name),
		),
		)); ?>

<STYLE>
	th{width:40px;}
</STYLE>

