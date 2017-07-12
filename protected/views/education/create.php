<?php
/* @var $this EducationController */
/* @var $model Education */

$this->breadcrumbs=array(
	'Educations'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Education';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>