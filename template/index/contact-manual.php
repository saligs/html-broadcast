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
				<div class="container-fluid container-fullw padding-bottom-10">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-white no-radius">
								<div class="panel-body">
									<!-- Field -->
									<h5 class="over-title margin-bottom"> Add Your <span class="text-bold">Contact List Manually</span></h5>
									<div class="padding-30 border-light-grey">
										<!-- Primary -->
										<div class="row margin-bottom-20">
											<div class="col-md-5">
												<select id="select-beast1" class="demo-default" placeholder="Select a person...">
													<option value="5" selected>Email</option>
												</select>
											</div>
											<div class="col-md-5">
												<input type="text" class="form-control" placeholder="Your Text Field">
											</div>
											<div class="col-md-2">
												<div class="padding-top-10"><a href="#"><u>Delete</u></a></div>
											</div>
										</div>
										<div class="row margin-bottom-20">
											<div class="col-md-5">
												<select id="select-beast2" class="demo-default" placeholder="Select a person...">
													<option value="5" selected>Phone</option>
												</select>
											</div>
											<div class="col-md-5">
												<input type="text" class="form-control" placeholder="Your Text Field">
											</div>
											<div class="col-md-2">
												<div class="padding-top-10"><a href="#"><u>Delete</u></a></div>
											</div>
										</div>
										<div class="row margin-bottom-20 add-field" style="display: none;">
											<div class="col-md-5">
												<select id="select-beast3" class="demo-default" placeholder="Select a person...">
													<option value="">Select a Name</option>
													<option value="4">Thomas Edison</option>
													<option value="1">Phone</option>
													<option value="3">Nikola Tesla</option>
													<option value="5">Name</option>
												</select>
											</div>
											<div class="col-md-5">
												<input type="text" class="form-control" placeholder="Your Text Field">
											</div>
											<div class="col-md-2">
												<div class="padding-top-10"><a href="#"><u>Delete</u></a></div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-10">
												<div class="underline cursor-pointer pull-right" onclick="$('.add-field').show()">Add Field</div>
											</div>
											<div class="col-md-2">

											</div>
										</div>
									</div>

									<!-- Additional -->
									<div class="optional-box margin-top-15 padding-left-30 padding-right-30" style="display: none;">
										<p>You can also add group and tag to new contact</p>
										<div class="row">
											<div class="col-md-5">
												<div class="row">
													<div class="col-md-2">
														<div class="margin-top-8 text-bold">Grup</div>
													</div>
													<div class="col-md-10">
														<select id="select-beast-option1" class="demo-default" placeholder="Select a person...">
															<option value="">Select a Name</option>
															<option value="4">option</option>
															<option value="1">option</option>
															<option value="3">option</option>
															<option value="5">option</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-5">
												<div class="row">
													<div class="col-md-2">
														<div class="margin-top-8 text-bold">Tag</div>
													</div>
													<div class="col-md-10">
														<select id="select-beast-option2" class="demo-default" placeholder="Select a person...">
															<option value="">Select a Name</option>
															<option value="4">option</option>
															<option value="1">option</option>
															<option value="3">option</option>
															<option value="5">option</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Optional & Save -->

									<a href="index.php" class="btn btn-primary margin-top-20 pull-right">Save Contact</a>
									<button class="btn btn-o btn-primary margin-top-20 margin-right-10 pull-right" onclick="$(this).hide(); $('.optional-box').show();">Show Other Option</button>
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

				<script>
				$('#select-beast5').selectize({
					create: true,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: 'body'
				});
				</script>

				<script>
				$('#select-beast-option1').selectize({
					create: true,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: 'body'
				});
				</script>

				<script>
				$('#select-beast-option2').selectize({
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