<!-- Bagian Frontend : Intro : Heading -->
<?php echo Yii::app()->db->createCommand("SELECT content FROM setting where id_setting=9")->queryScalar();?>
