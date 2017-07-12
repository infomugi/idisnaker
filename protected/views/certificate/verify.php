<?php
/* @var $this MessageController */
/* @var $model Message */
/* @var $form CActiveForm */

$this->widget('ext.yii-toastr.MugiToastr', array(
  'flashMessagesOnly' => true, 
  'options' => array(
    "closeButton" => true,
    "debug" => true,
    "progressBar"=> true,
    "positionClass" => "toast-top-left",
    "showDuration" => "600",
    "hideDuration" => "1000",
    "timeOut" => "15000",
    "extendedTimeOut" => "1000",
    "showEasing" => "swing",
    "hideEasing" => "linear",
    "showMethod" => "fadeIn",
    "hideMethod" => "fadeOut"
    )
  ));

$this->pageTitle=Yii::app()->name . ' - Verify Certificate';
$this->breadcrumbs=array(
  'Forgot Password',
  );
  ?>

  <?php
  foreach(Yii::app()->user->getFlashes() as $key =>$message)
  {
    echo '<div class="alert alert-'.$key.'">'.$message.'</div>';
  }
  ?>

  <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'forgot-form',
      'enableAjaxValidation' => true,
      'enableClientValidation' => true,
      'clientOptions' => array(
        'validateOnSubmit' => true,
        ),
      'errorMessageCssClass' => 'label label-danger',
      'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
      )); ?>

      <?php echo $form->errorSummary($verifikasi, null, null, array('class' => 'alert alert-danger alert-bold-border fade in alert-dismissable')); ?>

  <div class="form-head mb20">
    <h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold"><?php echo YII::app()->name; ?></h1>
    <h5 class="text-normal h5 text-center">Verify Certificate</h5>
  </div>

    <div class="form-container">
      <form class="form-horizontal" action="javascript:;">
        <p class="small text-center mb20">Enter your private key. We'll verify certificate.</p>

        <div class="md-input-container md-float-label">

          <?php echo $form->textField($verifikasi,'privatekey', array('class' => 'md-input')); ?>
          <?php echo $form->labelEx($verifikasi,'privatekey'); ?>

        </div>

       <?php echo CHtml::submitButton('Verify', array('class' => 'btn btn-primary btn-block text-uppercase btn-lg')); ?>
      </form>
    </div>

 <?php $this->endWidget(); ?>







