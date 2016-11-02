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
	<link rel="stylesheet" href="assets/css/rio.css">
	<link rel="stylesheet" href="assets/css/imancss/selectize.css">
	<link rel="stylesheet" href="assets/css/handsontable.full.min.css">
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
				<div class="container-fluid padding-top-30 padding-bottom-10">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel-heading"><h5 class="over-title margin-bottom-0"> Copy Paste <span class="text-bold">Your Data Contact</span></h5></div>
							<div class="panel panel-white no-radius">
								<div class="panel-body padding-30">
									<p>Select some column in your excel then paste it in the box below. You can also add your new field in first row.</p>

									<div id="hot"></div>
									<!-- Additional -->
									<div class="optional-box margin-top-15" style="display: none;">
										<p>You can also add Group to new contact</p>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-1">
														<div class="margin-top-8 text-bold">Grup</div>
													</div>
													<div class="col-md-11">
														<select class="select-group" name="select_group[]" placeholder="Select a Group">
															<option value="">Select a Group</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-5 hide">
												<div class="row">
													<div class="col-md-2">
														<div class="margin-top-8 text-bold">Tag</div>
													</div>
													<div class="col-md-10">
														<select class="select-tag" placeholder="Select a Tag">
															<option value="">Select a Tag</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div id="export-buttons" class=" visible">
										<button id="export-string" class="btn btn-primary pull-right margin-top-20" data-toggle="modal" data-target=".modal-copas">Save Contact</button>
										<button type="button" class="btn btn-o btn-default margin-top-20 margin-right-10 pull-right show-optional-btn" onclick="$(this).hide(); $('.optional-box').show();">Show Other Option</button>
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
	<?php include 'modal/modal-copas.php'; ?>
</div>
<!-- start: MAIN JAVASCRIPTS -->
<?php include 'include/main-js.php'; ?>
<!-- start: JavaScript Event Handlers for this page -->

<script src="assets/js/selectize.js"></script>
<script src="assets/js/handsontable.full.min.js"></script>
<script src="assets/js/index.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		Index.init();

		var firstRow = ['Firstname','Lastname','Email','Phone'];
		var myData = [
			firstRow,
			[],
			[],
			[],
			[],
			[],
			[],
			[],
			[],
			[],
			[],
			[],
			[],
			[]
		];

		var hotElement = document.querySelector('#hot');
		var hotElementContainer = hotElement.parentNode;
		var hotSettings = {
			data: myData,
			startRows: 5,
			startCols: 5,
			minSpareCols: 1,
			//always keep at least 1 spare row at the right
			minSpareRows: 1,
			autoWrapRow: true,
			height: 350,
			//always keep at least 1 spare row at the bottom,
			rowHeaders: true,
			colHeaders: true,
			contextMenu: true
		};

		var hot = new Handsontable(hotElement, hotSettings);


		$('.select-group').selectize({
			persist: false,
			maxItems: null,
			valueField: 'id',
			labelField: 'name',
			searchField: ['name'],
			options: [{
				id: '1',
				name: 'Group 1'
			},{
				id: '2',
				name: 'Group 2'
			},{
				id: '3',
				name: 'Group 3'
			}]
		});
	});
</script>
<script>
	var textAreas = document.getElementsByTagName('textarea');

	Array.prototype.forEach.call(textAreas, function(elem) {
		elem.placeholder = elem.placeholder.replace(/\\n/g, '\n');
	});
</script>
<!-- end: JavaScript Event Handlers for this page -->
</body>
</html>