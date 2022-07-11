<?php
require 'constants/config.php';
require 'constants/check-login.php';
require 'connection.php';
if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*18)-18;
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
<title>Все пользователи</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="icon" href="assets/icon/favicon.ico">

<!-- Favicons -->
<link href="assets_panatab/img/shanyraq.png" rel="icon">
  <link href="assets_panatab/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets_panatab/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets_panatab/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets_panatab/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets_panatab/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets_panatab/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets_panatab/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="https://assets.codepen.io/344846/style.css" rel="stylesheet">
  <link rel="stylesheet" href="./dashboard/style.css">
  <!-- Template Main CSS File -->
  <link href="assets_panatab/css/style.css" rel="stylesheet">
</head>
<body>




<!-- ======= Header ======= -->
<header id="header" class="header">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets_panatab/img/shanyraq.png" alt="" width = "40" height = "50">
        <span>PanaTAB</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="index">Домой</a></li>
            <li><a class="nav-link scrollto" href="#about">О нас</a></li>
            <li><a class="nav-link scrollto"<a href="listings">Обявление</a></li>
            <li><a class="nav-link scrollto" href="#faq">Частые вопросы</a></li>
            <li><a class="nav-link scrollto" href="#contact">Контакты</a></li>
            <li>
          <?php
	        if ($logged == "1") {
		        ?>
            <a class="nav-link scrollto" href="user/index">Мой аккаунт</a>
          <?php

	          }else{

		        ?>
		          <a class="getstarted scrollto" href="login">Войти</a>
          <?php

	              }

	        ?>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
	
		
  </header><!-- End Header -->

	<div class="h-16 lg:flex w-full border-b border-gray-200 hidden px-10">

      <!-- Subpages (Dashboard, Users) -->
        <div class="flex h-full text-gray-600 ">
          <a href="allprof" class="cursor-pointer h-full border-b-2 border-transparent inline-flex items-center mr-8">Все пользователи</a>
          <a href="listings" class="cursor-pointer h-full text-blue-500 inline-flex mr-8 items-center">Обявления</a>        
        </div>
    </div>
  
	
<section class="featured section-padding">

<div class="container">
	<div class="row">
<div class="col-sm-12">
	<div class="product-filter">
<form action="profiles" method="POST" autocomplete="off">
	<div class="row">
		<div class="col-sm-5">
			<input type="text" style="margin-top: 15px; margin-bottom: 15px;"  class="form-control" name="keyword" placeholder="Кого вы ищите?">
		</div>
		
		<div class="col-sm-2">

			<select class="form-control"  style="height:44px; margin-top: 15px; margin-bottom: 15px;"  name="gender" value="Пол" required>
				<option value="all">Пол</option>
				<option value="Male">Муж</option>
				<option value="Female">Жен</option>
			</select>

		</div>
		
		<div class="col-sm-3">

			<select class="form-control"  style="height:44px; margin-top: 15px; margin-bottom: 15px;"  name="city" required>

				<option value="all">Все города</option>
				<option value="Nur-Sultan">Nur-Sultan</option>
				<option value="Almaty">Almaty</option>
				<option value="Pavlodar">Pavlodar</option>
				<option value="Aktobe">Aktobe</option>
				<option value="Atyrau">Atyrau</option>
				<option value="Karaganda">Karaganda</option>
				<option value="Semey">Semey</option>
				<option value="Taraz">Taraz</option>
				<option value="Shymkent">Shymkent</option>
				<option value="Uralsk">Uralsk</option>
				<option value="Aktau">Aktau</option>
				<option value="Kyzylorda">Kyzylorda</option>
				<option value="Taldykorgan">Taldykorgan</option>
				<option value="Petropavlovsk">Petropavlovsk</option>
				<option value="Oskemen">Oskemen</option>
			
			</select>

		</div>
		<input type="hidden" value="✓" name="search">
		<div class="col-sm-2">
			<input type="submit" style="height:44px; margin-top: 15px; margin-bottom: 15px;  width:100%"  class="btn btn-common" value="Поиск">
		</div>
	</div>
</form>


</div>
</div>
</div>

<div class="row">

</div>
</div>

</section>

	<!-- NEW LIST-->
