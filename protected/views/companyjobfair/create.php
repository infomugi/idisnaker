<?php
/* @var $this CompanyjobfairController */
/* @var $model Job Fair */

$this->breadcrumbs=array(
	'Job Fairs'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Job Fair';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>