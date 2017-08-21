<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>

  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="Template YII oleh Mugi Rachmat - www.infomugi.com">
  <meta name="author" content="Mugi Rachmat">
  <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/image/favicon/favicon.png">
  <script>
    window.print();
  </script>
</head>

<style type="text/css">
  h1,h2{font-family: times;margin-top: 0px;margin-bottom: }
  .header{text-align: center;line-height: 10px;}
  .content{font-size: 14px;}
  .kotak{width: 100%;}
  h1,h2{line-height: 5px}
  h1{margin-bottom: 15px}
  h2{margin-bottom: 25px}
  .kiri{width: 55%;float: left;text-align: left;}
  .kanan{width: 45%;float: right;}
  .header-kiri{width: 15%;float: left;}
  .header-kanan{width: 85%;float: right;}  
  .konten-header-kanan{margin-top: 11px;}  
  .isi, .jadwal{width: 95%;float: right;}
  .judul{font-size: 28px;font-family: tahoma}
  .info{font-size: 17px;letter-spacing: 1px;}
  .subinfo{font-size: 12px;margin-bottom: 2px;letter-spacing: 2px;}
  body{font-size: 16px;font-family: times;color:#000000;}
  .line{background: #FFF;padding: 0px;margin-top: 2px}
  .line2{background: #FFF;padding: 1px;margin-top: 2px}
  .line3{background: #FFF;padding: 2px;margin-top: 2px}
  
</style>

<body class="">
  <div id="invoice" style="width: 1200px;text-align: center;padding: 10px;height:820px">
    
    <div class="content">
      <?php echo $content; ?>
    </div>

  </div>
</body>
</html>


