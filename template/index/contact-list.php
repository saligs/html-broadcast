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
							<a href="dashboard.php"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Dashboard</a>
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
										<h4 class="border-bottom padding-bottom-15"> Choose Your Recipient From Your Contact </h4>
									</div>
										<div class="table-responsive padding-10">
											<table class="table">
												<tr>
													<td>
														<div class="checkbox clip-check check-primary checkbox-inline">
															<input type="checkbox" id="checkbox1" value="1">
															<label for="checkbox1"> <b class="color-blue-dark">Contact</b> </label>
														</div>
													</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td width="1%">
														<div class="checkbox clip-check check-primary checkbox-inline">
															<input type="checkbox" id="checkbox2" value="1">
															<label for="checkbox2"></label>
														</div>
													</td>
													<td>1</td>
													<td>Saiful</td>
													<td>Muklis</td>
													<td>saifulmuklis@gmail.com</td>
													<td>08556456334</td>
												</tr>
												<tr>
													<td width="1%">
														<div class="checkbox clip-check check-primary checkbox-inline">
															<input type="checkbox" id="checkbox3" value="1">
															<label for="checkbox3"></label>
														</div>
													</td>
													<td>2</td>
													<td>Andika</td>
													<td>Stya</td>
													<td>andikastya@gmail.com</td>
													<td>08956789643</td>
												</tr>
												<tr>
													<td width="1%">
														<div class="checkbox clip-check check-primary checkbox-inline">
															<input type="checkbox" id="checkbox4" value="1">
															<label for="checkbox4"></label>
														</div>
													</td>
													<td>3</td>
													<td>Tofa</td>
													<td>Suriawan</td>
													<td>tofasuriawan@gmail.com</td>
													<td>08956565454</td>
												</tr>
											</table>
										</div>
									<div class="row margin-bottom-10">
										<div class="col-md-6"></div>
										<div class="col-md-6">
											<div class="pull-right">
												<span class="margin-right-20"><b class="color-blue-dark">10 Contact</b> Selected</span> <a href="#" class="btn btn-primary">Add Contact From List</a>
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