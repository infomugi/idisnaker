<?php
/* @var $this EducationController */
/* @var $model Education */

$this->breadcrumbs=array(
	'Educations'=>array('index'),
	$model->name=>array('view','id'=>$model->id_education),
	'Edit',
	);

	$this->pageTitle='Edit Education';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>