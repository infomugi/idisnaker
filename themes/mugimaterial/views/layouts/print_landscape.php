<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="Template YII oleh Mugi Rachmat - www.infomugi.com">
  <meta name="author" content="Mugi Rachmat">
  <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/image/favicon/favicon.png">
  <script>
    function cetak(){
      document.getElementById("p").style.visibility="hidden";
      window.print();
    }
  </script>
</head>


<body class="">
  <div id="invoice" style="width: 1200px;text-align: center;padding: 10px;height:620px">

               
                    <?php echo $content; ?>
         

                </div>
                
            </body>
            </html>


