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
		'fileName' => 'List WNA Imta.xls',
		'columns'=>array(
			array('header'=>'No. Pendaftaran BPMP & Tanggal ','value'=>'$data->bpmp_no . " - ". $data->bpmp_date'),

			array('header'=>'No. BAP','value'=>'$data->no_registration . " - ". $data->date_examination'),

			array('header'=>'No. Pendaftaran DISNAKER & Tanggal ','value'=>'$data->disnaker_no . " - ". $data->disnaker_date'),

			array('header'=>'Nama dan Alamat Perusahaan','value'=>'$data->Company->name . " - ". $data->Company->address'),

			'no_rptka',
			'name',

			array('header'=>'Tempat Tanggal Lahir','value'=>'$data->place. ", ".$data->birth'),

			array('header'=>'JK','value'=>'$data->gender == 1 ? "L" : "P"'),
			array('name'=>'citizenship_id','value'=>'$data->Citizenship->name'),

			'no_passport',
			'no_kitaskitap',
			'department',

			array('name'=>'employment_agreement','value'=>'WnaImta::model()->agreement($data->employment_agreement)'),
			'no_imta',
			array('name'=>'imta_extension_to','value'=>'WnaImta::model()->imta($data->imta_extension_to)'),
			array('header'=>'Tanggal Berlaku ','value'=>'$data->bpmp_expire_date'),

			),
			)); ?>

			<div class="alert alert-success">
				<H3>Data Keberadaan TKA Berhasil Disimpan ke Excel, Download <B><a href="<?php echo Yii::app()->baseUrl; ?>/List WNA Imta.xls"/>Disini</a></B></H3>
			</div>

