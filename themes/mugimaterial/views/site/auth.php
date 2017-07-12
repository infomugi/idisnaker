<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->widget('ext.yii-toastr.MugiToastr', array(
  'flashMessagesOnly' => true, 
  'options' => array(
    "closeButton" => true,
    "debug" => true,
    "progressBar"=> true,
    "positionClass" => "toast-top-center",
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

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
  );
  ?>

  <div class="form-head mb20">
    <h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold"><?php echo YII::app()->name; ?></h1>
    <h5 class="text-normal h5 text-center">Sign In to Dashboard</h5>
  </div>

  <div class="form-container">

    <?php $form=$this->beginWidget('CActiveForm', array(
      'id'=>'login-form',
      'enableAjaxValidation' => true,
      'enableClientValidation' => true,
      'clientOptions' => array(
        'validateOnSubmit' => true,
        ),
      'errorMessageCssClass' => 'label label-info',
      'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
      )); ?>

      <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger alert-bold-border fade in alert-dismissable')); ?>

      <div class="md-input-container md-float-label">
       <?php echo $form->textField($model,'username', array('class' => 'md-input')); ?>
       <?php echo $form->labelEx($model,'username'); ?>
       <?php echo $form->error($model,'username'); ?>
     </div>

     <div class="md-input-container md-float-label">
       <?php echo $form->passwordField($model,'password', array('class' => 'md-input')); ?>
       <?php echo $form->labelEx($model,'password'); ?>
       <?php echo $form->error($model,'password'); ?>
     </div>     


     <div class="clearfix mb15">
       <?php echo CHtml::link('Forget your password ?',array('forgot'),array('class' => 'text-info small','title'=>'Forget your password ?'));?>
     </div>

     <div class="btn-group btn-group-justified mb15">
      <div class="btn-group">
       <?php echo CHtml::submitButton('Sign In', array('class' => 'btn btn-info')); ?>
     </div>
   </div> 

   <div class="clearfix text-center small">
    <p>
    Don't have an account? <?php echo CHtml::link('Create Now',array('register'),array('class' => 'text-center','title'=>'Create Now'));?>
   </p>
 </div>

 <?php $this->endWidget(); ?>

</div>


<?php if(Yii::app()->crugeconnector->hasEnabledClients){ ?>
        <center>
    <div class='crugeconnector'>
        <span>Use your Facebook or Google account:</span>
        <ul>
        <?php 
            $cc = Yii::app()->crugeconnector;
            foreach($cc->enabledClients as $key=>$config){
                $image = CHtml::image($cc->getClientDefaultImage($key));
                echo "<li>".CHtml::link($image,
                    $cc->getClientLoginUrl($key))."</li>";
            }
        ?>
        </ul>
    </div>
        </center>
    <?php } ?>


    <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '189361694420368',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name + response.email + response.first_name);
      document.getElementById('status').innerHTML =
        'Halo, ' + response.first_name + ' Nama ' + response.name + ' Email ' + response.email;
    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>