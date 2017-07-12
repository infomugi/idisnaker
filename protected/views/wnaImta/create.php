<?php
/* @var $this WnaExistenceController */
/* @var $model WnaExistence */

$this->breadcrumbs=array(
	'WNA Imta'=>array('index'),
	'Add',
	);

$this->pageTitle='Add WNA Imta';
?>

<?php echo $this->renderPartial('_form', 
	array(
		'model'=>$model,
		// 'publicKeys'=>$publicKeys,
		// 'privateKeys'=>$privateKeys,
		// 'modulo'=>$modulo,
		)); ?>