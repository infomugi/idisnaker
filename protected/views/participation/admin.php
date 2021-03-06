<?php
/* @var $this ParticipationController */
/* @var $model Participation */

$this->breadcrumbs=array(
	'Participations'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Participation';
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

			<?php echo CHtml::link('Add Participation',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Participation',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>
					<?php echo CHtml::link('Print Ticket',
						array('printall'),
						array('class' => 'btn btn-primary btn-flat'));
						?>					

					</span>	

					<HR>

						<?php $this->widget('zii.widgets.grid.CGridView', array(
							'id'=>'participation-grid',
							'dataProvider'=>$model->search(),
							'filter'=>$model,
							'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
							'columns'=>array(

								array(
									'header'=>'No',
									'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
									'htmlOptions'=>array('width'=>'10px', 
										'style' => 'text-align: center;')),

							// 'id_participation',
							// 'created_date',
								array('name'=>'event_id','value'=>'$data->Event->name'),
								array('name'=>'member_id','value'=>'$data->Member->first_name'),
								array('name'=>'status','value'=>'Participation::model()->status($data->status)'),
							// 'member_id',

								array(
									'class'=>'CButtonColumn',
									'template'=>'{view}{report}',
									'buttons'=>array(
										'view'=>
										array(
											'url'=>'Yii::app()->createUrl("Participation/view", array("id"=>$data->id_participation))',
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
											'url'=>'Yii::app()->createUrl("participation/print", array("id"=>$data->id_participation))',
											'imageUrl'=>Yii::app()->request->baseUrl.'/image/icon/print.png',
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
												<h4 class="modal-title"><strong>View</strong> Participation</h4>
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


