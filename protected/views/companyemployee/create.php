<?php
/* @var $this CompanyemployeeController */
/* @var $model CompanyEmployee */

$this->breadcrumbs=array(
	'Company Employees'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add CompanyEmployee';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>