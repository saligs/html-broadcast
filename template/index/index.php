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
				<div class="container padding-top-30">
					<div class="row">
						<div class="col-md-4"><a href="broadcast_sms.php"><img src="assets/images/b1.jpg" alt="" class="img-responsive margin-bottom-10 center-block"></a></div>
						<div class="col-md-4"><a href="broadcast_email.php"><img src="assets/images/b2.jpg" alt="" class="img-responsive margin-bottom-10 center-block"></a></div>
						<div class="col-md-4"><a href="contact.php"><img src="assets/images/b3.jpg" alt="" class="img-responsive margin-bottom-10 center-block"></a></div>
					</div>
				</div>
				<!-- start: FIRST SECTION -->
				<div class="container-fluid container-fullw padding-bottom-10">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-white no-radius">
								<div class="panel-body">
									<div class="text-center padding-20"><i class="fa fa-file-text-o size-60 grey-icon"></i>
<<<<<<< HEAD
										<h2>You have no Broadcast</h2>
										<a href="broadcast_sms.php" class="underline">Send SMS Broadcast</a> or <a href="broadcast_email.php" class="underline">Send Email Broadcast</a> to get started.
=======
										<h2>You have no broadcast</h2>
										<a href="broadcast_sms.php" class="underline">Send Campaign SMS</a> or <a href="broadcast_email.php" class="underline">Send Campaign Email</a> to get started.
>>>>>>> a56c84982e45ae6af5d09ee3922280badd8d6159
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