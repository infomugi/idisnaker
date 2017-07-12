<?php
/* @var $this WnaExistenceController */
/* @var $model WnaExistence */

$this->breadcrumbs=array(
	'WNA Imtas'=>array('index'),
	$model->name=>array('view','id'=>$model->id_wna_imta),
	'Edit',
	);

$this->pageTitle='Edit Rekomendasi IMTA - '.$model->name.' - '.$model->Company->name;
?>

<?php echo $this->renderPartial('_form_update_bpmp', array('model'=>$model)); ?>