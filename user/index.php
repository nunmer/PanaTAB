<?php
require '../constants/config.php';
require '../constants/check-login.php';
require 'constants/fetch-my-info.php';

if ($logged == "1") {
	   if ($myrole == "user") {

	   }else{

	   	header("location:../");

	   }

	}else{

		header("location:../");

	}


?>

<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - My Account</title>

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
<link rel="icon" href="../assets/icon/favicon.ico">

<!-- Favicons -->
<link href="../assets_panatab/img/shanyraq.png" rel="icon">
  <link href="../assets_panatab/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets_panatab/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets_panatab/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets_panatab/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets_panatab/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets_panatab/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets_panatab/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets_panatab/css/style.css" rel="stylesheet">
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="header">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="../index" class="logo d-flex align-items-center">
        <img src="../assets_panatab/img/shanyraq.png" alt="" width = "40" height = "50">
        <span>PanaTAB</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../index">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="../listings">Dashboard</a></li>         
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<!-- <header id="header-wrap">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">

<ul class="list-inline">
<li><a style="padding-top:5px;" class="header-top-button"><i class="lni-envelope"></i><?php echo $site_email; ?></a></li>
</ul>

</div>
<div class="col-lg-5 col-md-7 col-xs-12">

<div class="header-top-right float-right">
	<?php
	if ($logged == "1") {
		?>
		<a href="./" class="header-top-button"><i class="lni-user"></i> My Account</a> |
       <a href="../logout" class="header-top-button"><i class="lni-enter"></i> Log Out</a>
       <?php

	}else{

		?>
		<a href="../login" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
       <a href="../register" class="header-top-button"><i class="lni-pencil"></i> Register</a>
   <?php

	}

	?>

</div>
</div>
</div>
</div>
</div>


<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
<div class="container">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
<a id="site_logo"  class="navbar-brand"><?php echo $site_title; ?></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item">
<a class="nav-link" href="../">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../listings">
Listings
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../faq">
FAQ
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../contact">
Contact
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../about">
About
</a>
</li>

</ul>
<div class="post-btn">
    <?php
	if ($logged == "1") {
		print '<a class="btn btn-common" href="upload"><i class="lni-pencil-alt"></i> Post an Ad</a>';

		}else{

		print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Login to Post</a>';

		}

      ?>

</div>
</div>
</div>

<ul class="mobile-menu">
<li>
<a class="" href="../">
Home
</a>
<li>
<a href="../listings">
Listings
</a>
<li>
<li>
<a  href="../faq">
FAQ
</a>
<li>
<li>
<a href="../contact">
Home
</a>
<li>
<li>
<a class="about" href="../about">
About
</a>
<li>
</ul>

</nav>

</header>

<div class="page-header" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">My Account</h2>
<ol class="breadcrumb">
<li><a href="../">Home /</a></li>
<li class="current" style="color:white">My Account</li>
</ol>
</div>
</div>
</div>
</div>
</div> -->


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a>
	<?php 
	if ($myavatar == null) {

		print '<img class="user_avatar" src="../assets/img/blank_avatar.png" alt="">';

	}else{
		print '<img class="user_avatar" src="../uploads/avatar/'.$myavatar.'" alt="">';

	}

	?>
	
</a>
</figure>
<div class="usercontent">
<h3><?php echo $myusername; ?>
	<?php if ($accver == "YES") { print '<span class="lni-check-mark-circle"></span>'; } ?>
</h3>
<h4>ID: <?php echo $myid; ?></h4>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a class="active" href="./">
<i class="lni-user"></i>
    <span>Мой Аккаунт</span>
</a>
</li>

<li>
<a href="myads">
<i class="lni-layers"></i>
    <span>Мои Объявления</span>
</a>
</li>
<li>
<a href="my-active-ads">
<i class="lni-cloud-check"></i>
    <span>Мои Активные</span>
</a>
</li>
<li>
<a href="my-pending-ads">
<i class="lni-cloud-upload"></i>
<span>Мои Отложенные</span>
</a>
</li>
<li>
<a href="my-featured-ads">
<i class="lni-star"></i>
<span>Мои Избранные</span>
</a>
</li>
<li>
<a href="upload">
<i class="lni-upload"></i>
<span>Загрузка</span>
</a>
</li>
<li>
<a href="../logout">
<i class="lni-enter"></i>
<span>Выход</span>
</a>
</li>
</ul>
</nav>
</div>

