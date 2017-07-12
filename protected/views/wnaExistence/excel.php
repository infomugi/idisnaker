<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'TKA'=>array('index'),
	'Report',
	);

$this->pageTitle='Export ke Excel';

$this->widget('ext.yii-toastr.MugiToastr', array(
	'flashMessagesOnly' => true, 
	'options' => array(
		"closeButton" => true,
		"debug" => true,
		"progressBar"=> true,
		"positionClass" => "toast-bottom-left",
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
?>


<?php $this->widget('EExcelWriter', array(
	'dataProvider'=>$dataProvider,
	'title' => 'EExcelWriter',
	'stream' => FALSE,
	'fileName' => 'List WNA Existence.xls',
	'columns'=>array(


							// 'id_wna_existence',
							// 'created_date',
							// 'user_id',
		'no_registration',
		'no_report',
		'date_report',
		'name',

		'place',
		'birth',
		array('header'=>'JK','value'=>'$data->gender == 1 ? "L" : "P"'),
		array('name'=>'citizenship_id','value'=>'$data->Citizenship->name'),
		'department',

		array('name'=>'company_id','value'=>'$data->Company->name'),
		array('header'=>'Alamat Perusahaan','value'=>'$data->Company->address'),
		
		'no_passport',
		'no_rptka',
		'no_imta',
		'no_kitaskitap',
		'expired_date',
		

		/*
		array('name'=>'expired_date','value'=>'WnaExistence::model()->deadline($data->expired_date)'),
		'status',
		*/					

		),
		)); ?>

		<div class="alert alert-success">
			<H3>Data Keberadaan TKA Berhasil Disimpan ke Excel, Download <B><a href="<?php echo Yii::app()->baseUrl; ?>/List WNA Existence.xls"/>Disini</a></B></H3>
		</div>

