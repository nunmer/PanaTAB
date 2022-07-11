<?php
require '../constants/config.php';
require '../constants/check-login.php';

if ($logged == "1") {
	   if ($myrole == "user") {

	   }else{

	   	header("location:../");

	   }

	}else{

		header("location:../");

	}

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*10)-10;
}         
}else{
$page1 = 0;
$page = 1;  
}


?>

<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - My Featured Ads</title>

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
<a  href="myads">
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
<a  href="my-pending-ads">
<i class="lni-cloud-upload"></i>
<span>My Pending Ads</span>
</a>
</li>
<li>
<a  class="active" href="my-featured-ads">
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
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="page-content">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">My Featured Ads</h2>
</div>
<div class="dashboard-wrapper">
<?php require 'constants/check_reply.php'; ?>
<table class="table table-responsive dashboardtable tablemyads">
<thead>
<tr>

<th>Photo</th>
<th>Title</th>
<th>Category</th>
<th>Ad Status</th>
<th>Price</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<div id="all_rows">
  <?php

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author AND featured = 'yes' ORDER BY enc_id DESC LIMIT $page1,10");
    $stmt->bindParam(':author', $myid);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $row)
    {
      $ad_id = $row['ad_id'];
      $directory = "../uploads/ads/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];

      $status = $row['status'];
      if ($status == "active") {
        $st_p = '<span class="adstatus adstatusactive">Active</span>';
      }
            if ($status == "inactive") {
        $st_p = '<span class="adstatus adstatusexpired">Inactive</span>';
      }

      ?>
      <tr data-category="active">

<td class="photo"><img class="img-fluid img-list-dash" src="<?php echo $firstFile; ?>" alt=""></td>
<td data-title="Title">
<h3><?php echo $row['title']; ?></h3>
<span>Ad ID: <?php echo $row['ad_id']; ?></span>
</td>
<td data-title="Category"><span class="adcategories"><?php echo $row['category']; ?></span></td>
<td data-title="Ad Status"><?php echo $st_p; ?></td>
<td data-title="Price">
<h3><?php echo number_format($row['price']); ?></h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" target="_blank" href="../ad/<?php echo $row['ad_id']; ?>"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="edit-ad?node=<?php echo $row['ad_id']; ?>"><i class="lni-pencil"></i></a>
<a onclick = "return confirm('Are you sure you want to delete ?'); " class="btn-action btn-delete" href="app/drop-ad.php?node=<?php echo base64_encode($row['ad_id']); ?>"><i class="lni-trash"></i></a>
</div>
</td>
</tr>

<?php
    

    }
            
    }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



  ?>

</tbody>
</table>
</div>




</div>
</div>
<div class="pagination-bar">
<nav>
<ul class="pagination justify-content-center">
  <?php
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author  AND featured = 'yes' ORDER BY enc_id DESC");
    $stmt->bindParam(':author', $myid);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);

    $total_pages = $rec /10;
    $total_pages = ceil($total_pages);

    if ($total_pages > 1) {

        for ($b=1;$b<=$total_pages;$b++) {

          print '<li class="page-item"><a class="page-link '; if ($b == $page) { print ' active '; } print '" href="my-featured-ads?page='.$b.'">'.$b.'</a></li>';

        }
                                 

    }

            
  }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>

</ul>
</nav>
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