</aside>
</div>
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="page-content">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Dashboard</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-layers"></i></div>
<div class="contentbox">
<h2><a>Total Ad Posted</a></h2>
<h3><?php echo number_format($total_ads); ?> Add Posted</h3>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-cloud-check"></i></div>
<div class="contentbox">
<h2><a>Active Ads</a></h2>
<h3><?php echo number_format($active_ads); ?> Active Ads</h3>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-cloud-upload"></i></div>
<div class="contentbox">
<h2><a>Pending Ads</a></h2>
<h3><?php echo number_format($pending_ads); ?> Pending Ads</h3>
</div>
</div>
</div>
</div>
</div>


<div class="dashboard-box">
<h2 class="dashbord-title">Profile Settings</h2>
</div>

<div class="dashboard-wrapper">
	<?php require 'constants/check_reply.php'; ?>
<form action="app/up-acc.php" method="POST" autocomplete="off">

<div class="form-group mb-3">
<label class="control-label">Username</label>
<input id="UserName"  class="form-control input-md" name="user_name" value="<?php echo $myusername; ?>"  placeholder="Enter your username" required type="text">
<div class="tg-checkbox mt-3">
</div>
</div>

<div class="form-group mb-3">
<label class="control-label">Email</label>
<input type="email" id="UserEmail" class="form-control input-md" name="user_email" value="<?php echo $myemail; ?>" placeholder="Enter your email" required type="email">
<div class="tg-checkbox mt-3">
</div>
</div>

<button class="btn btn-common" type="submit">Update</button>
</form>
</div>




<div class="dashboard-box">
<h2 class="dashbord-title">Password Update</h2>
</div>

<div class="dashboard-wrapper">

<div class="form-group mb-3">
	<form action="app/new-password.php" method="POST" autocomplete="off" name="frm1" >
<label class="control-label">New Password</label>
<input class="form-control input-md" name="password"  placeholder="Enter your new password" required type="password">
<div class="tg-checkbox mt-3">
</div>
</div>

<div class="form-group mb-3">
<label class="control-label">Confirm New Password</label>
<input class="form-control input-md" name="confirmpassword" placeholder="Confirm your new password" required type="password">
<div class="tg-checkbox mt-3">
</div>
</div>

<button class="btn btn-common" onclick="return val_a();"  type="submit">Update</button>
</form>
</div>




<div class="dashboard-box">
<h2 class="dashbord-title">Avatar Update</h2>
</div>

<div class="dashboard-wrapper">

<form action="app/new-dp" method="POST"  enctype="multipart/form-data">
<div class="form-group mb-3">

<input class="form-control input-md" name="image" accept="image/*"  required type="file">
<div class="tg-checkbox mt-3">
</div>
</div>


<button class="btn btn-danger" type="submit">Update</button>
<?php
if ($myavatar == null) {

}else{

	print '<a'; ?> onclick = "return confirm('Are you sure you want to delete ?');"  <?php print ' class="btn btn-common" href="app/drop-dp.php?lnk='.base64_encode($myavatar).'">Delete Image</a>';

}

?>
</div>
</form>



</div>
</div>
</div>
</div>
</div>
</div>
</div>


<footer id="footer" class="footer">
<div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <img src="../assets_panatab/img/shanyraq.png" alt="">
              <span>PanaTAB</span>
            </a>
            <p>PanaTAB helps you share a room or an entire home — on your terms. Welcome to the future of co-living!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Register</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Login</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Advertisements</a></li>              
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              EXPO Block C1 <br>
              Nur-Sultan, Kazakhstan<br>
              Astana IT University <br><br>
              <strong>Phone:</strong> +7 777 771 1717<br>
              <strong>Email:</strong> info@astanait.edu.kz<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PanaTAB</span></strong>. All Rights Reserved
      </div>
      <div class="credits">       
        Designed by <a href="">AITU Students</a>
      </div>
    </div>
</footer>



<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="../assets/js/jquery-min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.slicknav.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/form-validator.min.js"></script>
<script src="../assets/js/contact-form-script.min.js"></script>
<script src="../assets/js/summernote.js"></script>
<script src="../assets/js/password-validate.js"></script>

 <!-- Vendor JS Files -->
 <script src="../assets_panatab/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../assets_panatab/vendor/aos/aos.js"></script>
  <script src="../assets_panatab/vendor/php-email-form/validate.js"></script>
  <script src="../assets_panatab/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets_panatab/vendor/purecounter/purecounter.js"></script>
  <script src="../assets_panatab/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets_panatab/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets_panatab/js/main.js"></script>

</body>

</html>