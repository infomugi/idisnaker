<?php
/* @var $this CertificateController */
/* @var $model Certificate */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	$model->id_certificate=>array('view','id'=>$model->id_certificate),
	'Edit',
	);

	$this->pageTitle='Edit Certificate';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>