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
	<link rel="stylesheet" href="assets/css/imancss/selectize.css">
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
					<h4 class="mainTitle no-margin">Email Broadcast</h4>
					<span class="mainDescription">Send your broadcast via email</span>

					<ul class="pull-right breadcrumb">
						<li>
							<a href="index.php"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Dashboard</a>
						</li>
						<li>
							Email Broadcast
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
									<!-- Recipients -->
									<h5 class="over-title margin-bottom-15">1. Choose <span class="text-bold">Your Receipents</span></h5>
									<div class="padding-30 border-light-grey margin-bottom-20">
										<div class="text-center">
										<img src="assets/images/no-contact.png" class="icon-width padding-bottom-20" alt="">
										</div>
										<h3 class="text-center">You have no Receipents</h3>
										<div class="container">
											<center>
												<div class="button-four">

													<button type="button" class="margin-bottom-10 btn btn-wide btn-primary" data-toggle="modal" data-target=".modal-add-from-list">
														<i class="fa fa-plus"></i> Add From List
													</button>
													<button type="button" class="margin-bottom-10 btn btn-wide btn-primary" data-toggle="modal" data-target=".modal-one-by-one">
														<i class="fa fa-location-arrow"></i> One by one
													</button>
													<button type="button" class="margin-bottom-10 btn btn-wide btn-primary" data-toggle="modal" data-target=".modal-import">
														<i class="fa fa-download"></i> Import
													</button>
													<button type="button" class="margin-bottom-10 btn btn-wide btn-primary" data-toggle="modal" data-target=".modal-copy-paste">
														<i class="fa fa-copy"></i> Copy paste
													</button>

												</div>
											</center>
										</div>
									</div>

									<!-- Setting -->
									<h5 class="over-title margin-bottom-15">2. Email <span class="text-bold">Configuration</span></h5>
									<div class="padding-30 border-light-grey">
										<!-- Email From -->
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputEmail1"> From Name </label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputEmail1"> From Email </label>
													<div class="clearfix">
														<div class="col-md-8 no-padding">
															<select id="select-beast1" class="demo-default" placeholder="Select an email">
																<option value="">Select an email</option>
																<option value="4">thomas@edison</option>
																<option value="3">nikola@tesla</option>
															</select>
														</div>
														<div class="underline pull-left cursor-pointer margin-left-10 margin-top-8" data-toggle="modal" data-target=".modal-add-new-email">
															Add New Email
														</div>
													</div>
												</div>

											</div>
										</div>
										<!-- Subject -->
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="exampleInputEmail1"> Subject </label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Subject">
												</div>
											</div>
										</div>
										<!-- Email Content -->
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="exampleInputEmail1"> Broadcast Content</label>
													<a  class="btn btn-primary btn-xs float-xs-right float-md-none margin-left-10" href="#">Edit Content</a>
													<div class="center border-light-grey margin-top-10">
														<img src="assets/images/layout-1.jpg" class="img-responsive">
													</div>
												</div>
											</div>
										</div>
										<!-- Email Schedule -->
										<div class="row">
											<div class="col-md-12">
												<label> Delivery Schedule </label><br>
												<div class="col-md-5">
													<div class="radio clip-radio radio-primary radio-inline" onclick="$('#datepicker-container').hide();">
														<input type="radio" id="radio1" name="inline" value="radio1" checked="checked">
														<label for="radio1"> Send Now</label>
													</div>
													<div class="radio clip-radio radio-primary radio-inline" onclick="$('#datepicker-container').show();" style="margin-right: 0 !important;">
														<input type="radio" id="radio2" name="inline" value="radio2">
														<label for="radio2"> Send With Schedule</label>
													</div>
												</div>
												<div id="datepicker-container" style="display: none;">
													<div class="col-md-4">
														<p class="input-group input-append datepicker date">
															<input type="text" class="form-control">
														<span class="input-group-btn">
															<button type="button" class="btn btn-default">
																<i class="glyphicon glyphicon-calendar"></i>
															</button>
														</span>
														</p>
													</div>
													<div class="col-md-3">
														<p class="input-group input-append">
															<input value="16:30" id="form-field-17" class="form-control" type="text">
														<span class="input-group-btn">
															<button type="button" class="btn btn-default">
																<i class="fa fa-clock-o"></i>
															</button>
														</span>
														</p>
													</div>
												</div>
											</div>
										</div>


									</div>

									<div class="pull-right margin-top-20">
										<div class="button-three">
											<button type="button" class="btn btn-wide btn-o btn-default margin-bottom-10">
												Save as Draft
											</button>

											<button type="button" class="btn btn-wide btn-o btn-default margin-bottom-10">
												Test Content
											</button>

											<button type="button" class="btn btn-wide btn-primary margin-bottom-10">
												<i class="fa fa-location-arrow"></i> Send Now
											</button>
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

<?php include 'modal/add-from-list-email.php'; ?>
<?php include 'modal/one-by-one-email.php'; ?>
<?php include 'modal/import-email.php'; ?>
<?php include 'modal/copy-paste-email.php'; ?>
<?php include 'modal/add-new-email.php'; ?>

<!-- start: MAIN JAVASCRIPTS -->
<?php include 'include/main-js.php'; ?>
<script src="assets/js/selectize.js"></script>
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
<script>
	$(document).ready(function(){
		$("#radio1").click(function(){
			$(".hide-show").hide("slow");
		});
		$("#radio2").click(function(){
			$(".hide-show").show("slow");
		});
	});
</script>
<script>
	$('#select-beast1').selectize({
		create: false,
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