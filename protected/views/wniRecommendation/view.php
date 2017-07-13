<?php
/* @var $this WnaExistenceController */
/* @var $model WnaExistence */

$this->breadcrumbs=array(
	'WNI Recommendations'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail WNI Recommendation';

// $p = RSA::model()->generatePrimeP();
// $q = RSA::model()->generatePrimeQ();
// $modulo = RSA::model()->generateModulo($p,$q);
// $totient = RSA::model()->generateTotient($p,$q);
// $publicKeys = RSA::model()->generatePublicKeys($totient);
// $privateKeys = RSA::model()->generatePrivateKeys($totient,$publicKeys);		
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Rekomendasi Paspor'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Rekomendasi Paspor'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Rekomendasi Paspor'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_wni_recommendation,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Rekomendasi Paspor'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_wni_recommendation,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Rekomendasi Paspor'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Rekomendasi Paspor'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Rekomendasi Paspor'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Rekomendasi Paspor'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_wni_recommendation,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Rekomendasi Paspor'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_wni_recommendation,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Rekomendasi Paspor'));
															?>

															<?php echo CHtml::link('Print', 
																array('print', 'id'=>$model->id_wni_recommendation,
																	),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Print Data'));
																	?>

																	<?php echo CHtml::link('Verify', 
																		array('decrypt', 'verify'=>$model->encrypt,
																			), array('class' => 'btn btn-info btn-flat', 'title'=>'Verify Letter'));
																			?>

																		</span>

																		<HR>

																			<div class="row">
																				<div class="col-lg-12 col-md-12 col-sm-12">
																					<ul class="nav nav-tabs tabs">
																						<li class="active tab"><a href="#myfiles" data-toggle="tab" aria-expanded="false" class="active"><span class="visible-xs"><i class="fa fa-check-square"></i></span> 
																							<span class="hidden-xs">Certificate Info</span></a></li>

																							<li class="tab"><a href="#all" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-shield"></i></span> 
																								<span class="hidden-xs">Public & Private Keys</span></a>
																							</li>

																							<div class="indicator">
																							</div>
																						</ul>
																					</div>
																				</div>

																				<div class="row">
																					<div class="col-lg-12">
																						<div class="tab-content profile-tab-content">

																							<!-- END: TAB 1 -->
																							<div class="tab-pane active" id="myfiles">
																								<div class="row">
																									<div class="col-md-12">
																										<!-- Stats : Todak -->



																										<H3><i class="fa fa-check-square"></i> Rekomendasi Paspor <span class="hidden-xs">Serial : <?php echo $model->recommendation_code; ?></span></H3>

																										<div class="col-md-8">

																											<?php $this->widget('zii.widgets.CDetailView', array(
																												'data'=>$model,
																												'htmlOptions'=>array("class"=>"table"),
																												'attributes'=>array(
																													'created_date',
																													array('name'=>'user_id','value'=>$model->User->first_name),
																													'name',
																													'address',
																													'place',
																													'birth',
																													array('name'=>'gender','value'=>$model->gender == 0 ? "Perempuan" : "Laki-laki"),
																													array('name'=>'country_id','value'=>$model->Country->name),
																													),
																													)); ?>

																												</div>
																												<div class="col-md-4">
																													<H3><i class="fa fa-qrcode"></i> QR-Code</H3>
																													<?php 
																													$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
																														'data' => 'http://192.168.43.29/project_skripsi_disnaker/letter/'.$model->encrypt,
																														'filename' => "sk-".$model->id_wni_recommendation.".png",
																														'subfolderVar' => false,
																														'matrixPointSize' => 5,
																												'displayImage'=>true, // default to true, if set to false display a URL path
																												'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
																												'matrixPointSize'=>4, // 1 to 10 only
																												)) 
																												?>
																											</div>


																										</div>
																									</div>
																								</div>
																								<!-- END: TAB 1 -->

																								<!-- END: TAB 2 -->
																								<div class="tab-pane active" id="all">
																									<div class="row">
																										<div class="col-md-12">
																											<!-- Stats : Week -->


																											<div class="col-md-6">

																												<H3>Public & Private <i class="fa fa-shield"></i> (Dec)</H3>
																												<?php 
																												$this->widget('zii.widgets.CDetailView', array(
																													'data'=>$model,
																													'htmlOptions'=>array("class"=>"table"),
																													'attributes'=>array(
																														array('name'=>'publickey','value'=>$model->publickey),
																														array('label'=>'Total Public Bit','value'=>strlen($model->publickey) * 8 .' bit'),
																														array('name'=>'privatekey','value'=>$model->privatekey),
																														array('label'=>'Total Private Bit','value'=>strlen($model->privatekey) * 8 .' bit'),
																														),
																													)); 
																													?>	

																												</div>
																												<div class="col-md-6">

																													<H3><i class="fa fa-key"></i> (Hexa)</H3>
																													<?php 
																													$this->widget('zii.widgets.CDetailView', array(
																														'data'=>$model,
																														'htmlOptions'=>array("class"=>"table"),
																														'attributes'=>array(
																															array('name'=>'publickey','value'=>gmp_strval($model->publickey,16)),
																															array('label'=>'Total Public Bit','value'=>strlen(gmp_strval($model->publickey,16)) * 8 .' bit'),
																															array('name'=>'privatekey','value'=>gmp_strval($model->privatekey,16)),
																															array('label'=>'Total Private Bit','value'=>strlen(gmp_strval($model->privatekey,16)) * 8 .' bit'),
																															),
																														)); 
																														?>		

																													</div>


																												</div>
																											</div>
																										</div>
																										<!-- END: TAB 2 -->


																									</div>
																								</div>
																							</div>


																							<STYLE>
																								th{width:150px;}
																							</STYLE>




