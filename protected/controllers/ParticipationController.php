<?php

class ParticipationController extends Controller
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
				'actions'=>array('create','update','view','delete','admin','index','changeimage','cancel','join','attend','print','printall'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('allow',
				'actions'=>array('view','index','join','cancel'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==2',
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Participation;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Participation']))
		{
			$model->attributes=$_POST['Participation'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_participation));
		}

		$this->render('create',array(
			'model'=>$model,
			));
	}

	public function actionJoin($event)
	{
		$model=new Participation;
		$model->event_id = $event;
		$model->created_date = date('Y-m-d h:i:s');
		$model->member_id = YII::app()->user->id;
		$model->status = 0;

		if($model->save()){
			Yii::app()->user->setFlash('Success', 'You has join to event '.$model->Event->name);
			$this->redirect(array('event/view','id'=>$model->event_id));
		}else{
			Yii::app()->user->setFlash('Warning', 'Maaf, nama anda sudah terdaftar dalam event ini');
			$this->redirect(array('event/view','id'=>$event));
		}
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

		if(isset($_POST['Participation']))
		{
			$model->attributes=$_POST['Participation'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_participation));
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
		$dataProvider=new CActiveDataProvider('Participation');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Participation('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Participation']))
			$model->attributes=$_GET['Participation'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Participation the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Participation::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	public function loadMember($member,$event)
	{
		$model=Participation::model()->findByAttributes(array('member_id'=>$member,'event_id'=>$event));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Participation $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='participation-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionCancel($member,$event)
	{
		$model=$this->loadMember($member,$event);
		$model->status = 0;
		$model->update();
		Yii::app()->user->setFlash('Warning', 'Anda telah membatalkan untuk mengikuti event ini');
		$this->redirect(array('event/view','id'=>$event));
	}	


	public function actionAttend($id)
	{
		$model=$this->loadModel($id);
		if($model->status==0){

			$model->status = 1;
			$model->update();
			Yii::app()->user->setFlash('Success', 'Member has been present to event');
			$this->redirect(array('certificate/create','participation'=>$model->id_participation));

		}else{

			Yii::app()->user->setFlash('Warning', 'Ticket has taken by someone');
			$this->redirect(array('certificate/create','participation'=>$model->id_participation));

		}

	}

	public function actionPrint($id)
	{
		$this->layout = "print";
		Yii::app()->user->setFlash('Info', 'Print Ticket');
		$this->render('print',array(
			'model'=>$this->loadModel($id),
			));
	}		

	public function actionPrintAll()
	{
		$this->layout = "printall";
		$dataProvider=new CActiveDataProvider('Participation',array('criteria'=>array('condition'=>'status=0'),  'pagination'=>array(
			'pageSize'=>'100'
			)
		));

		$this->render('printall',array(
			'dataProvider'=>$dataProvider,
			));
	}				
}
