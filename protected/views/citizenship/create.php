<?php
/* @var $this CitizenshipController */
/* @var $model Citizenship */

$this->breadcrumbs=array(
	'Citizenships'=>array('index'),
	'Add',
	);

$this->pageTitle='Add Citizenship';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>