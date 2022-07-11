<?php
require '../constants/config.php';
require '../constants/check-login.php';
require '../connection.php';

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
  <link href="https://assets.codepen.io/344846/style.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto" href="../listings">Dashboard</a></li>         
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<?php 
	$profile_id = $_GET['profile_id'];
	$query=mysqli_query($conn,"SELECT * FROM `tbl_profiles` LEFT JOIN `tbl_users` ON tbl_profiles.author=tbl_users.user_id WHERE profile_id = '$profile_id';");
	
	while($row=mysqli_fetch_array($query)){
?>

<div class="flex-grow overflow-hidden h-full flex flex-col">



    <div class="flex-grow flex overflow-x-hidden">
      

	


      <div class="flex-grow bg-white overflow-y-auto">
        <div class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full border-b border-gray-200 bg-white  sticky top-0">
          <div class="flex w-full items-center">
            <div class="flex items-center text-3xl text-gray-900 ">
              <img src="<?php 
			  
				if($row['avatar']==NULL){
					echo "../assets/img/blank_avatar.png";
				}else{
					echo "../uploads/avatar/", $row['avatar'];
				}
			  ?>" class="w-7 h-7 mr-2 rounded-full" alt="profile" />
              <?php echo $row['username']; ?>
            </div>
            <div class="ml-auto sm:flex hidden items-center justify-end">
              
              <button class="w-8 h-8 ml-4 text-gray-400 shadow rounded-full flex items-center justify-center border border-gray-200 ">
                <svg viewBox="0 0 24 24" class="w-4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="1"></circle>
                  <circle cx="19" cy="12" r="1"></circle>
                  <circle cx="5" cy="12" r="1"></circle>
                </svg>
              </button>
              
            </div>
          </div>
          <div class="flex items-center space-x-3 sm:mt-7 mt-4">
            <a href="#" class="px-3 border-b-2 border-blue-500 text-blue-500  pb-1.5"></a>
           
          </div>
        </div>
        <div class="sm:p-7 p-4">
         


            <!-- <button class="bg-white p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
            
        
            </button>
         -->
              <br>

		  <table class="w-full text-left">
            <thead>
              <tr class="text-gray-400">
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200">Описание</th>
              </tr>
            </thead>
            
            <tbody class="text-gray-600">
              <tr>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200">
                  <div class="flex items-center">
                    <?php echo $row['short_desc']; ?>                      
                  </div>
                </td>
                
              </tr>                          


            </tbody>
          </table>
		  <br><br>
          <table class="w-full text-left">
            <thead>
              <tr class="text-gray-400">
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200">Квартира</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 ">Город</th>
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 ">Бюджет</th>                
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 ">Дата публикации</th>
              </tr>
            </thead>
            
            <tbody class="text-gray-600">
              <tr>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200">
                  <div class="flex items-center">                    
                    Нет
                  </div>
                </td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200">
                  <div class="flex items-center">
                    <?php echo $row['city']; ?>                      
                  </div>
                </td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 text-norm-500"><?php echo $row['budget']; ?> ₸</td>
                <td class="sm:p-3 py-2 px-1 border-b border-gray-200">
                  <div class="flex items-center">
                    <div class="sm:flex hidden flex-col">
                      <?php echo $row['date']; ?>
                    </div>
                    
                  </div>
                </td>
              </tr>                          


            </tbody>
          </table>


          <br><br>

          
          <table class="w-full text-left">
            <thead>
              <tr class="text-gray-300">                
                <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200">Больше информации</th>            
              </tr>
            </thead>
                    
            <tbody class="text-gray-600">
              <tr>              


                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 text-center">
                  <div class="flex items-center">
                          

                    <table class="w-full text-left">
						<thead>
						  <tr class="text-gray-400">
							<th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200">Возраст</th>
							<th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 ">Пол</th>
							<th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 hidden md:table-cell">Алкоголь/Курение</th>
							<th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 ">Instagram</th>                
							<th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 ">Telegram</th>
							<th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 ">Email</th>
						  </tr>
						</thead>
						
						<tbody class="text-gray-600">
						  <tr>
							<td class="sm:p-3 py-2 px-1 border-b border-gray-200">
							  <div class="flex items-center">                    
								<?php echo $row['age']; ?>
							  </div>
							</td>
							<td class="sm:p-3 py-2 px-1 border-b border-gray-200">
							  <div class="flex items-center">
								<?php 
									if($row['gender'] = "Male"){
										echo "Муж";
									}else{
										echo "Жен";
									}
								?>                      
							  </div>
							</td>
							<td class="sm:p-3 py-2 px-1 border-b border-gray-200 md:table-cell hidden">
								<?php 
									if($row['conditions'] = "Yes"){
										echo "Да";
									}else{
										echo "Нет";
									}
								?>
							</td>
							<td class="sm:p-3 py-2 px-1 border-b border-gray-200 text-norm-500"><?php echo $row['instagram']; ?> </td>
							<td class="sm:p-3 py-2 px-1 border-b border-gray-200 text-norm-500"><?php echo $row['telegram']; ?> </td>
							<td class="sm:p-3 py-2 px-1 border-b border-gray-200 text-norm-500"><?php echo $row['email']; ?> </td>
							
						  </tr>                          


						</tbody>
					  </table>








                  </div>
                </td>                              
                                                      
              </tr>              
            </tbody>
           </table>


          <br><br>

            
  

        </div>
      </div>


    </div>



    
  </div>
	<?php 
	}
	?>

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