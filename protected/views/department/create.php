<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Department';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>