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
	'Generate',
	);

$this->pageTitle='Generate Certificate';
?>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'publicKeys'=>$publicKeys,
	'privateKeys'=>$privateKeys,
	'modulo'=>$modulo,
	'fullname'=>$fullname,
	'event_name'=>$event_name,
	'certificate_code'=>$certificate_code,
	)); ?>