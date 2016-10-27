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
	<link rel="stylesheet" href="assets/css/choose-participant.css">
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
					<h4 class="mainTitle no-margin">Broadcast SMS</h4>
					<span class="mainDescription">Send your broadcast via sms</span>
					<ul class="pull-right breadcrumb">
						<li>
							<a href="index.html"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Dashboard</a>
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
												<div class="row">
													<div class="col-md-6">
														<div class="panel-heading">
															<h4 class="border-bottom padding-bottom-15">Choose <b>Your Participant</b></h4>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-8">
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
													<div class="col-md-4 pull-right">
														<span class="input-icon input-icon-right">
															<input placeholder="Text Field" id="form-field-17" class="form-control" type="text">
															<i class="fa fa-search" ></i>
														</span>
													</div>
												</div>

												<div class="row container margin-top-20">
													<div class="table-responsive">
														<table class="table table-hover" id="sample-table-1">
															<thead>
															<tr>
																<th class="center">id</th>
																<th>Email Address</th>
																<th>First Name</th>
																<th>Last Name</th>
																<th>City</th>
																<th>Phone</th>
																<th>Action</th>
															</tr>
															</thead>
															<tbody>
															<tr>
																<td class="center">1</td>
																<td>Rifki Fardianzah@gmail.com</td>
																<td>Rifki</td>
																<td>Fardianzah</td>
																<td>Malang</td>
																<td>0856718920</td>
																<td><u><a href="#" >Unselected</a></u></td>
															</tr>
															<tr>
																<td class="center">2</td>
																<td>Rifki Fardianzah@gmail.com</td>
																<td>Rifki</td>
																<td>Fardianzah</td>
																<td>Malang</td>
																<td>0856718920</td>
																<td><u><a href="#" >Unselected</a></u></td>
															</tr>
															<tr>
																<td class="center">3</td>
																<td>Rifki Fardianzah@gmail.com</td>
																<td>Rifki</td>
																<td>Fardianzah</td>
																<td>Malang</td>
																<td>0856718920</td>
																<td><u><a href="#" >Unselected</a></u></td>
															</tr>
															<tr>
																<td class="center">4</td>
																<td>Rifki Fardianzah@gmail.com</td>
																<td>Rifki</td>
																<td>Fardianzah</td>
																<td>Malang</td>
																<td>0856718920</td>
																<td><u><a href="#" >Unselected</a></u></td>
															</tr>
															<tr>
																<td class="center">5</td>
																<td>Rifki Fardianzah@gmail.com</td>
																<td>Rifki</td>
																<td>Fardianzah</td>
																<td>Malang</td>
																<td>0856718920</td>
																<td><u><a href="#" >Unselected</a></u></td>
															</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="dataTables_length">
														<label>View</label>
														<div class="clip-select inline-block">
															<label><select aria-controls="sample_2" class=
																"form-control input-sm m-wrap small" name="sample_2_length">
																	<option value="5">
																		5
																	</option>
																	<option value="10">
																		10
																	</option>
																	<option value="15">
																		15
																	</option>
																	<option value="20">
																		20
																	</option>
																	<option value="-1">
																		All
																	</option>
																</select></label>
														</div>
													</div>
												</div>
												<div class="col-md-6 ">
													<div class="pull-right">
														<ul class="pagination no-margin margin-bottom-10">
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

												<div class="row">
													<div class="col-md-6">
														<div class="panel-heading">
															<h4 class="border-bottom padding-bottom-15 margin-bottom-20 ">Write <b>Message Content</b>
															</h4>
														</div>
													</div>
												</div>


												<div class="container">
													<div class="row">
													<div class="col-md-6">
														<p><b>Message</b></p>
														<div>

															<textarea class="text-area-responsive margin-bottom-10" name="message" rows="10" cols="70">Type Your Message Here ...</textarea>
														</div>	
													</div>
													</div>
												</div>

												<div class="container">
												<div class="row margin-bottom-10">
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
												</div>
												</div>
												<div class="container">
														<div class="row">
															<div class="col-md-4" >
																<p class="input-group input-append datepicker date">
																	<input type="text" class="form-control">
																			<span class="input-group-btn">
																				<button type="button" class="btn btn-default">
																					<i class="glyphicon glyphicon-calendar"></i>
																				</button> </span>
																</p>
															</div>
															<div class="col-md-3" >
																		 <span class="input-icon input-icon-right">
																		 <input value="16:30" id="form-field-17" class="form-control" type="text">
																		 <i class="fa fa-clock-o"></i>
																		 </span>
															</div>
															<div class="col-md-5" >
																<label>UTC+17</label>
															</div>
														</div>
												</div>
												<div class="container">
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
	$(function() {
		$( "#tanggal" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
</script>
<!-- end: JavaScript Event Handlers for this page -->
</body>
</html>