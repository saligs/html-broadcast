<!DOCTYPE html>
<!-- Template Name: Packet - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
	<title>Packet - Responsive Admin Template</title>
	<?php include 'include/main-head.php'; ?>
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="assets/css/rio.css">
</head>
<!-- end: HEAD -->
<body>
<div id="app" class="lyt-2">
	<!-- sidebar -->
	<?php include 'include/sidebar.php'; ?>
	<!-- / sidebar -->
	<div class="app-content">
		<!-- start: TOP NAVBAR -->
		<?php include 'include/nav-header.php'; ?>
		<!-- end: TOP NAVBAR -->
		<div class="main-content" >
			<div class="wrap-content container" id="container">
				<!-- start: BREADCRUMB -->
		<div class="breadcrumb-wrapper">
							<h4 class="mainTitle no-margin"><a href="#">< Back To DashBoard</a></h4>
							<ul class="pull-right breadcrumb">
								<li>
									<a href="index.html"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Home</a>
								</li>
								<li>
									Dashboard
								</li>
							</ul>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: FIRST SECTION -->

						<div class="container-fluid container-fullw padding-bottom-10">
							<div>
								<h4 class="margin-top-5"><span class="text-bold">Add Your New Email Server</span></h4>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-white no-radius">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-12">
													<div class="panel panel-white no-radius no-border">
														<div class="panel-heading">
															<div class="col-sm-9">
																<div class="form-group">
																<label for="exampleInputEmail1"> <h5 class="over-title margin-bottom-15"><span class="text-bold">Type Your Email Here</span></h5> </label>
																	<input class="form-control" id="InputEmail1" placeholder="" type="email">
																</div>
																<button type="submit" class="btn btn-wide btn-primary pull-right">
																	Send Link Verification
																</button>
																</div>
															</div>
														<!-- <div class="panel-body">
														</div> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<!-- start: FOOTER -->
	<?php include 'include/footer.php'; ?>
	<!-- end: FOOTER -->
	<!-- start: OFF-SIDEBAR -->
	<?php include 'include/off-sidebar.php'; ?>
	<!-- end: OFF-SIDEBAR -->
	<!-- start: SETTINGS -->
	<?php include 'include/settings-panel.php'; ?>
	<!-- end: SETTINGS -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<?php include 'include/main-js.php'; ?>
<!-- start: JavaScript Event Handlers for this page -->
<script src="assets/js/index.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		Index.init();
	});
</script>
<!-- end: JavaScript Event Handlers for this page -->
</body>
</html>
