<?php
/* @var $this CertificateController */
/* @var $model Certificate */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	$model->id_certificate,
	);

$this->pageTitle='Detail Certificate';
?>

<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Certificate'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Certificate'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_certificate,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Certificate'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_certificate,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Certificate'));
								?>

							</span> 

							<span class="hidden-xs">

									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Certificate'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Certificate'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_certificate,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Certificate'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_certificate,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Certificate'));
															?>

															<?php echo CHtml::link('Print', 
																array('print', 'id'=>$model->id_certificate,
																	), array('class' => 'btn btn-warning btn-flat', 'title'=>'Verify Certificate'));
																	?>

																	<?php echo CHtml::link('Verify', 
																		array('decrypt', 'verify'=>$model->encrypt,
																			), array('class' => 'btn btn-info btn-flat', 'title'=>'Verify Certificate'));
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



																										<H3><i class="fa fa-check-square"></i> Certificate <span class="hidden-xs">Serial : <?php echo $model->code; ?></span></H3>

																											<div class="col-md-6">
																												<?php $this->widget('zii.widgets.CDetailView', array(
																													'data'=>$model,
																													'htmlOptions'=>array("class"=>"table"),
																													'attributes'=>array(
																														'created_date',
																														array('name'=>'event_id','value'=>$model->Event->name),
																														array('name'=>'member_id','value'=>$model->Member->first_name . " " . $model->Member->last_name),
																														array('name'=>'status','value'=>$model->status == 1 ? "Active" : "Disable"),
																														array('name'=>'views','value'=>$model->views . " Views"),
																														'last_view',
																														),
																														)); ?>
																													</div>
																													<div class="col-md-6">
																														<H3><i class="fa fa-qrcode"></i> QR-Code Link</H3>
																														<?php 
																														$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
																															'data' => 'http://192.168.43.29/project_skripsi_disnaker/verify/'.$model->encrypt,
																															'filename' => $model->id_certificate.".png",
																															'subfolderVar' => false,
																															'matrixPointSize' => 5,
																															'displayImage'=>true, // default to true, if set to false display a URL path
																															'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
																								                            'matrixPointSize'=>6, // 1 to 10 only
																								                            )) 
																								                            ?>
																								                            <!-- <H3><i class="fa fa-qrcode"></i> QR-Code </H3> -->
																														<?php 
																														// $this->widget('application.extensions.qrcode.QRCodeGenerator',array(
																														// 	'data' => $model->encrypt,
																														// 	'filename' => $model->id_certificate.$model->member_id.".png",
																														// 	'subfolderVar' => false,
																														// 	'matrixPointSize' => 5,
																														// 	'displayImage'=>true, // default to true, if set to false display a URL path
																														// 	'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
																								      //                       'matrixPointSize'=>6, // 1 to 10 only
																								      //                       )) 
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
																								        					<?php $this->widget('zii.widgets.CDetailView', array(
																								        						'data'=>$model,
																								        						'htmlOptions'=>array("class"=>"table"),
																								        						'attributes'=>array(
																								        							array('name'=>'publickey','value'=>$model->publickey),
																								        							array('label'=>'Total Public Bit','value'=>strlen($model->publickey) * 8 .' bit'),
																								        							array('name'=>'privatekey','value'=>$model->privatekey),
																								        							array('label'=>'Total Private Bit','value'=>strlen($model->privatekey) * 8 .' bit'),
																								        							),
																								        							)); ?>	

																								        						</div>
																								        						<div class="col-md-6">

																								        							<H3><i class="fa fa-key"></i> (Hexa)</H3>
																								        							<?php $this->widget('zii.widgets.CDetailView', array(
																								        								'data'=>$model,
																								        								'htmlOptions'=>array("class"=>"table"),
																								        								'attributes'=>array(
																								        									array('name'=>'publickey','value'=>gmp_strval($model->publickey,16)),
																								        									array('label'=>'Total Public Bit','value'=>strlen(gmp_strval($model->publickey,16)) * 8 .' bit'),
																								        									array('name'=>'privatekey','value'=>gmp_strval($model->privatekey,16)),
																								        									array('label'=>'Total Private Bit','value'=>strlen(gmp_strval($model->privatekey,16)) * 8 .' bit'),
																								        									),
																								        									)); ?>		

																								        								</div>

																								        							<?php 

																								                    				// echo Rsa::model()->space($model->privatekey);
																								                    				// echo "<BR>";
																								                    				// echo Rsa::model()->basekey($model->privatekey);
																								                    				// echo "<BR>";
																								                    				// echo Rsa::model()->space(Rsa::model()->basekey($model->privatekey));
																								                    				// echo "<BR>";
																								                    				// echo Rsa::model()->deckey(Rsa::model()->basekey($model->privatekey));

																								        							?>

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

