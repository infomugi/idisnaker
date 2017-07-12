<?php
/* @var $this WniRecommendationPasporController */
/* @var $model WniRecommendationPaspor */

$this->breadcrumbs=array(
	'Wni Recommendation Paspors'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add WniRecommendationPaspor';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>