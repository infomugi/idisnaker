<?php

class CertificateController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			// 'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('create','update','view','delete','admin','index','changeimage','enable','disable','print','generate'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('allow',
				'actions'=>array('view','index','print'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==2',
				),
			array('allow',
				'actions'=>array('decrypt','valid'),
				'users'=>array('*'),
				),							
			array('deny',
				'users'=>array('*'),
				),
			);
	}


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		if(Yii::app()->request->isAjaxRequest)
		{
			$this->renderPartial('view',array(
				'model'=>$this->loadModel($id),
				), false, true);
		}
		else
		{
			$this->render('view',array(
				'model'=>$this->loadModel($id),
				));
		}
	}

	public function actionDecrypt($verify)
	{
		$this->layout = "signin";
		$verifikasi=new Certificate;
		$verifikasi->setScenario('verify');

		$data=$this->loadEncrypt($verify);

		if(isset($_POST['Certificate']))
		{
			$verifikasi->attributes=$_POST['Certificate'];

			$privateKeys = base_convert($verifikasi->privatekey,16,10);
			$plaintext = RSA::model()->decrypt($data->encrypt,$privateKeys,$data->modulo);
			if($verifikasi->privatekey==""){
				Yii::app()->user->setFlash('Info','Enter your verification code');
				$this->refresh();				
			}else if($plaintext==$data->code){
				Yii::app()->user->setFlash('Success','Certificate '.$data->code.' Valid');
				$this->redirect(array('valid','verify'=>$data->encrypt));
			}else{	
				// Yii::app()->user->setFlash('Warning','Plaintext - '.$plaintext.' Key : '.$privateKeys.' | Modulo : '.$data->modulo);
				Yii::app()->user->setFlash('Warning','Your verification code not valid');
				$this->refresh();
			}

		}

		$this->render('verify',array(
			'verifikasi'=>$verifikasi,
		));
	}	


	public function actionValid($verify)
	{
			$this->layout = "signin";
			$model=Certificate::model()->findByAttributes(array('encrypt'=>$verify));
			$model->views += 1;
			$model->last_view = date('Y-m-d h:i:s');
			$model->save();	

			//Notifikasi Reset Password
			//$userid,$description,$activityid,$type,$point,$status
			$ip = Yii::app()->request->getUserHostAddress();					
			Activities::model()->my(1,"Someone has view certificate from IP : ".$ip,1,21,1,9);					

			//Send Email
			Yii::import('ext.yii-mail.YiiMailMessage');
			$email = new YiiMailMessage;
			$email->subject = "Seseorang telah melakukan Audit terhadap Sertifikat ".$model->code;
			$email->addTo('infomugi@gmail.com');
			$email->setFrom(array('infomugi.com@gmail.com' => 'E-DISNAKER'));

			$message_template = $this->renderPartial('/email/forgotpassword',
				array(
					'email'=>"info@disnaker.com",
					'title'=>"Verifikasi Data Sertifikat No. ".$model->code,
					'message'=>"Seseorang telah melihat data sertifikat pelatihan dengan Nomor Registrasi : <b>".$model->code."</b> atas Nama <b>".$model->Member->first_name."</b> dengan event <b>".$model->Event->name."</b> pada tanggal <i>".$model->last_view."</i> oleh IP Address".$ip." & Browser :". $_SERVER['HTTP_USER_AGENT'],
					'link'=>"http://192.168.43.29/project_skripsi_disnaker/verify/".$model->encrypt,
					'button'=>"Lihat Data"
					),TRUE);
			$email->setBody($message_template, 'text/html');
			Yii::app()->mail->send($email);	

			$this->render('valid',array(
				'model'=>$this->loadEncrypt($verify),
			));
	}	

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($participation)
	{
		$model=new Certificate;

		//Find Member & Event
		$attend=Participation::model()->findByPk($participation);			

		//Make Public and Private Keys
		$p = RSA::model()->generatePrimeP(1);
		$q = RSA::model()->generatePrimeQ(0);
		$modulo = RSA::model()->generateModulo($p,$q);
		$totient = RSA::model()->generateTotient($p,$q);
		$publicKeys = RSA::model()->generatePublicKeys($totient);
		$privateKeys = RSA::model()->generatePrivateKeys($totient,$publicKeys);		
		$member_id = $attend->member_id;	
		$event_id = $attend->event_id;	

		//Find Event Detail
		$event=Event::model()->findByPk($event_id);

		//Find Member Detail
		$member=Users::model()->findByPk($member_id);	

		//Show Full Name Member
		$fullname = $member->first_name . " " . $member->last_name;		

		//Show Name Event
		$event_name = $event->name;		
		
		//Show Certificate Code
		$certificate_code = $event->certificate_code."/".$participation;		
		
		if(isset($_POST['Certificate']))
		{
			$model->attributes=$_POST['Certificate'];
			$model->member_id = $member_id;
			$model->event_id = $event_id;
			$model->status = 1;
			$model->views = 0;
			$model->last_view = date('Y-m-d h:i:s');
			$model->created_date = date('Y-m-d h:i:s');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_certificate));
		}

		$this->render('create',array(
			'model'=>$model,
			'publicKeys'=>$publicKeys,
			'privateKeys'=>$privateKeys,
			'modulo'=>$modulo,
			'fullname'=>$fullname,
			'event_name'=>$event_name,
			'certificate_code'=>$certificate_code,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Certificate']))
		{
			$model->attributes=$_POST['Certificate'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_certificate));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Certificate');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Certificate('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Certificate']))
			$model->attributes=$_GET['Certificate'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Certificate the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Certificate::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadEncrypt($verify)
	{
		// $data=Certificate::model()->findByPk($verify);

		$data=Certificate::model()->findByAttributes(array('encrypt'=>$verify));
		if($data===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $data;
	}	

	/**
	 * Performs the AJAX validation.
	 * @param Certificate $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='certificate-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionEnable($id)
	{
		$model=$this->loadModel($id);
		$model->status = 1;
		$model->save();
		$this->redirect(array('index'));
	}	

	public function actionDisable($id)
	{
		$model=$this->loadModel($id);
		$model->status = 0;
		$model->save();
		$this->redirect(array('index'));
	}	

   	public function actionPrint($id)
	{
		$this->layout = "print_landscape";
		$this->render('htmlpage',array(
			'model'=>$this->loadModel($id),
		));		
	}		

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionGenerate($participation)
	{
		$model=new Certificate;

		//Find Member & Event
		$attend=Participation::model()->findByPk($participation);			

		//Make Public and Private Keys
		$p = RSA::model()->generatePrimeP(1);
		$q = RSA::model()->generatePrimeQ(0);
		$modulo = RSA::model()->generateModulo($p,$q);
		$totient = RSA::model()->generateTotient($p,$q);
		$publicKeys = RSA::model()->generatePublicKeys($totient);
		$privateKeys = RSA::model()->generatePrivateKeys($totient,$publicKeys);		
		$member_id = $attend->member_id;	
		$event_id = $attend->event_id;	

		//Find Event Detail
		$event=Event::model()->findByPk($event_id);

		//Find Member Detail
		$member=Users::model()->findByPk($member_id);	

		//Show Full Name Member
		$fullname = $member->first_name . " " . $member->last_name;		

		//Show Name Event
		$event_name = $event->name;		
		
		//Show Certificate Code
		$certificate_code = $event->certificate_code."/".$participation;		
		
		//Automate Generate Certificate
		$model->member_id = $member_id;
		$model->event_id = $event_id;
		$model->status = 1;
		$model->views = 0;
		$model->last_view = date('Y-m-d h:i:s');
		$model->created_date = date('Y-m-d h:i:s');
		$model->publicKeys = $publicKeys;
		$model->privateKeys = $privateKeys;
		$model->modulo = $modulo;
		$model->code = $certificate_code;
		$model->encrypt = RSA::model()->encrypt($certificate_code,$publicKeys,$modulo);
		if($model->save())
		$this->redirect(array('view','id'=>$model->id_certificate));
	}			
}
