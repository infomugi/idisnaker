<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->id_event=>array('view','id'=>$model->id_event),
	'Edit',
	);

	$this->pageTitle='Edit Event';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>