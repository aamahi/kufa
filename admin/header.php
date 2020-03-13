
<?php
session_start();
include_once ('../database.php');
//    if(!isset($_SESSION['user_all_info'])){
//    header('location:user/signin.php');
//    }

?>
<!doctype html>
<html lang="en" class="fixed left-sidebar-top">


<!-- Mirrored from myiideveloper.com/helsinki/last-version/helsinki_green-dark/src/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 13:03:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?=$title?></title>
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="vendor/pace/pace.min.js"></script>
    <link href="vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
    <!--dataTable-->
    <link rel="stylesheet" href="vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="stylesheets/css/style.css">


</head>
<body>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        <?php
            include_once('layout/pageheader.php');
        ?>
        <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
            <!-- NAV AREA -->
            <!-- ========================================================= -->
            <?php
            include_once('layout/nav.php');
            ?>