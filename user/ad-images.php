<?php
require '../constants/config.php';
require '../constants/check-login.php';
require 'constants/ad-img-fetch.php';

if (isset($_GET['node'])) {

}else{
 header('location:../');
}

if ($ad_rec == "1") {

}else{
   header('location:../');
}

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
<title><?php echo $site_title; ?> - Manage Ad Images</title>

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="../assets/css/summernote.css">
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

      <a href="index.php" class="logo d-flex align-items-center">
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


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a >
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
<a  href="./">
<i class="lni-user"></i>
<span>My Account</span>
</a>
</li>

<li>
<a href="myads">
<i class="lni-layers"></i>
<span>My Ads</span>
</a>
</li>
<li>
<a href="my-active-ads">
<i class="lni-cloud-check"></i>
<span>My Active Ads</span>
</a>
</li>
<li>
<a href="my-pending-ads">
<i class="lni-cloud-upload"></i>
<span>My Pending Ads</span>
</a>
</li>
<li>
<a href="my-featured-ads">
<i class="lni-star"></i>
<span>My Featured Ads</span>
</a>
</li>
<li>
<a href="upload">
<i class="lni-upload"></i>
<span>Upload Ads</span>
</a>
</li>
<li>
<a href="../logout">
<i class="lni-enter"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>

</aside>
</div>
<div class="col-sm-12 col-md-12 col-lg-9">
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title"><?php echo $ad_title; ?></h2>
</div>
<div class="dashboard-wrapper">
<p>Browse image files to upload for the Ad <b><?php echo $ad_title; ?></b><br>All images must have a dimension of <strong>(750 X 450)</strong></p>
  <?php require 'constants/check_reply.php'; ?>
<form action="app/send-image.php" method="POST"  enctype="multipart/form-data">
<input   accept="image/*"   type='file' onchange="readURL(this);" required name="image" /><br><br>
<input type="hidden" name="uploadlink" value="<?php echo $add_id; ?>">
<img id="blah"class="image-preview" src="../assets/img/blank.png" alt="Image Preview" /><br><br>
<button class="btn btn-common" type="submit">Upload</button>
<script>
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
      </script>
    </form>
<hr>
<h5 class="dashbord-title">Uploaded Images</h5>
<strong>N:B Click on image to delete</strong><br><br>

<center>
<?php
$dir = '../uploads/ads/'.$add_id.'/*.png';

$fileList = glob($dir);

foreach($fileList as $filename){
    print '<a'; ?> onclick = "return confirm('Are you sure you want to delete ?')" <?php print ' href="app/drop-image.php?id='.$add_id.'&lnk='.$filename.'"><img id="blah"class="image-list" src="'.$filename.'" alt="Image Preview" /></a>';

}


?>
</center>
<hr>

</div>
</div>
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

<script>
      $('#summernote').summernote({
          height: 250, // set editor height
          minHeight: null, // set minimum height of editor
          maxHeight: null, // set maximum height of editor
          focus: false // set focus to editable area after initializing summernote
      });
    </script>
</body>

</html>