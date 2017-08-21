<?php
/* @var $this WnaImtaReceiptController */
/* @var $model WnaImtaReceipt */

$this->breadcrumbs=array(
	'Wna Imta Receipts'=>array('index'),
	$model->name=>array('view','id'=>$model->id_wna_imta_receipt),
	'Edit',
	);

	$this->pageTitle='Edit WnaImtaReceipt';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>