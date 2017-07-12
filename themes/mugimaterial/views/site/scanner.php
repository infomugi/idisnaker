	<div class="row">
		<div class="col-md-12">

			<style type="text/css">
				img{
					border:0;
				}
				#v{
					width:320px;
					height:240px;
				}
				#qr-canvas{
					display:none;
				}
				#qrfile{
					width:320px;
					height:240px;
				}
				#mp1{
					text-align:center;
					font-size:35px;
				}
				#imghelp{
					position:relative;
					left:0px;
					top:-160px;
					z-index:100;
					font:18px arial,sans-serif;
					background:#f0f0f0;
					margin-left:35px;
					margin-right:35px;
					padding-top:10px;
					padding-bottom:10px;
					border-radius:20px;
				}
				.selector{
					margin:0;
					padding:0;
					cursor:pointer;
					margin-bottom:-5px;
				}
				#outdiv
				{
					width:320px;
					height:240px;
					border: solid;
					border-width: 3px 3px 3px 3px;
				}
				#result{
					border: solid;
					border-width: 1px 1px 1px 1px;
					padding:20px;
					width:70%;
				}

				ul{
					margin-bottom:0;
					margin-right:40px;
				}
				li{
					display:inline;
					padding-right: 0.5em;
					padding-left: 0.5em;
					font-weight: bold;
					border-right: 1px solid #333333;
				}
				li a{
					text-decoration: none;
					color: black;
				}

				#footer a{
					color: black;
				}
				.tsel{
					padding:0;
				}

			</style>

			<div class="form-head mb20">
				<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold"><?php echo YII::app()->name; ?></h1>
				<h5 class="text-normal h5 text-center">QR-Code Scanner</h5>
			</div>

			<div class="form-container">

			<div id="main">
						<div id="header">


						</div>
						<div id="mainbody">
							<table class="tsel" border="0" width="100%">
								<tr>
									<td valign="top" align="center" width="50%">
										<table class="tsel" border="0">
											<tr>
												<td>
													<img style="display:none" class="selector" id="webcamimg" src="" onclick="setwebcam()" align="left" />
											
													<img class="selector" id="qrimg" src="" onclick="setimg()" align="right"/>
												</td>
											</tr>
											<tr>
												<td colspan="2" align="center">
													<div id="outdiv">
													</div>
												</td>
											</tr>
										</table>
									</td>
								</tr>

								<tr>
								<td colspan="3" align="center">
									<div id="as"></div>
								</td>
								</tr>
							</table>
							<br> 
							<div id="info" class="alert alert-warning">
								Scan QR-Code pada Sertifikat
							</div>

						</div>
	
					</div>
					<canvas id="qr-canvas" width="800" height="600"></canvas>
					<script type="text/javascript">load();</script>

			</div>
		</div>
	</div>
	