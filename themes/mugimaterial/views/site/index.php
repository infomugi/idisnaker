<?php
/* @var $this SiteController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle='Dashboard';

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


	<?php if(YII::app()->user->record->level==1){ ?>

		<div class="row">
			<div class="col-md-4 col-sm-4 col-lg-3">
				<div class="mini-stat clearfix bx-shadow bg-info">
					<span class="mini-stat-icon">
						<i class="fa fa-building"></i>
					</span>
					<div class="mini-stat-info text-right">
						<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company")->queryScalar();?></span> Perusahaan
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-lg-3">
				<div class="mini-stat clearfix bx-shadow bg-purple">
					<span class="mini-stat-icon">
						<i class="fa fa-bank"></i>
					</span>
					<div class="mini-stat-info text-right">
						<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_industry) FROM industry")->queryScalar();?></span> Industri
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-lg-3">
				<div class="mini-stat clearfix bx-shadow bg-success">
					<span class="mini-stat-icon">
						<i class="fa fa-briefcase"></i>
					</span>
					<div class="mini-stat-info text-right">
						<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_wna_existence) FROM wna_existence")->queryScalar();?></span> Surat Keterangan
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-lg-3">
				<div class="mini-stat clearfix bg-primary bx-shadow">
					<span class="mini-stat-icon">
						<i class="fa fa-cc-visa"></i>
					</span>
					<div class="mini-stat-info text-right">
						<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_citizenship) FROM citizenship")->queryScalar();?></span> Kewarganegaraan
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-lg-3">
				<div class="mini-stat clearfix bg-pink bx-shadow">
					<span class="mini-stat-icon">
						<i class="fa fa-cube"></i>
					</span>
					<div class="mini-stat-info text-right">
						<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_subdistrict) FROM subdistrict")->queryScalar();?></span> Kecamatan
					</div>
				</div>
			</div>	

			<div class="col-md-4 col-sm-4 col-lg-3">
				<div class="mini-stat clearfix bg-danger bx-shadow">
					<span class="mini-stat-icon">
						<i class="fa fa-cubes"></i>
					</span>
					<div class="mini-stat-info text-right">
						<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_village) FROM village")->queryScalar();?></span> Desa
					</div>
				</div>
			</div>	


			<div class="col-md-4 col-sm-4 col-lg-3">
				<div class="mini-stat clearfix bg-inverse bx-shadow">
					<span class="mini-stat-icon">
						<i class="fa fa-file-text"></i>
					</span>
					<div class="mini-stat-info text-right">
						<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_certificate) FROM certificate")->queryScalar();?></span> Sertifikat
					</div>
				</div>
			</div>	


			<div class="col-md-4 col-sm-4 col-lg-3">
				<div class="mini-stat clearfix bg-success bx-shadow">
					<span class="mini-stat-icon">
						<i class="fa fa-calendar"></i>
					</span>
					<div class="mini-stat-info text-right">
						<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_event) FROM event")->queryScalar();?></span> Kegiatan
					</div>
				</div>
			</div>	






			<?php }else{ ?>

				<div class="row">
					<div class="col-md-4 col-sm-4 col-lg-3">
						<div class="mini-stat clearfix bx-shadow bg-info">
							<span class="mini-stat-icon">
								<i class="fa fa-pencil-square"></i>
							</span>
							<div class="mini-stat-info text-right">
								<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_post) FROM post WHERE id_user='".YII::app()->user->id."'")->queryScalar();?></span> Posts
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-lg-3">
						<div class="mini-stat clearfix bx-shadow bg-purple">
							<span class="mini-stat-icon">
								<i class="fa fa-envelope"></i>
							</span>
							<div class="mini-stat-info text-right">
								<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_message) FROM message WHERE user_id='".YII::app()->user->id."'")->queryScalar();?></span> Message
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-lg-3">
						<div class="mini-stat clearfix bx-shadow bg-success">
							<span class="mini-stat-icon">
								<i class="fa fa-file"></i>
							</span>
							<div class="mini-stat-info text-right">
								<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_file) FROM files  WHERE user_id='".YII::app()->user->id."'")->queryScalar();?></span> Files
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-lg-3">
						<div class="mini-stat clearfix bg-primary bx-shadow">
							<span class="mini-stat-icon">
								<i class="fa fa-star"></i>
							</span>
							<div class="mini-stat-info text-right">
								<span class="counter"><?php echo Yii::app()->db->createCommand("SELECT SUM(point) FROM activities WHERE user_id='".YII::app()->user->id."'")->queryScalar();?></span> My Point
							</div>
						</div>
					</div>

				</div>

				<?php } ?>


				<div class="row">
					<div class="col-md-6 col-sm-12 col-lg-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">New Message</h4>
							</div>
							<div class="panel-body">
								<div class="inbox-widget nicescroll mx-box" tabindex="5000" style="overflow: hidden; outline: none;">

									<?php $this->widget('zii.widgets.CListView', array(
										'dataProvider'=>$dataUnread,
										'itemView'=>'_view_message',
										)); ?>

									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-sm-12 col-lg-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">Last Activity</h4>
								</div>
								<div class="panel-body">
									<div class="inbox-widget nicescroll mx-box" tabindex="5000" style="overflow: hidden; outline: none;padding-left:15px;">

										<?php $this->widget('zii.widgets.CListView', array(
											'dataProvider'=>$dataActivity,
											'itemView'=>'_view_activity',
											)); ?>

										</div>
									</div>
								</div>	
							</div>