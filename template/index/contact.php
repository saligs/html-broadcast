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
					<h4 class="mainTitle no-margin">Page Broadcast List</h4>
					<ul class="pull-right breadcrumb">
						<li>
							<a href="dashboard.php"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Home</a>
						</li>
						<li>
							Dashboard
						</li>
					</ul>
				</div>
				<!-- end: BREADCRUMB -->
				<!-- start: FIRST SECTION -->
				<div class="container-fluid padding-top-30 padding-bottom-10">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-white no-radius">
								<div class="panel-body">
									<div class="panel-heading">
										<h2 class="border-bottom padding-bottom-15"> Add Contact </h2>
									</div>
									<div class="row padding-left-30 padding-right-30 padding-bottom-30">
										<div class="col-md-3">
											<a href="import.php">
											<div class="button-border">
												<div class="icon-grey size-60 text-center">
													<i class="fa fa-download"></i><br>
												</div>
												<div class="text-center">
													Import Contact
												</div>
											</div>
											</a>
										</div>
										<div class="col-md-3">
											<a href="copas.php">
											<div class="button-border">
												<div class="icon-grey size-60 text-center">
													<i class="fa fa-copy"></i><br>
												</div>
												<div class="text-center">
													Copy Paste
												</div>
											</div>
											</a>
										</div>
										<div class="col-md-3">
											<a href="contact-manual.php">
											<div class="button-border">
												<div class="icon-grey size-60 text-center">
													<i class="fa fa-user-plus"></i><br>
												</div>
												<div class="text-center">
													Add Manual
												</div>
											</div>
											</a>
										</div>
										<div class="col-md-3">
											<a href="#">
											<div class="button-border">
												<div class="icon-grey size-60 text-center">
													<i class="fa fa-code"></i><br>
												</div>
												<div class="text-center">
													Use Api
												</div>
											</div>
											</a>
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