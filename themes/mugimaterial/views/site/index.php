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


	<script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
	<script>
		var client = filestack.init('ACwlmlfcGQciuIqlpcxDLz');
		function showPicker() {
			client.pick({
			}).then(function(result) {
				console.log(JSON.stringify(result.filesUploaded))
			});
		}
	</script>
	<input type="button" value="Upload" onclick="showPicker()" />

	<div class="row">
		<div class="col-md-12">

			<?php 
			require "simple_html_dom.php";
			// $username = "lokolektif.kab";
			// $images = array();
			// $html = file_get_html('http://instaliga.com/'.$username);
			// if($html) {
			// 	foreach($html->find('a[class=element__image-wrapper]') as $element) {
			// 		$elm = $element->innertext;
			// 		preg_match('!https?://[\w+&@#/%?=~|\!\:,.;-]*[\w+&@#/%=~|-]!', $elm, $url);
			// 		$url[0] = str_replace('/s320x320/', '/', $url[0]);
			// 		echo "<div class='col-md-3'><img class='img-responsive img-thumbnail' src='".$images[] = trim($url[0])."'/></div>";
			// 	}
			// }

			// $zodiak = "aries";
			// $images = array();
			// $html = file_get_html('http://www.vemale.com/zodiak/'.$zodiak);
			// if($html) {
			// 	foreach($html->find('a[class=body-zodiak]') as $element) {
			// 		$elm = $element->innertext;
			// 		preg_match('!https?://[\w+&@#/%?=~|\!\:,.;-]*[\w+&@#/%=~|-]!', $elm, $url);
			// 		$url[0] = str_replace('/s320x320/', '/', $url[0]);
			// 		echo "<div class='col-md-3'><img class='img-responsive img-thumbnail' src='".$images[] = trim($url[0])."'/></div>";
			// 	}
			// }			
			?>

			<?php

			// function bacaHTML($url){
   //   // inisialisasi CURL
			// 	$data = curl_init();
   //   // setting CURL
			// 	curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
			// 	curl_setopt($data, CURLOPT_URL, $url);
   //   // menjalankan CURL untuk membaca isi file
			// 	$hasil = curl_exec($data);
			// 	curl_close($data);
			// 	return $hasil;
			// }

			// $kodeHTML =  bacaHTML('http://www.klikbca.com');
			// $pecah = explode('<table width="139" border="0" cellspacing="0" cellpadding="0">', $kodeHTML);

			// $pecahLagi = explode('</table>', $pecah[2]);

			// echo "<table border='1'>";
			// echo "<tr><td>KURS</td><td>JUAL</td><td>BELI</td></tr>";
			// echo $pecahLagi[0];
			// echo "</table>";
			?>

		</div>
	</div>


	<?php 
	// function scrape_insta_hash($tag) {
	// 		$insta_source = file_get_contents('https://www.instagram.com/explore/tags/'.$tag.'/'); // instagrame tag url
	// 		$shards = explode('window._sharedData = ', $insta_source);
	// 		$insta_json = explode(';</script>', $shards[1]); 
	// 		$insta_array = json_decode($insta_json[0], TRUE);
	// 		return $insta_array; // this return a lot things print it and see what else you need
	// 	}
	// 	$tag = 'lokolektif'; // tag for which ou want images 
	// 	$results_array = scrape_insta_hash($tag);
	// 	$limit = 7; // provide the limit thats important because one page only give some images then load more have to be clicked
	// 	$image_array= array(); // array to store images.
	// 	for ($i=0; $i < $limit; $i++) { 
	// 		$latest_array = $results_array['entry_data']['TagPage'][0]['tag']['media']['nodes'][$i];
	// 		 	$image_data  = '<img src="'.$latest_array['thumbnail_src'].'">'; // thumbnail and same sizes 
	// 		 	//$image_data  = '<img src="'.$latest_array['display_src'].'">'; actual image and different sizes 
	// 		 	array_push($image_array, $image_data);
	// 		 }
	// 		 foreach ($image_array as $image) {
	// 			echo $image;// this will echo the images wrap it in div or ul li what ever html structure 
	// 		}

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