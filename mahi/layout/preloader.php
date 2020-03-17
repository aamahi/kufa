
<?php
include_once ('database.php');
//clint
$select_clint = "SELECT * FROM `clint`";
$select_clint_query = mysqli_query($db,$select_clint);
//clint_count
$count_clint = "SELECT count(*) as total_clint FROM `clint`";
$query_clint = mysqli_query($db,$count_clint);
$total_clint = mysqli_fetch_assoc($query_clint);

//service
$select_service = "SELECT * FROM `service`";
$service= mysqli_query($db,$select_service);
//count service
$count_service = "SELECT count(*) as total_service FROM `service`";
$query_service = mysqli_query($db,$count_service);
$total_service = mysqli_fetch_assoc($query_service);

//portfolio
//$select_portfolio = "SELECT * FROM `portfolio` ORDER BY `id` DESC LIMIT 3";
$select_portfolio = "SELECT * FROM `portfolio` ORDER BY `id`";
$portfolios = mysqli_query($db,$select_portfolio);
//count portfolio
$count_project = "SELECT count(*) as total_project FROM `portfolio`";
$query_project = mysqli_query($db,$count_project);
$total_project = mysqli_fetch_assoc($query_project);

//testimonial
$select_testimonial = "SELECT * FROM `testimonial`";
$testimonials = mysqli_query($db,$select_testimonial);

//Education
$select_education = "SELECT * FROM `education` ORDER BY `year` DESC";
$educations = mysqli_query($db,$select_education);

//social
$select_social = "SELECT * FROM `social`";
$socials = mysqli_query($db,$select_social);

?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mahi - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="mahi/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="mahi/css/bootstrap.min.css">
        <link rel="stylesheet" href="mahi/css/animate.min.css">
        <link rel="stylesheet" href="mahi/css/magnific-popup.css">
        <link rel="stylesheet" href="mahi/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="mahi/css/flaticon.css">
        <link rel="stylesheet" href="mahi/css/slick.css">
        <link rel="stylesheet" href="mahi/css/aos.css">
        <link rel="stylesheet" href="mahi/css/default.css">
        <link rel="stylesheet" href="mahi/css/style.css">
        <link rel="stylesheet" href="mahi/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>