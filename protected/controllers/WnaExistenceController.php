<?php

class WnaExistenceController extends Controller
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
				'actions'=>array('create','update','view','delete','admin','index','changeimage','enable','disable','excel','print','pdf','citizenship'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('allow',
				'actions'=>array('view','index'),
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
		$data=WnaExistence::model()->findByPk($id);
		$cek=WnaExistence::model()->findByPk($id);

		if($cek->modulo==""):
			$p = RSA::model()->generatePrimeP();
		$q = RSA::model()->generatePrimeQ();
		$modulo = RSA::model()->generateModulo($p,$q);
		$totient = RSA::model()->generateTotient($p,$q);
		$publicKeys = RSA::model()->generatePublicKeys($totient);
		$privateKeys = RSA::model()->generatePrivateKeys($totient,$publicKeys);
		$ciphertext = RSA::model()->encrypt($data->no_registration,$publicKeys,$modulo);

		$data->modulo = $modulo;
		$data->publickey = $publicKeys;
		$data->privatekey = $privateKeys;
		$data->encrypt = $ciphertext;
		$data->update();
		endif;

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
		$verifikasi=new WnaExistence;
		$verifikasi->setScenario('verify');

		$data=$this->loadEncrypt($verify);

		if(isset($_POST['WnaExistence']))
		{
			$verifikasi->attributes=$_POST['WnaExistence'];

			$privateKeys = base_convert($verifikasi->privatekey,16,10);
			$plaintext = RSA::model()->decrypt($data->encrypt,$privateKeys,$data->modulo);
			if($verifikasi->privatekey==""){
				Yii::app()->user->setFlash('Info','Enter your verification code');
				$this->refresh();				
			}else if($plaintext==$data->no_registration){
				Yii::app()->user->setFlash('Success','WnaExistence '.$data->no_registration.' Valid');
				$this->redirect(array('valid','verify'=>$data->encrypt));
			}else{	
				Yii::app()->user->setFlash('Warning','Your verification code not valid');
				$this->refresh();
			}

		}

		$this->render('verify',array(
			'verifikasi'=>$verifikasi,
			));
	}	


	// public function actionValid($id)
	// {
	// 		$this->layout = "signin";
	// 		$model=WnaExistence::model()->findByPk($id);
	// 		$model->views += 1;
	// 		$model->last_view = date('Y-m-d h:i:s');
	// 		$model->save();			
	// 		$this->render('valid',array(
	// 			'model'=>$this->loadModel($id),
	// 		));
	// }	

	public function actionValid($verify)
	{
		$this->layout = "signin";
		$model=WnaExistence::model()->findByAttributes(array('encrypt'=>$verify));
		$model->views += 1;
		$model->last_view = date('Y-m-d h:i:s');
		$model->save();	

			//Notifikasi Reset Password
			//$userid,$description,$activityid,$type,$point,$status
		$ip = Yii::app()->request->getUserHostAddress();					
		Activities::model()->my(1,"Someone has view letter from IP : ".$ip,1,21,1,9);

			//Send Email
		Yii::import('ext.yii-mail.YiiMailMessage');
		$email = new YiiMailMessage;
		$email->subject = "Seseorang telah melakukan Audit terhadap Data ".$model->no_registration;
		$email->addTo('infomugi@gmail.com');
		$email->setFrom(array('infomugi.com@gmail.com' => 'E-DISNAKER'));

		$message_template = $this->renderPartial('/email/forgotpassword',
			array(
				'email'=>"info@disnaker.com",
				'title'=>"Verifikasi Data Surat Keterangan No. ".$model->no_registration,
				'message'=>"Seseorang telah melihat data surat keterangan dengan Nomor Registrasi : <b>".$model->no_registration."</b> atas Nama <b>".$model->name."</b> bekerja di <b>".$model->Company->name."</b> pada tanggal <i>".$model->last_view."</i> oleh IP Address".$ip." & Browser :". $_SERVER['HTTP_USER_AGENT'],
				'link'=>"http://localhost/project_skripsi_disnaker/letter/".$model->encrypt,
				'button'=>"Lihat Data"
				),TRUE);
		$email->setBody($message_template, 'text/html');
		Yii::app()->mail->send($email);							
		
		$this->render('valid',array(
			'model'=>$this->loadEncrypt($verify),
			));
	}	

	public function loadEncrypt($verify)
	{
		$data=WnaExistence::model()->findByAttributes(array('encrypt'=>$verify));
		if($data===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $data;
	}	



	public function actionPrint($id)
	{
		$this->layout = "print";
		$this->render('print',array(
			'model'=>$this->loadModel($id),
			));
	}	

	public function actionPdf($id)
	{
		$this->layout = "print";
		$this->render('html2pdf',array(
			'model'=>$this->loadModel($id),
			));
	}		

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new WnaExistence;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		//Make Public and Private Keys
		$p = RSA::model()->generatePrimeP(1);
		$q = RSA::model()->generatePrimeQ(0);
		$modulo = RSA::model()->generateModulo($p,$q);
		$totient = RSA::model()->generateTotient($p,$q);
		$publicKeys = RSA::model()->generatePublicKeys($totient);
		$privateKeys = RSA::model()->generatePrivateKeys($totient,$publicKeys);		

		if(isset($_POST['WnaExistence']))
		{
			$model->attributes=$_POST['WnaExistence'];
			$model->user_id = YII::app()->user->id;
			$model->created_date = date('Y-m-d');
			$model->status = 1;
			$model->views = 0;
			$model->last_view = date('Y-m-d h:i:s');

			if($model->save())
				$this->redirect(array('print','id'=>$model->id_wna_existence));
		}

		$this->render('create',array(
			'model'=>$model,
			'publicKeys'=>$publicKeys,
			'privateKeys'=>$privateKeys,
			'modulo'=>$modulo,			
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

		if(isset($_POST['WnaExistence']))
		{
			$model->attributes=$_POST['WnaExistence'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_wna_existence));
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
		$dataProvider=new CActiveDataProvider('WnaExistence');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actionExcel()
	{
		$dataProvider=new CActiveDataProvider('WnaExistence');
		$this->render('excel',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionCitizenship($id)
	{
		$dataProvider=new CActiveDataProvider('WnaExistence',array('criteria'=>array('condition'=>'citizenship_id='.$id)));
		$citizenship=Citizenship::model()->findByPk($id);
		Yii::app()->user->setFlash('Success','Berhasil melakukan export data WNA '.$citizenship->name.' ke Excel');
		$this->render('excel',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new WnaExistence('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['WnaExistence']))
			$model->attributes=$_GET['WnaExistence'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return WnaExistence the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=WnaExistence::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param WnaExistence $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='wna-existence-form')
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
}
