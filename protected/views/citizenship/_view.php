<?php
/* @var $this CitizenshipController */
/* @var $data Citizenship */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id_citizenship)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<div class="col-md-12 col-sm-12 col-lg-12">
				<div class="mini-stat clearfix bx-shadow bg-purple">
						<span class="mini-stat-icon">
							<i class="fa fa-users"></i>
						</span>
						<div class="mini-stat-info text-right">
							<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_wna_existence) FROM wna_existence where citizenship_id=".$data->id_citizenship." and status=1")->queryScalar();?></span> Employee
						</div>
					</div>
				</div>

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
