<?php
require 'constants/config.php';
require 'constants/check-login.php';
require 'constants/fetch-ad-info.php';

	if ($logged == "1") {
	   if ($myrole == "admin") {

	   	$preview_allowed = "YES";

	   }else{

	   	if ($myid == $authid) {

	   		$preview_allowed = "YES";

	   	}else{

	   		$preview_allowed = "NO";
	   	}

       

	   }

	}else{

		if ($adstatus == "active") {

			$preview_allowed = "YES";

		}else{

			$preview_allowed = "NO";

		}

	

	}




?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - <?php echo $title; ?></title>
<?php
if ($preview_allowed == "YES") {

      $directory = "uploads/ads/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];

	?>

	<meta property="og:image" content="http://<?php echo $installation_path; ?>/<?php echo $firstFile; ?>" />
    <meta property="og:image:secure_url" content="https://<?php echo $installation_path; ?>/<?php echo $firstFile; ?>" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $short_des; ?>" />

    <?php

}

?>

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

      <a href="index.html" class="logo d-flex align-items-center">
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

<?php
if ($not_found == "YES") {

	require 'constants/404.php';

}else{

if ($preview_allowed == "YES") {

	?>

	<div class="section-padding">
<div class="container">

<div class="product-info row">
<div class="col-lg-8 col-md-12 col-xs-12">
<div class="ads-details-wrapper">
<div id="owl-demo" class="owl-carousel owl-theme">
	<?php
$dir = 'uploads/ads/'.$ad_id.'/*.png';

$fileList = glob($dir);

foreach($fileList as $filename){
print '
<div class="item">
<div class="">
<img class="img-fluid img-detail" src="../'.$filename.'" alt="">

</div>
<span class="price">'.number_format($price).' '.$currency.'</span>
</div>

';


}


?>

</div>
</div>
<div class="details-box">
<div class="ads-details-info">
<h2><?php echo $title; ?></h2>
<div class="details-meta">
<span><a><i class="lni-alarm-clock"></i> <?php echo $post_date; ?></a></span>
<span><a><i class="lni-map-marker"></i> <?php echo $city; ?></a></span>
<span><a><i class="lni-files"></i> <?php echo $ad_id; ?></a></span>
<span><a>Fixed Price : <strong> <?php echo $fixed; ?></strong></a></span>
</div>
<p class="mb-4"><?php echo $des; ?></p>


</div>
<div class="tag-bottom">
<div class="float-left">
<ul class="advertisement">
<li>
<p><strong><i class="lni-folder"></i> Category :</strong> <a><?php echo $category; ?></a></p>
</li>
<li>
<p><strong><i class="lni-archive"></i> Condition :</strong> <?php echo $adcond; ?></p>
</li>
<li>
<p><strong><i class="lni-package"></i> Brand :</strong> <a href="#"><?php echo $brand; ?></a></p>
</li>
</ul>
</div>
<div class="float-right">
<div class="share">
<div class="social-link">
<a class="facebook" data-toggle="tooltip" data-placement="top" title="Share on facebook" href="<?php echo $fbshare; ?>"><i class="lni-facebook-filled"></i></a>
<a class="twitter" data-toggle="tooltip" data-placement="top" title="Share on twitter" href="<?php echo $twshare; ?>"><i class="lni-twitter-filled"></i></a>
<a class="google" data-toggle="tooltip" data-placement="top" title="Share on google plus" href="<?php echo $gpshare; ?>"><i class="lni-google-plus"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">

<aside class="details-sidebar">
<div class="widget">
<h4 class="widget-title">Объявление, размещенное</h4>
<div class="agent-inner">
<div class="agent-title">
<div class="agent-photo">
<a href="#">
	<?php 
	if ($avatar == null) {

		print '<img class="user_avatar" src="../assets/img/blank_avatar.png" alt="">';

	}else{
		print '<img class="user_avatar" src="../uploads/avatar/'.$avatar.'" alt="">';

	}

	?>
</div>
<div class="agent-details">
<h3><a href="#"><?php echo $author; ?> <?php if ($verified == "YES") { print '<span class="lni-check-mark-circle"></span>'; } ?></a></h3>
<span><i class="lni-envelope"></i><?php echo $email; ?></span>
</div>
</div>
<?php
if (isset($_SESSION['reply'])) {

if ($_SESSION['reply'] == "012") {
	print '<strong>Ваше сообщение не было отправлено</strong>';
}

if ($_SESSION['reply'] == "011") {
	print '<strong>Ваше сообщение было отправлено</strong>';
}

unset($_SESSION['reply']);

}else{

}

?>
<form action="../app/send-ad-message.php" method="POST" autocomplete="OFF">
<input type="hidden" name="mailto" value="<?php echo $email; ?>">
<input type="hidden" name="ref" value="<?php echo $title; ?>">
<input type="hidden" name="adid" value="<?php echo $ad_id; ?>">
<input type="email" name="email" required class="form-control" placeholder="Твой email">
<input type="text" name="phone" required class="form-control" placeholder="Твой номер">
<textarea style="resize: none;" class="form-control" name="message" required >Меня интересует эта недвижимость [<?php echo $title; ?>] и я хотел бы знать больше подробностей.</textarea>
<button class="btn btn-common fullwidth mt-4">Отправить</button>
</form>
</div>
</div>

<div class="widget">
<h4 class="widget-title">Больше Объявлений От Продавца</h4>
<ul class="posts-list">

	<?php
	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author AND ad_id != :adid AND status = 'active' order by rand() LIMIT 6");
$stmt->bindParam(':author', $authid);
$stmt->bindParam(':adid', $ad_id);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach($result as $row)
    {
      $ad_id = $row['ad_id'];
      $directory = "uploads/ads/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];

    	?>
    	<li>
<div class="widget-thumb">
<a href="../ad/<?php echo $row['ad_id']; ?>"><img class="more-ads" src="../<?php echo $firstFile; ?>" alt="" /></a>
</div>
<div class="widget-content">
<h4 class="limit-text"><a href="../ad/<?php echo $row['ad_id']; ?>"><?php echo $row['title']; ?></a></h4>
<div class="meta-tag">
<span>
<a><i class="lni-map-marker"></i> <?php echo $row['city']; ?></a>
</span>

</div>
<h4 class="price"><?php echo number_format($row['price']); ?> <?php echo $currency; ?></h4>
</div>
<div class="clearfix"></div>
</li>

<?php
		

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    ?>

</ul>
</div>
</aside>

</div>
</div>

</div>
</div>







	<?php

}else{

	?>
<section class="subscribes section-padding">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="subscribes-inner">
<div class="icon">
<i class="lni-pointer"></i>
</div>

	     <div class="alert alert-danger closeable">
          <h3>Это объявление пока недоступно</h3>
          <p style="margin-left:30px;">The Ad <strong><?php echo $title; ?></strong> ждет одобрения администратора</p>
            <a class="close" href="#"></a>
        </div>


</div>
</div>

</div>
</div>
</section>



	<?php

}

}

?>




<footer id="footer" class="footer">
<div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
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