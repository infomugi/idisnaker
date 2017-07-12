<?php
/* @var $this WnaExistenceController */
/* @var $model WnaExistence */

$this->breadcrumbs=array(
	'WNA Imtas'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage WNA Imta';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-md'));
		?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('IMTA Baru',
			array('create'),
			array('class' => 'btn btn-primary btn-flat'));
			?>
			<?php echo CHtml::link('IMTA Sudah Terbit',
				array('excel', 'id'=>1),
				array('class' => 'btn btn-success btn-flat'));
				?>
				<?php echo CHtml::link('IMTA Belum Terbit',
					array('excel', 'id'=>0),
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
								'class'=>'CButtonColumn',
								'template'=>'{publish}',
								'buttons'=>array(

									'publish'=>
									array(
										'label'=>'Terbit ?',
										'url'=>'Yii::app()->createUrl("wnaimta/updatebpmp", array("id"=>$data->id_wna_imta))',
										'imageUrl'=>Yii::app()->request->baseUrl.'/image/icon/publish.png',
										),				


									),
								),	

							array(
								'filter'=>array('0'=>'Belum','1'=>'Sudah'),
								'name'=>'publish','value'=>'WnaImta::model()->publish($data->publish)',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

								// array(
								// 	'name' => 'check',
								// 	'id' => 'selectedIds',
								// 	'value' => '$data->id_wna_imta',
								// 	'class' => 'CCheckBoxColumn',
								// 	'selectableRows' => '100',
								// 	),								

								// 'no_registration',
							'name',
							array('name'=>'company_id','value'=>'$data->Company->name'),
								// 'department',
							array('name'=>'employment_agreement','value'=>'WnaImta::model()->agreement($data->employment_agreement)'),

							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}{report}',
								'buttons'=>array(
									'view'=>
									array(
										'url'=>'Yii::app()->createUrl("WnaImta/view", array("id"=>$data->id_wna_imta))',
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
										'url'=>'Yii::app()->createUrl("WnaImta/print", array("id"=>$data->id_wna_imta))',
										'imageUrl'=>Yii::app()->request->baseUrl.'/image/icon/print.png',
										),


									),
								),
							),
							)); ?>



							<!-- Modal -->
							<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content modal-lg">
										<!-- Popup Header -->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title"><strong>Detail</strong> IMTA</h4>
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


