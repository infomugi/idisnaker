<?php
/* @var $this ParticipationController */
/* @var $model Participation */

$this->breadcrumbs=array(
	'Participations'=>array('index'),
	$model->id_participation=>array('view','id'=>$model->id_participation),
	'Edit',
	);

	$this->pageTitle='Edit Participation';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>