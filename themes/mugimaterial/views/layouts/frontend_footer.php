<!-- Bagian Frontend : Footer -->
<?php echo Yii::app()->db->createCommand("SELECT content FROM setting WHERE id_setting=17 AND active=1")->queryScalar();?>
