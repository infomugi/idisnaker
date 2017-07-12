<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->name=>array('view','id'=>$model->id_department),
	'Edit',
	);

	$this->pageTitle='Edit Department';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>