<?php
/* @var $this WnaExistenceController */
/* @var $model WnaExistence */

$this->breadcrumbs=array(
	'Wna Existences'=>array('index'),
	$model->name=>array('view','id'=>$model->id_wna_existence),
	'Edit',
	);

	$this->pageTitle='Edit Keberadaan TKA';
	?>

	<?php echo $this->renderPartial('_form_update', array('model'=>$model)); ?>