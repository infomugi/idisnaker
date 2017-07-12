<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs=array(
	'Events'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Event';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>