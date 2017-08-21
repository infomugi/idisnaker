<?php
/* @var $this WnaImtaReceiptController */
/* @var $model WnaImtaReceipt */

$this->breadcrumbs=array(
	'Wna Imta Receipts'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add WnaImtaReceipt';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>