<div class="row">
	<?php
			
				$query=mysqli_query($conn,"SELECT * FROM `tbl_profiles` LEFT JOIN `tbl_users` ON tbl_profiles.author=tbl_users.user_id;");
				while($row=mysqli_fetch_array($query)){
		  
	?>
	<div class="space-y-4 mt-0 ml-5">
        
          <button class="mt-5 bg-white p-3 w-50 flex flex-col rounded-md shadow" onclick=" window.open('<?php echo 'dashboard/profile.php?profile_id=', $row['profile_id'];?>','_blank')">
            <div class="flex xl:flex-row flex-col items-center font-medium text-gray-900 pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 w-full">
              <img src="<?php 
			  
				if($row['avatar']==NULL){
					echo "assets/img/blank_avatar.png";
				}else{
					echo "uploads/avatar/", $row['avatar'];
				}
			  ?>" class="w-7 h-7 mr-2 rounded-full" alt="profile" />
              <?php echo $row['username']; ?>
				<div class="ml-1	 text-xs py-1 px-2 leading-none bg-blue-100 rounded-md">Пол: <?php if($row['gender']=="Male"){echo "М";}else{echo "Ж";} ?></div>
			  <div class="ml-auto text-xs text-gray-500"><?php echo $row['budget'];  echo  ' ', $currency;?></div>
            </div>
            <div class="flex items-center w-full">
              <div class="text-xs py-1 px-2 leading-none bg-blue-100 text-red-500 rounded-md">Instagram: <?php echo $row['instagram']; ?></div>
			  <div class="ml-1	 text-xs py-1 px-2 leading-none bg-blue-100 text-blue-500 rounded-md">Telegram: <?php echo $row['telegram']; ?></div>
			  <div class="ml-1	 text-xs py-1 px-2 leading-none bg-blue-100 text-green-500 rounded-md">Город: <?php echo $row['city']; ?></div>
            </div>
			
			<br>
			<div class="flex items-center w-full">
              <div class="text-s py-1 px-2 leading-none bg-gray-200 text-grey-500 rounded-md"><?php echo $row['short_desc']; ?></div>
			  
            </div>
          </button>
			
	</div>
	<?php
				}
	?>
	
</div>	

	<br>
	
<footer id="footer" class="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <img src="assets_panatab/img/shanyraq.png" alt="">
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

<!-- <section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<div class="footer-logo"><h3 class="block-title">About</h3></div>
<div class="textwidget">
<p><?php echo $about_site; ?></p>
</div>
<ul class="mt-3 footer-social">
<li><a class="facebook" href="<?php echo $facebook_link; ?>"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="<?php echo $twitter_link; ?>"><i class="lni-twitter-filled"></i></a></li>
<li><a class="instaram" href="<?php echo $instagram_link; ?>"><i class="lni-instagram-filled"></i></a></li>
<li><a class="google-plus" href="<?php echo $googleplus_link; ?>"><i class="lni-google-plus"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Quick Link</h3>
<ul class="menu">
<li><a href="./">- Home</a></li>
<li><a href="listings">- Listings</a></li>
<li><a href="faqs">- FAQ's</a></li>
<li><a href="contact">- Contact</a></li>
<li><a href="About">- About</a></li>
<li><a href="https://www.instagram.com/beatsbybwire/">- Developer</a></li>
    <?php
	if ($logged == "1") {
print '<li><a href="'.$myrole.'">- My Account</a></li>
       <li><a href="logout">- Log Out</a></li>';

	}else{
print '<li><a href="login">- Login</a></li>
       <li><a href="register">- Register</a></li>';

	}

	?>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Contact Info</h3>
<ul class="contact-footer">
<li>
<strong><i class="lni-phone"></i></strong><span><?php echo $site_phone; ?></span>
</li>
<li>
<strong><i class="lni-envelope"></i></strong><span><?php echo $site_email; ?></span>
</li>
<li>
<strong><i class="lni-map-marker"></i></strong><span><?php echo $site_address; ?></span>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info text-center">
<p>Developed with <i class="lni-heart-filled"></i> by <a target="_blank" href="https://www.instagram.com/beatsbybwire/" rel="nofollow">Bwire Mashauri</a></p>
</div>
</div>
</div>
</div>
</div> -->

</footer>


<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
<script src="assets_panatab/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets_panatab/vendor/aos/aos.js"></script>
  <script src="assets_panatab/vendor/php-email-form/validate.js"></script>
  <script src="assets_panatab/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets_panatab/vendor/purecounter/purecounter.js"></script>
  <script src="assets_panatab/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets_panatab/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets_panatab/js/main.js"></script>
</body>


</html>