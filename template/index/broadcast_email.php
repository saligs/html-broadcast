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
									<h5 class="over-title margin-bottom-15">Choose <span class="text-bold">Your Receipents</span></h5>
									<div class="padding-30 border-light-grey margin-bottom-20">
										<div class="text-center"><i class="fa fa-users size-60 grey-icon"></i></div>
										<h3 class="text-center">You have no participant</h3>
										<div class="container">
											<center>
												<div class="button-four">

													<button type="button" class="margin-bottom-10 btn btn-wide btn-o btn-primary" data-toggle="modal" data-target=".modal-add-from-list">
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
										<div class="modal-all-container">
											<?php include 'modal-choose-participant.php'; ?>
											<?php include 'modal-choose-participant-one.php'; ?>
											<?php include 'modal-import.php'; ?>
											<?php include 'modal-copas.php'; ?>
										</div>
									</div>

									<!-- Setting -->
									<h5 class="over-title margin-bottom-15">Email <span class="text-bold">Configuration</span></h5>
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
														<h4 class="pull-left margin-right-10" style="margin-top: 5px; margin-bottom: 0;"><b>yasir@beon.co.id</b></h4>
														<a class="btn btn-success btn-xs float-xs-right float-md-none" href="#" style="margin-top: 3px;">Modify Email</a>
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
													<label for="exampleInputEmail1"> Content</label>
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
											<button type="button" class="btn btn-wide btn-o btn-primary margin-bottom-10">
												<i class="fa fa-plus"></i> Save as Draft
											</button>

											<button type="button" class="btn btn-wide btn-o btn-primary margin-bottom-10">
												<i class="fa fa-file-text-o"></i> Test Content
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

<?php include 'modal/add-from-list.php'; ?>
<?php include 'modal/one-by-one.php'; ?>
<?php include 'modal/import.php'; ?>
<?php include 'modal/copy-paste.php'; ?>

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
	$(document).ready(function(){
		$("#radio1").click(function(){
			$(".hide-show").hide("slow");
		});
		$("#radio2").click(function(){
			$(".hide-show").show("slow");
		});
	});
</script>
<!-- end: JavaScript Event Handlers for this page -->
</body>
</html>