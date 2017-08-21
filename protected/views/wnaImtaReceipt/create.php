<?php
/* @var $this WnaImtaReceiptController */
/* @var $model WnaImtaReceipt */

$this->breadcrumbs=array(
	'Kelola Tanda Terima IMTA'=>array('admin'),
	'Add',
	);

$this->pageTitle='Buat Tanda Terima IMTA';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>