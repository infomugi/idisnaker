<?php
/* @var $this ParticipationController */
/* @var $model Participation */

$this->breadcrumbs=array(
	'Participations'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Participation';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>