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
					<h4 class="mainTitle no-margin">Dashboard</h4>
					<span class="mainDescription">Welcome to Broadcast</span>
				</div>
				<!-- end: BREADCRUMB -->
				<!-- start: FIRST SECTION -->
				<div class="container padding-top-30">
					<div class="row">
						<div class="col-md-4">
							<div class="area-button">
								<div class="size-40 text-center">
									<i class="fa fa-send color-primary"></i>
								</div>
								<div class="text-center margin-10">For Your SMS Broadcast<br> Marketing</div>
								<div class="text-center margin-bottom-10"><a href="broadcast_sms.php" class="btn btn-primary btn-squared">Create Your Broadcast SMS</a></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="area-button">
								<div class="size-40 text-center">
									<i class="fa fa-envelope color-primary"></i>
								</div>
								<div class="text-center margin-10">For Your Email Broadcast<br> Marketing</div>
								<div class="text-center margin-bottom-10"><a href="broadcast_email.php" class="btn btn-primary btn-squared">Create Your Broadcast Email</a></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="area-button">
								<div class="size-40 text-center">
									<i class="fa fa-users color-primary"></i>
								</div>
								<div class="text-center margin-10">Add Your Contact List<br> Here</div>
								<div class="text-center margin-bottom-10"><a href="contact.php" class="btn btn-primary btn-squared">Create Your Contact List</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid container-fullw padding-bottom-10">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-white no-radius">
								<div class="panel-body">
									<div class="text-center padding-20">
										<img src="assets/images/megaphone.png" class="icon-width padding-bottom-20" alt="">
										<h2>You have no Broadcast</h2>
										<a href="broadcast_sms.php" class="underline">Send SMS Broadcast</a> or <a href="broadcast_email.php" class="underline">Send Email Broadcast</a> to get started.
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