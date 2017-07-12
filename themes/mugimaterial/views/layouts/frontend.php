<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo Yii::app()->db->createCommand("SELECT content FROM setting WHERE id_setting=15 AND active=1" )->queryScalar();?></title>
	<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	$cs = Yii::app()->getClientScript();
	Yii::app()->clientScript->registerCoreScript('jquery');
	?>  
	<?php echo Yii::app()->db->createCommand("SELECT content FROM setting WHERE id_setting=11 AND active=1" )->queryScalar();?>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/javascript/head.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/styles/screen.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/styles/forms.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/frontend/styles/print.css" media="print">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css">
	<body>
		<?php require_once('frontend_header.php');?>
		<div id="root">
			<header id="top">
				<?php require_once('frontend_navigation.php');?>
			</header>  			
			<?php echo $content; ?>
			<?php require_once('frontend_footer.php');?>
		</div>
	
		<?php 
		require_once('facebook_chat.php');
		live_chat_facebook("https://www.facebook.com/mugirachmat/",Yii::app()->baseUrl);
		?>

		<script type="text/javascript">
			head.load('<?php echo Yii::app()->theme->baseUrl; ?>/frontend/javascript/jquery.js', '<?php echo Yii::app()->theme->baseUrl; ?>/frontend/javascript/twitterFetcher.js', '<?php echo Yii::app()->theme->baseUrl; ?>/frontend/javascript/scripts.js', '<?php echo Yii::app()->theme->baseUrl; ?>/frontend/javascript/mobile.js', '<?php echo Yii::app()->theme->baseUrl; ?>/frontend/javascript/rewalk.js');
		</script>
</body>
</html>

