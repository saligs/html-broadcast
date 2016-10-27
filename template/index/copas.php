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
					<a href="index.php"><h4 class="mainTitle no-margin"><i class="fa fa-angle-left"></i> Back to Dashboard</h4></a>
				</div>
				<!-- end: BREADCRUMB -->
				<!-- start: FIRST SECTION -->
				<div class="container padding-left-30 padding-right-30 padding-top-30">
					<div class="row">
						<div class="panel-heading"><h5 class="over-title margin-bottom"> Copy Paste <span class="text-bold">Your Data Contact</span></h5></div>
					</div>
				</div>
				<div class="container-fluid padding-bottom-10">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-white no-radius">
								<div class="panel-body padding-top-50 padding-bottom-50">
									<textarea name="" id="" cols="30" rows="10" class="form-control" placeholder=" Email Address... Firstname... Lastname...\n\n Email Address... Firstname... Lastname...\n\n Email Address... Firstname... Lastname...\n\n Email Address... Firstname... Lastname...\n"></textarea>
									<a href="result.php" class="btn btn-primary pull-right margin-top-10">Save &amp; Next</a>
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
<script>
	var textAreas = document.getElementsByTagName('textarea');

	Array.prototype.forEach.call(textAreas, function(elem) {
		elem.placeholder = elem.placeholder.replace(/\\n/g, '\n');
	});
</script>
<!-- end: JavaScript Event Handlers for this page -->
</body>
</html>