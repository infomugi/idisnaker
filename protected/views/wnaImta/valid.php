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
	'SK TKA'=>array('index'),
	$model->id_wna_imta,
	);

$this->pageTitle='Valid WNA Imta';
?>

<center><H3>WNA Imta</H3></center>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table"),
	'attributes'=>array(
		// 'no_registration',
		// 'no_report',
		// 'date_report',
		'name',
		// 'place',
		// 'birth',
		// 'gender',
		array('name'=>'citizenship','value'=>$model->Citizenship->name),
		'department',
		array('name'=>'company_id','value'=>$model->Company->name),
		'no_passport',
		// 'no_rptka',
		// 'no_imta',
		// 'no_kitaskitap',
		'expired_date',
		array('label'=>'Status Surat','value'=>WnaExistence::model()->deadline($model->expired_date)),
		),
		)); ?>

<STYLE>
	th{width:10px;}
</STYLE>

