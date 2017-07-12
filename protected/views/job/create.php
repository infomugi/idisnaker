<?php
/* @var $this JobController */
/* @var $model Job */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Job';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>