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
	<link rel="stylesheet" href="assets/css/choose-participant.css">
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" />
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
					<h4 class="mainTitle no-margin">Select From Group</h4>
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
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-white no-radius">
								<div class="panel-body">
									<h5 class="over-title margin-bottom-15">Choose <span class="text-bold">Your Participant</span></h5>

									<div id="list-participant">
										<div class="row">
											<div class="col-md-1 vcenter center">
												<div class="checkbox clip-check check-primary">
													<input type="checkbox" id="checkbox1" value="1">
													<label for="checkbox1"></label>
												</div>
											</div><!--
											--><div class="col-md-6 vcenter">
												<h5 class="text-primary">Mas Saiful</h5>
												<p>
													Created Oct 21, 2016 2:04 am
													<span>No rating yet</span>
												</p>
											</div><!--
											--><div class="col-md-5 vcenter">
												<div class="subscribers">
													<span class="text-primary"><i class="fa fa-group"></i> 230</span> Subscribers
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1 vcenter center">
												<div class="checkbox clip-check check-primary">
													<input type="checkbox" id="checkbox2" value="1">
													<label for="checkbox2"></label>
												</div>
											</div><!--
											--><div class="col-md-6 vcenter">
												<h5 class="text-primary">Mas Saiful</h5>
												<p>
													Created Oct 21, 2016 2:04 am
													<span>No rating yet</span>
												</p>
											</div><!--
											--><div class="col-md-5 vcenter">
												<div class="subscribers">
													<span class="text-primary"><i class="fa fa-group"></i> 230</span> Subscribers
												</div>
											</div>
										</div>
									</div>

									<a class="btn btn-primary pull-right" href="index.php">Next</a>
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