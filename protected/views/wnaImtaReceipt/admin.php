<?php
/* @var $this WnaImtaReceiptController */
/* @var $model WnaImtaReceipt */

$this->breadcrumbs=array(
	'Wna Imta Receipts'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Tanda Terima IMTA';
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

			<?php echo CHtml::link('Add Tanda Terima IMTA',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Tanda Terima IMTA',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'wna-imta-receipt-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							

							
							array('name'=>'company_id','value'=>'$data->Company->name'),
							'name',
							'date_expired',

							array(
								'header'=>'Cetak',
								'class'=>'CButtonColumn',
								'template'=>'{print}',
								'buttons'=>array(

									'print'=>
									array(
										'label'=>'Print',
										'url'=>'Yii::app()->createUrl("WnaImtaReceipt/print", array("id"=>$data->id_wna_imta_receipt))',
										'imageUrl'=>Yii::app()->request->baseUrl.'/image/icon/print.png',
										),

									),
								),

							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}{update}{delete}',
								'htmlOptions'=>array('width'=>'100px', 
									'style' => 'text-align: center;'),
								'buttons'=>array(
									'view'=>
									array(
										'url'=>'Yii::app()->createUrl("WnaImtaReceipt/view", array("id"=>$data->id_wna_imta_receipt))',
										'options'=>array(
											'ajax'=>array(
												'type'=>'POST',
												'url'=>"js:$(this).attr('href')",
												'success'=>'function(data) { $("#viewModal .modal-body p").html(data); $("#viewModal").modal(); }'
												),
											),
										),

									
									),
								),
							),
							)); ?>



							<!-- Modal -->
							<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<!-- Popup Header -->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title"><strong>View</strong> Tanda Terima IMTA</h4>
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


