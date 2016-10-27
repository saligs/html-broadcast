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
	<link rel="stylesheet" href="assets/css/imancss/selectize.css">
	<link rel="stylesheet" href="assets/css/rio.css">
	<link rel="stylesheet" href="assets/css/iman.css">
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
					<a href="dashboard.php"><h4 class="mainTitle no-margin">Choose Participant  &nbsp;  <i class="fa fa-angle-right"></i>&nbsp; Copy Paste  &nbsp; <i class="fa fa-angle-right"></i>&nbsp;Result Data</h4></a>
					<ul class="pull-right breadcrumb">
						<li>
							<a href="index.php"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Dashboard</a>
						</li>
						<li>
							Dashboard
						</li>
					</ul>
				</div>
				<!-- end: BREADCRUMB -->
				<!-- start: FIRST SECTION -->
				<div class="container padding-left-30 padding-right-30 padding-top-30">
					<div class="row">
						<div class="panel-heading"><h5 class="over-title margin-bottom"><span class="text-bold">Result Data From Copy Paste</span></h5></div>
					</div>
				</div>
				<div class="container-fluid container-fullw padding-bottom-10">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-white no-radius">
								<div class="panel-body padding-top-50 padding-bottom-50">

									<div class="row margin-bottom-20">

										<div class="col-md-3">
											<div class="warna padding-10">
												Field
											</div>
										</div>

									
										<div class="col-md-3">
											<div class="warna padding-10">
												<div class="row">
													<div class="col-md-6">
														Row 1
													</div>
													<div class="col-md-6 pull-right">
														<u>remove this row </u>
													</div>
												</div>
											</div>
										</div>	
									

										<div class="col-md-3">
											<div class="warna padding-10">
												Row 1
											</div>
										</div>

										<div class="col-md-3">
											<div class="warna padding-10">
												.....
											</div>
										</div>
									</div>

									<div class="row margin-bottom-20">
										<div class="col-md-3">
											<select id="select-beast1" class="demo-default" placeholder="Select a person...">
												<option value="">Select a Name</option>
												<option value="4">Thomas Edison</option>
												<option value="1">Phone</option>
												<option value="3">Nikola Tesla</option>
												<option value="5">Name</option>
											</select>
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder="text">
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder="text">
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder=".......">
										</div>
									</div>

									<div class="row margin-bottom-20">
										<div class="col-md-3">
											<select id="select-beast2" class="demo-default" placeholder="Select a person...">
												<option value="">Select a Name</option>
												<option value="4">Thomas Edison</option>
												<option value="1">Phone</option>
												<option value="3">Nikola Tesla</option>
												<option value="5">Name</option>
											</select>
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder="text">
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder="text">
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder=".......">
										</div>
									</div>

									<div class="row margin-bottom-20">
										<div class="col-md-3">
											<select id="select-beast3" class="demo-default" placeholder="Select a person...">
												<option value="">Select a Name</option>
												<option value="4">Thomas Edison</option>
												<option value="1">Phone</option>
												<option value="3">Nikola Tesla</option>
												<option value="5">Name</option>
											</select>
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder="text">
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder="text">
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder=".......">
										</div>
									</div>
									<div class="row margin-bottom-20">
										<div class="col-md-3">
											<select id="select-beast4" class="demo-default" placeholder="Select a person...">
												<option value="">Select a Name</option>
												<option value="4">Thomas Edison</option>
												<option value="1">Phone</option>
												<option value="3">Nikola Tesla</option>
												<option value="5">Name</option>
											</select>
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder="text">
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder="text">
										</div>

										<div class="col-md-3">
											<input type="text" class="form-control" placeholder=".......">
										</div>
									</div>

									<div class="row pull-right">
										<div class="col-md-6"><button type="button" class="margin-bottom-10 btn btn-wide btn-primary"> Save & Next</button></div>
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
<script src="assets/js/selectize.js"></script>

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

				<script>
				$('#select-beast1').selectize({
					create: true,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: 'body'
				});
				</script>

				<script>
				$('#select-beast2').selectize({
					create: true,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: 'body'
				});
				</script>

				<script>
				$('#select-beast3').selectize({
					create: true,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: 'body'
				});
				</script>

				<script>
				$('#select-beast4').selectize({
					create: true,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: 'body'
				});
				</script>

				
<!-- end: JavaScript Event Handlers for this page -->
</body>
</html>