<?php
/* @var $this JobController */
/* @var $model Job */

$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->name=>array('view','id'=>$model->id_job),
	'Edit',
	);

	$this->pageTitle='Edit Job';
	?>

	<?php echo $this->renderPartial('_form_update', array('model'=>$model)); ?>