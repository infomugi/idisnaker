						<!-- ========== Left Sidebar Start ========== -->
						<div class="left side-menu">
							<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 307px;">
								<div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 307px;">
									<div class="user-details">
										<div class="pull-left">
											<img src="<?php echo Yii::app()->baseUrl; ?>/image/avatar/<?PHP echo Users::model()->showAvatar(YII::app()->user->id); ?>" alt="" class="thumb-md img-circle">
										</div>
										<div class="user-info">
											<div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?PHP echo YII::app()->user->name; ?><span class="caret"></span></a>
												<?php
												$this->widget('zii.widgets.CMenu', array(
													'htmlOptions' => array('class' => 'dropdown-menu'),
													'encodeLabel'=>FALSE,
													'items' => array(
														array('label' => '<i class="fa fa-user"></i> Profile', 'url' => array('/users/profile','view'=>YII::app()->user->record->username), 'visible' => !Yii::app()->user->isGuest),
														array('label' => '<i class="fa fa-briefcase"></i> View CV', 'url' => array('/profile/user','name'=>YII::app()->user->record->username), 'visible' => !Yii::app()->user->isGuest),
														array('label' => '<i class="fa fa-cog"></i> Settings', 'url' => array('/users/update','view'=>YII::app()->user->name), 'visible' => !Yii::app()->user->isGuest),
														array('label' => '<i class="fa fa-power-off"></i> Logout', 'url' => array('/site/logout','id'=>YII::app()->user->id), 'visible' => !Yii::app()->user->isGuest),
														array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
														)
													));
													?>    
												</div>
												<p class="text-muted m-0"><?PHP echo Users::model()->active(YII::app()->user->record->active); ?></p>
											</div>
										</div>
										<?php if(YII::app()->user->record->level==1){ ?>
											<div id="sidebar-menu">
												<ul>
													<li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard" class="waves-effect waves-light">
														<i class="fa fa-codepen"></i><span>Dashboard</span></a>
													</li>					

													<li><a href="<?php echo Yii::app()->baseUrl; ?>/companyjobfair/admin" class="waves-effect waves-light">
														<i class="fa fa-tasks"></i><span>Job Fair</span></a>
													</li>					
													<!-- 
													<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-calendar-o"></i>
														<span>TTG</span></a>
														<ul class="list-unstyled" style="">

															<li><a href="<?php echo Yii::app()->baseUrl; ?>/event/admin">Manage <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_event) FROM event")->queryScalar();?></b></div> </span></a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/participation/admin">Tiket <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_participation) FROM participation")->queryScalar();?></b></div> </span></a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/certificate/admin">Sertifikat <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_certificate) FROM certificate")->queryScalar();?></b></div> </span></a></li>

														</ul>
													</li>	
												-->

												<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-file-text"></i>
													<span>Surat Keberadaan</span></a>
													<ul class="list-unstyled" style="">

														<li><a href="<?php echo Yii::app()->baseUrl; ?>/wnaexistence/create">Add</a></li>
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/wnaexistence/admin">Manage <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_wna_existence) FROM wna_existence")->queryScalar();?></b></div> </span></a></li>

													</ul>
												</li>		

												<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-file-text-o"></i>
													<span>Perpanjangan IMTA</span></a>
													<ul class="list-unstyled" style="">

														<li><a href="<?php echo Yii::app()->baseUrl; ?>/wnaimta/create">Add</a></li>
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/wnaimta/admin">Manage <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_wna_imta) FROM wna_imta")->queryScalar();?></b></div> </span></a></li>
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/wnaimtareceipt/admin">Tanda Terima <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_wna_imta_receipt) FROM wna_imta_receipt")->queryScalar();?></b></div> </span></a></li>

													</ul>
												</li>

												<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-file-o"></i>
													<span>Rekomendasi Paspor</span></a>
													<ul class="list-unstyled" style="">

														<li><a href="<?php echo Yii::app()->baseUrl; ?>/wnirecommendation/create">Add</a></li>
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/wnirecommendation/admin">Manage <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_wni_recommendation) FROM wni_recommendation")->queryScalar();?></b></div> </span></a></li>

													</ul>
												</li>																																						

													<!--
													<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-pencil-square"></i>
														<span>Posts</span><span class="pull-right"> <div class="label label-info"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_post) FROM post WHERE id_user='".YII::app()->user->id."'")->queryScalar();?></b></div> </span></a>
														<ul class="list-unstyled" style="">
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/post/create">New</a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/post/admin">Manage</a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/post/index">List</a></li>
														</ul>
													</li>

													<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-envelope"></i>
														<span>Message</span> <?php if(Yii::app()->db->createCommand("SELECT COUNT(id_message) FROM message WHERE status=0 AND user_id='".YII::app()->user->id."'")->queryScalar()!=0):?><span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_message) FROM message WHERE status=0 AND user_id='".YII::app()->user->id."'")->queryScalar();?></b></div></span><?php endif; ?></a>
														<ul class="list-unstyled" style="">
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/message/sendto">New</a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/message/my">My Message <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_message) FROM message WHERE user_id='".YII::app()->user->id."'")->queryScalar();?></b></div> </span></a></li>
														</ul>
													</li>													

													<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-wechat"></i>
														<span>Testimonials</span><span class="pull-right"> <div class="label label-success"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_testimonial) FROM testimonials WHERE user_id='".YII::app()->user->id."'")->queryScalar();?></b></div> </span></a>
														<ul class="list-unstyled" style="">
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/testimonials/create">New</a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/testimonials/admin">Manage</a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/testimonials/index">List</a></li>
														</ul>
													</li>

													<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-cube"></i>
														<span>Files</span><span class="pull-right"> <div class="label label-danger"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_file) FROM files WHERE user_id='".YII::app()->user->id."'")->queryScalar();?></b></div> </span></a>
														<ul class="list-unstyled" style="">
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/files/upload">Upload</a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/files/admin">Manage</a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/files/index">List</a></li>
														</ul>
													</li>
												-->		

												<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-print"></i>
													<span>Laporan</span></a>
													<ul class="list-unstyled" style="">
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/certificate/admin">Sertifikat</a></li>
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/wnaexistence/admin">Surat Keterangan</a></li>
													</ul>
												</li>													

												<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-server"></i>
													<span>Master</span></a>
													<ul class="list-unstyled" style="">
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/company/admin">Perusahaan <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_company) FROM company")->queryScalar();?></b></div> </span></a></li>
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/industry/admin">Industri <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_industry) FROM industry")->queryScalar();?></b></div> </span></a></li>
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/citizenship/admin">Kewarganegaraan <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_citizenship) FROM citizenship")->queryScalar();?></b></div> </span></a></li>
													</ul>
												</li>									


												<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-github-alt"></i>
													<span>Akun</span></a>
													<ul class="list-unstyled" style="">
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/users/create">Add</a></li>
														<li><a href="<?php echo Yii::app()->baseUrl; ?>/users/index">List <span class="pull-right"> <div class="label label-primary"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_user) FROM users")->queryScalar();?></b></div> </span></a></li>
													</ul>
												</li>

													<!--
													<li><a href="<?php echo Yii::app()->baseUrl; ?>/setting/index" class="waves-effect waves-light">
														<i class="fa fa-code"></i><span>Settings</span></a>
													</li>												


													<li><a href="<?php echo Yii::app()->baseUrl; ?>/site/stats" class="waves-effect waves-light">
														<i class="fa fa-bar-chart-o"></i><span>Stats</span></a>
													</li> 
												-->

											</ul>
										</div>
										<?php }else{ ?>
											<div id="sidebar-menu">
												<ul>
													<li><a href="<?php echo Yii::app()->baseUrl; ?>/dashboard" class="waves-effect waves-light">
														<i class="fa fa-codepen"></i><span>Dashboard</span></a>
													</li>					

													<li><a href="<?php echo Yii::app()->baseUrl; ?>/event" class="waves-effect waves-light">
														<i class="fa fa-calendar"></i><span>Event</span></a>
													</li>

													<li><a href="<?php echo Yii::app()->baseUrl; ?>/certificate" class="waves-effect waves-light">
														<i class="fa fa-file"></i><span>Certificate</span></a>
													</li>													

													<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-envelope"></i>
														<span>Message</span><span class="pull-right"> <div class="label label-info"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_message) FROM message  WHERE user_id='".YII::app()->user->id."'")->queryScalar();?></b></div> </span></a>
														<ul class="list-unstyled" style="">
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/message/sendto">New</a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/message/my">My Message</a></li>
														</ul>
													</li>														

													<li class="has_sub"><a href="#" class="waves-effect waves-light"><i class="fa fa-cube"></i>
														<span>Files</span><span class="pull-right"> <div class="label label-danger"><b><?php echo Yii::app()->db->createCommand("SELECT COUNT(id_file) FROM files  WHERE user_id='".YII::app()->user->id."'")->queryScalar();?></b></div> </span></a>
														<ul class="list-unstyled" style="">
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/files/upload">Upload</a></li>
															<li><a href="<?php echo Yii::app()->baseUrl; ?>/files/my">My Files</a></li>
														</ul>
													</li>												

												</ul>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>

								<!-- Left Sidebar End -->
