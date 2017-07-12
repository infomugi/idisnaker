<?php
/* @var $this CompanyemployeeController */
/* @var $model CompanyEmployee */

$this->breadcrumbs=array(
	'Company Employees'=>array('index'),
	$model->id_company_employee,
	);

	$this->pageTitle='Detail CompanyEmployee';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-plus"></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add CompanyEmployee'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List CompanyEmployee'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-table"></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage CompanyEmployee'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
	 array('update', 'id'=>$model->id_company_employee,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit CompanyEmployee'));
 ?>
		<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
	 array('delete', 'id'=>$model->id_company_employee,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus CompanyEmployee'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add CompanyEmployee'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List CompanyEmployee'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage CompanyEmployee'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_company_employee,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit CompanyEmployee'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_company_employee,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus CompanyEmployee'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'id_company_employee',
		'created_date',
		'update_date',
		'user_id',
		'company_id',
		'year',
		'employee_male',
		'employee_female',
		'employee_strange_male',
		'employee_strange_female',
		'status',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

