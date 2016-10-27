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
					<h4 class="mainTitle no-margin">Broadcast History</h4>
					<span class="mainDescription">Check your history for your better future</span>
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
										<div class="table-responsive padding-10">
											<table class="table">
												<tr>
													<td>
														<div class="checkbox clip-check check-primary checkbox-inline">
															<input type="checkbox" id="checkbox1" value="1">
															<label for="checkbox1"></label>
														</div>
													</td>
													<td colspan="3">
														Sort By
														<div class="btn-group">
															<button type="button" class="btn btn-light-grey">
																Name
															</button>
															<button type="button" class="btn btn-light-grey dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
																<span class="fa fa-angle-down"></span>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li role="presentation" class="dropdown-header">
																	Dropdown header
																</li>
																<li>
																	<a href="#"> Action </a>
																</li>
																<li>
																	<a href="#"> Another action </a>
																</li>
																<li>
																	<a href="#"> Something else here </a>
																</li>
																<li class="divider"></li>
																<li role="presentation" class="dropdown-header">
																	Dropdown header
																</li>
																<li>
																	<a href="#"> Separated link </a>
																</li>
															</ul>
														</div>
														<a href="#" class="btn btn-light-grey"><i class="fa fa-trash"></i> Delete</a>
													</td>
													<td colspan="5">
														<div class="col-md-6 pull-right">
															<span class="input-icon input-icon-right">
																<input type="text" placeholder="Search..." id="form-field-17" class="form-control">
																<i class="fa fa-search"></i>
															</span>
														</div>
													</td>
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
										<div class="row">
										<div class="col-xs-4 full-block">
											<div class="dataTables_length padding-left-15" id="sample_2_length">
												<label>Show
													<div class="clip-select inline-block">
														<select name="sample_2_length" aria-controls="sample_2" class="form-control input-sm m-wrap small">
															<option value="5">5</option>
															<option value="10">10</option>
															<option value="15">15</option>
															<option value="20">20</option>
															<option value="-1">All
															</option>
														</select>
													</div> Rows</label>
											</div>
										</div>
										<div class="col-xs-8 full-block">
											<ul class="pagination no-margin margin-right-15 pull-right">
												<li>
													<a href="#"> <i class="ti-arrow-left"></i> </a>
												</li>
												<li>
													<a href="#"> 1 </a>
												</li>
												<li>
													<a href="#"> 2 </a>
												</li>
												<li>
													<a href="#"> 3 </a>
												</li>
												<li>
													<a href="#"> 4 </a>
												</li>
												<li>
													<a href="#"> <i class="ti-arrow-right"></i> </a>
												</li>
											</ul>
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