<?php
/* @var $this WnaExistenceController */
/* @var $model WnaExistence */

$this->breadcrumbs=array(
	'Wna Existences'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage WNA Existence';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-md'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-md'));
			?>

		</span> 

		<span class="hidden-xs">

			<?php echo CHtml::link('Add WNA Existence',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List WNA Existence',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>
					<?php echo CHtml::link('Export to Excel',
						array('excel'),
						array('class' => 'btn btn-success btn-flat'));
						?>

					</span>	

					<HR>

						<?php $this->widget('zii.widgets.grid.CGridView', array(
							'id'=>'wna-existence-grid',
							'dataProvider'=>$model->search(),
							'filter'=>$model,
							'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
							'columns'=>array(

								array(
									'header'=>'No',
									'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
									'htmlOptions'=>array('width'=>'10px', 
										'style' => 'text-align: center;')),

								array(
									'name' => 'check',
									'id' => 'selectedIds',
									'value' => '$data->id_wna_existence',
									'class' => 'CCheckBoxColumn',
									'selectableRows' => '100',
									),								

							// 'id_wna_existence',
							// 'created_date',
							// 'user_id',
								'no_registration',
							// 'no_report',
							// 'date_report',
								'name',
								array('name'=>'company_id','value'=>'$data->Company->name'),
								'department',
								array('name'=>'expired_date','value'=>'WnaExistence::model()->deadline($data->expired_date)'),
								'expired_date',

		/*
		'place',
		'birth',
		'gender',
		'citizenship_id',
		'no_passport',
		'no_rptka',
		'no_imta',
		'no_kitaskitap',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{report}',
			'buttons'=>array(
				'view'=>
				array(
					'url'=>'Yii::app()->createUrl("WnaExistence/view", array("id"=>$data->id_wna_existence))',
					'options'=>array(
						'ajax'=>array(
							'type'=>'POST',
							'url'=>"js:$(this).attr('href')",
							'success'=>'function(data) { $("#viewModal .modal-body p").html(data); $("#viewModal").modal(); }'
							),
						),
					),

				//Button Print
				'report'=>
				array(
					'label'=>'Print',
					'url'=>'Yii::app()->createUrl("wnaexistence/print", array("id"=>$data->id_wna_existence))',
					'imageUrl'=>Yii::app()->request->baseUrl.'/image/icon/print.png',
					),


				),
			),
		),
		)); ?>



		<!-- Modal -->
		<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content modal-md">
					<!-- Popup Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title"><strong>View</strong> WnaExistence</h4>
					</div>
					<!-- Popup Content -->
					<div class="modal-body">
						<p>Details</p>
					</div>
					<!-- Popup Footer -->
					<div class="modal-footer">
						<BR>
							<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>


