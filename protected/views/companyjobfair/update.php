<?php
/* @var $this CompanyjobfairController */
/* @var $model Job Fair */

$this->breadcrumbs=array(
	'Job Fairs'=>array('index'),
	$model->id_company_jobfair=>array('view','id'=>$model->id_company_jobfair),
	'Edit',
	);

	$this->pageTitle='Edit Job Fair';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>