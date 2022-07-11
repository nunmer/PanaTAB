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


?>

<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Upload Items</title>

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
<a class="active" href="upload">
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
<h2 class="dashbord-title">Публикация</h2>
</div>
<div class="dashboard-wrapper">
	<input type="radio" name="content-toggle" id="video"> <label for="video" tabindex="1">Есть квартира</label>
	<br>
    <input type="radio" name="content-toggle" id="apps"> <label for="apps" tabindex="2">Нет квартиры</label>
<!-- Start of ad form -->
<style>
#estkvartira, #netkvartira{
	display: none;
}
#video:checked~#content div:nth-child(1),
#apps:checked~#content div:nth-child(2){
	display: block;
}
#video1:checked~#content #def,
#video:checked~#content #def,
#apps:checked~#content #def,
#music:checked~#content #def{
	display:none;
}
</style>
<div id="content">
	<div id="estkvartira">
		<form action="app/new-ad.php" method="POST" autocomplete="off">
		
		<div class="form-group mb-3">
			<label class="control-label">Ad Title</label>
			<input class="form-control input-md" name="title" placeholder="Enter Ad Title" required type="text">
		</div>
		<div class="form-group mb-3 tg-inputwithicon">
			<label class="control-label">Category</label>
			<div class="tg-select form-control">
				<select name="category" required>
				<option value="" selected disabled>Select Category</option>
				<?php
				try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				  
				  $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
				  $stmt->execute();
				  $result = $stmt->fetchAll();

					foreach($result as $row)
					{
					print '<option value="'.$row['category'].'">'.$row['category'].'</option>';
				  }
							
				  }catch(PDOException $e)
					{
					echo "Connection failed: " . $e->getMessage();
					}

					?>
				</select>
			</div>
		</div>

		<div class="form-group mb-3 tg-inputwithicon">
			<label class="control-label">City</label>
			<div class="tg-select form-control">
				<select name="city" required>
				<option value="" selected disabled>Select City</option>
				<?php
				try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				  
				  $stmt = $conn->prepare("SELECT * FROM tbl_cities ORDER BY city");
				  $stmt->execute();
				  $result = $stmt->fetchAll();

					foreach($result as $row)
					{
					print '<option value="'.$row['city'].'">'.$row['city'].'</option>';
				  }
							
				  }catch(PDOException $e)
					{
					echo "Connection failed: " . $e->getMessage();
					}

					?>
				</select>
			</div>
		</div>

		<div class="form-group mb-3 tg-inputwithicon">
			<label class="control-label">Condition</label>
			<div class="tg-select form-control">
				<select name="condition" required>
					<option value="" selected disabled>Select Condition</option>
					<option value="New">New</option>
					<option value="Used">Used</option>
				</select>
			</div>
		</div>


		<div class="form-group mb-3">
			<label class="control-label">Price (<?php echo $currency; ?>)</label>
			<input class="form-control input-md" name="price" required placeholder="Enter Price" type="number">
			<div class="tg-checkbox mt-3">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="fixed" id="tg-priceoncall">
					<label class="custom-control-label" for="tg-priceoncall">Fixed</label>
				</div>
			</div>
		</div>

		<div class="form-group mb-3">
			<label class="control-label">Brand (If any)</label>
			<input class="form-control input-md" name="brand" placeholder="Enter Brand" type="text">
		</div>

		<div class="form-group mb-3">
			<label class="control-label">Short Description (108 Characters)</label>
			<textarea maxlength="108" id="minle" class="form-control input-md" name="shortdesc" required></textarea>
		</div>


		<div class="form-group md-3">
			<label class="control-label">Description</label>
			<textarea id="summernote" name="description" required></textarea>
		</div>

		<button type="submit" class="btn btn-common fullwidth mt-4">Save</button>
		</form>
	</div>
	<!-- End of ad form -->
	<div id="netkvartira">
		<form action="app/new-profile.php" method="POST" autocomplete="off">
			<div class="form-group mb-3">
				<label class="control-label">Возраст</label>
				<input class="form-control input-md" name="age" required placeholder="Введите возраст" type="number">
			</div>
			<div class="form-group mb-3 tg-inputwithicon">
				<label class="control-label">Пол</label>
				<div class="tg-select form-control">
					<select name="gender" required>
						<option value="" selected disabled>Выбрать</option>
						<option value="Male">Муж</option>
						<option value="Female">Жен</option>
					</select>
				</div>
			</div>
			<div class="form-group mb-3">
				<label class="control-label">Instagram</label>
				<input class="form-control input-md" name="instagram" placeholder="Введите ник" required type="text">
			</div>
			<div class="form-group mb-3">
				<label class="control-label">Telegram</label>
				<input class="form-control input-md" name="telegram" placeholder="Введите ник" required type="text">
			</div>
			<div class="form-group mb-3 tg-inputwithicon">
				<label class="control-label">Бюджет (<?php echo $currency; ?>)</label>
				<input class="form-control input-md" name="budget" required placeholder="Enter Price" type="number">
			</div>

			<div class="form-group mb-3 tg-inputwithicon">
				<label class="control-label">Город</label>
				<div class="tg-select form-control">
					<select name="city" required>
						<option value="" selected disabled>Select City</option>
						<?php
						try {
							$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
							$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						  
						  $stmt = $conn->prepare("SELECT * FROM tbl_cities ORDER BY city");
						  $stmt->execute();
						  $result = $stmt->fetchAll();

							foreach($result as $row)
							{
							print '<option value="'.$row['city'].'">'.$row['city'].'</option>';
						  }
									
						  }catch(PDOException $e)
							{
							echo "Connection failed: " . $e->getMessage();
							}

							?>
					</select>
				</div>
			</div>
			<hr></hr>
			<h4 class="dashbord-title">Предпочтения</h4>
			<?php echo $myid; ?>
			<div class="form-group mb-3 tg-inputwithicon">
				<label class="control-label">Не курю/ Не пью</label>
				<div class="tg-select form-control">
					<select name="condition" required>
						<option value="" selected disabled>Выбрать</option>
						<option value="Yes">Да</option>
						<option value="No">Нет</option>
					</select>
				</div>
			</div>

			<div class="form-group mb-3">
				<label class="control-label">Описание</label>
				<textarea maxlength="108" id="minle" class="form-control input-md" name="shortdesc" placeholder="Расскажите о себе" required></textarea>
			</div>
			<button type="submit" class="btn btn-common fullwidth mt-4">Save</button>
		</form>
	</div>
</div>
<!-- End of Second form -->

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