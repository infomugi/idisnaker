<?php
/* @var $this CertificateController */
/* @var $model Certificate */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Certificate';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
		array('index'),
		array('class' => 'btn btn-primary btn-md'));
		?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('List Certificate',
			array('index'),
			array('class' => 'btn btn-primary btn-flat'));
			?>

		</span>	

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'certificate-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
				'columns'=>array(

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

					'created_date',
					array('name'=>'event_id','value'=>'$data->Event->name'),
					array('name'=>'member_id','value'=>'$data->Member->first_name . " " . $data->Member->last_name'),
					'code',


					array(
						'class'=>'CButtonColumn',
						'template'=>'{view}{report}',
						'buttons'=>array(
							'view'=>
							array(
								'url'=>'Yii::app()->createUrl("Certificate/view", array("id"=>$data->id_certificate))',
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
								'url'=>'Yii::app()->createUrl("Certificate/print", array("id"=>$data->id_certificate))',
								'imageUrl'=>Yii::app()->request->baseUrl.'/image/icon/print.png',
								),

							),
						),
					),
					)); ?>



					<!-- Modal -->
					<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<!-- Popup Header -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title"><strong>View</strong> Certificate</h4>
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


