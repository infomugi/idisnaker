<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Manage',
	);

$this->pageTitle='Export ke Excel';
?>


<?php $this->widget('EExcelWriter', array(
	'dataProvider'=>$dataProvider,
	'title' => 'EExcelWriter',
	'stream' => FALSE,
	'fileName' => 'Laporan Perusahaan.xls',
	'columns'=>array(

		'name',
		'company_code',
		'address',

		array(
			'name'=>'district_id',
			'value'=>'$data->District->name'
			),							

		array(
			'name'=>'type',
			'value'=>'Company::model()->category($data->type)'
			),

		array(
			'name'=>'classification',
			'value'=>'Company::model()->classification($data->classification)'
			),				

		array(
			'header'=>'Tanggal Berlaku','value'=>'$data->startdate." s/d ".$data->enddate'),

		'spsb',						
		'lksbipartit',						
		'kopkar',						
		'description',							

		),
		)); ?>

		<div class="alert alert-success">
			<H3>Data Perusahaan Berhasil Disimpan ke Excel, Download <B><a href="./laporan perusahaan.xls"/>Disini</a></B></H3>
		</div>

