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
					<h4 class="mainTitle no-margin">Broadcast Email</h4>
					<ul class="pull-right breadcrumb">
						<li>
							<a href="index.html"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Home</a>
						</li>
						<li>
							Dashboard
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
									<div class="row">
										<div class="col-md-12">
											<div class="panel panel-white no-radius no-border">
												<div class="panel-heading">
													<h5 class="over-title margin-bottom-15"> 1. Choose <span class="text-bold">Your Receipents</span></h5>
												</div>
												<div class="panel-body">
													<div class="padding-30 border-light-grey margin-bottom-20">
														<div class="text-center"><i class="fa fa-users size-60 grey-icon"></i></div>
														<h3 class="text-center">You have no participant</h3>
														<div class="container">
															<center>
																<div class="button-four">
																	<a href="contact-manual.php" class="margin-bottom-10 btn btn-wide btn-o btn-primary">
																		<i class="fa fa-plus"></i> Add From List
																	</a>
																	<a href="#" class="margin-bottom-10 btn btn-wide btn-primary">
																		<i class="fa fa-location-arrow"></i> One by one
																	</a>
																	<a href="import.php" class="margin-bottom-10 btn btn-wide btn-primary">
																		<i class="fa fa-download"></i> Import
																	</a>
																	<a href="copas.php" class="margin-bottom-10 btn btn-wide btn-primary">
																		<i class="fa fa-copy"></i> Copy paste
																	</a>
																</div>
															</center>
														</div>
													</div>
												</div>
												<div class="panel-heading"><h5 class="over-title margin-bottom-15"> 2. Setting <span class="text-bold">Email</span></h5></div>
												<div class="panel-body">
													<div class="padding-30 border-light-grey">
														<div class="row">
															<div class="col-md-9">
																<div class="form-group">
																	<label for="exampleInputEmail1"> Email address </label>
																	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
																</div>
															</div>
															<div class="col-md-3">

															</div>
														</div>

														<div class="row">

															<div class="col-md-6">

																<div class="form-group">
																	<label for="exampleInputEmail1"> From Email Name </label>
																	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
																</div>
																<div class="form-group">
																	<label for="exampleInputEmail1"> Email Content </label><br>
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputEmail1"> From Email address </label><br>
																	<h4 class="pull-left margin-right-10"><b>yasir@beon.co.id</b></h4> <a class="underline" href="#" class="pull-left">Modify Email</a>
																</div><br>

																<div class="form-group">
																	<a  class="underline" href="#"> <b>Edit Content</b></a>
																</div>
															</div>

														</div>

														<div class="row">
															<div class="col-md-7">
																<img src="assets/images/layout-1.jpg" class="img-responsive">
															</div>

														</div></br>

														<div class=" row">
															<div class="col-md-12">
																<label> Schedule Email </label><br>
																<div class="radio clip-radio radio-primary radio-inline">
																	<input type="radio" id="radio1" name="inline" value="radio1">
																	<label for="radio1"> Send Now </label>
																</div>
																<div class="radio clip-radio radio-primary radio-inline">
																	<input type="radio" id="radio2" name="inline" value="radio2">
																	<label for="radio2"> Send With Scedhule </label>
																</div>
															</div>
														</div></br>

														
																<div class="hide-show row">
																	<div class="col-md-4" >		
																	<p class="input-group input-append datepicker date">
																<input class="form-control" type="text" id="datepicker">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-default">
																		<i class="glyphicon glyphicon-calendar"></i>
																	</button> </span>
																	</p>
																	</div>

																	<div class="col-md-3" >	
																		<p class="input-group input-append datepicker date">
																	<input class="form-control" type="text" id="datepicker">
																	<span class="input-group-btn">
																	<button type="button" class="btn btn-default">
																		<i class="glyphicon glyphicon-time"></i>
																	</button> </span>
																	</p>																	
																	</div>

																	<div class="col-md-5 margin-top-10" >	
																		<label>UTC+17</label>																
																	</div>         
																</div>
													</div>
												</div>
												<br>
												<div class="pull-right">
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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