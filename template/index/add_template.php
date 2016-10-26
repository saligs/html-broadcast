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
        <div class="main-content">
            <div class="wrap-content container" id="container">
                <!-- start: BREADCRUMB -->
                <div class="breadcrumb-wrapper">
                    <a href="broadcast_email.php"><h4 class="mainTitle no-margin"><i class="fa fa-angle-left"></i> Back to Setting Email</h4></a>
                </div>
                <div class="container-fluid container-fullw padding-bottom-10">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="over-title margin-bottom-15">Choose <span class="text-bold">Your Template</span></h5>
                            <div class="row">
                                <div class="col-sm-5 col-xs-6">
                                    <!-- <button type="button" class="btn btn-primary btn-wide jarak tombol3">Basic</button>
                                    <button type="button" class="btn btn-o btn-primary btn-hover btn-wide tombol4">Save Template</button> -->
                                </div>
                                <div class="col-sm-4 col-xs-0"></div>
                                <div class="col-sm-3 col-xs-6">
                                    <!-- <a href="design_email.php" class="btn btn-primary pull-right tombol4">
                                        <i class="fa fa-arrow-circle-right"></i> Save & Next Step
                                    </a> -->
                                </div>
                            </div>

                            <div class="margin-bottom-20"></div>
                            <div class="panel panel-white no-radius kertas">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="panel panel-white" id="panel1">
                                                <div class="panel-body posisi">
                                                    <div class="col-sm-6"><img src="assets/images/template2.png" class="img-responsive gmbr">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="no-margin bold">1 Column</p>
                                                        <p>Drag and Drop</p>
                                                        <a href="design_email.php" class="btn btn-grey tombol2">Select</a href="design_email.php">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="panel panel-white" id="panel1">
                                                <div class="panel-body posisi">
                                                    <div class="col-sm-6"><img src="assets/images/template1.png" class="img-responsive gmbr">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="no-margin bold">1 Column</p>
                                                        <p>Drag and Drop</p>
                                                        <a href="design_email.php" class="btn btn-grey tombol2">Select</a href="design_email.php">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="panel panel-white" id="panel1">
                                                <div class="panel-body posisi">
                                                    <div class="col-sm-6"><img src="assets/images/template2.png" class="img-responsive gmbr">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="no-margin bold">2 Column</p>
                                                        <p>Drag and Drop</p>
                                                        <a href="design_email.php" class="btn btn-grey tombol2">Select</a href="design_email.php">
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
                <!-- end: BREADCRUMB -->
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