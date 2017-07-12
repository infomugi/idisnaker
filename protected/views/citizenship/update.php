<?php
/* @var $this CitizenshipController */
/* @var $model Citizenship */

$this->breadcrumbs=array(
	'Citizenships'=>array('index'),
	$model->name=>array('view','id'=>$model->id_citizenship),
	'Edit',
	);

	$this->pageTitle='Edit Citizenship';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>