<?php
/* @var $this WniRecommendationPasporController */
/* @var $model WniRecommendationPaspor */

$this->breadcrumbs=array(
	'Wni Recommendation Paspors'=>array('index'),
	$model->name=>array('view','id'=>$model->id_wni_recommendation),
	'Edit',
	);

	$this->pageTitle='Edit WniRecommendationPaspor';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>