<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Perusahaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>