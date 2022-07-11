<?php
require 'constants/config.php';
require 'constants/check-login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Главное меню</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

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

  <!-- Template Main CSS File -->
  <link href="assets_panatab/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index" class="logo d-flex align-items-center">
        <img src="assets_panatab/img/shanyraq.png" alt="" width = "40" height = "50">
        <span>PanaTAB</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index">Домой</a></li>
          <li><a class="nav-link scrollto" href="#about">О нас</a></li>
          <li><a class="nav-link scrollto"<a href="listings">Объявление</a></li>
          <li><a class="nav-link scrollto" href="#faq">Частые вопросы</a></li>
            <li><a class="nav-link scrollto" href="#faq">Риэлторы</a></li>
            <li><a class="nav-link scrollto" href="#contact">Контакты</a></li>
          <li>
          <?php
	        if ($logged == "1") {
				if($_SESSION['role'] == "user"){
					$checkuser="user/index";
				}else{
					$checkuser="admin";
				}
				
		        ?>
            <a class="nav-link scrollto" href="<?php echo $checkuser; ?>">Мой аккаунт</a>
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




  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Не просто ищите отличную квартиру, ищите отличных соседей по комнате</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Готовы приступить к работе?</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="listings.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Начать искать соседа</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets_panatab/img/kiiz_ui.png" class="img-fluid" alt="" >
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Кто Мы Такие?</h3>
              <p>
                  Сообщество PanaTAB создано, чтобы помочь каждому быстро и безопасно найти идеального соседа или соседку для совместной аренды жилья в любой точке Казахстана. Наша цель — обеспечить максимально комфортные условия для знакомства пользователей, сэкономив ваше время и обезопасив от мошенничества и пустых переписок с людьми, которые вам точно не подойдут. Поэтому мы просим каждого пользователя следовать правилам сервиса и помогать делать систему лучше через формы обратной связи.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Подробнее</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Who we are -->
          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets_panatab/img/about1.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Как работает PanaTAB?</h2>
          <p>Арендуйте комнаты и найдите соседей по комнате в нашем проверенном сообществе</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="assets_panatab/img/values1.png" class="img-fluid" alt="">
              <h3>Разместите свою комнату</h3>
              <p>Перечислите свободную комнату бесплатно и расскажите нам о своем идеальном соседе по комнате в несколько простых шагов.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="assets_panatab/img/values2.png" class="img-fluid" alt="">
              <h3>Получите подтверждение</h3>
              <p>Найдите соседа по комнате быстрее, добавив свои социальные сети и проверив биографию.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="assets_panatab/img/values3.png" class="img-fluid" alt="">
              <h3>Просмотрите и выберите кандидата</h3>
              <p>Одобрите или отклоните запросы на бронирование. Пришло время открыть цимус и отпраздновать поиск нового корши для переезда.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>ПОЧЕМУ PANATAB?</h2>
          <p>Добро пожаловать в будущее совместного проживания!</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="assets_panatab/img/qqdostar.png" class="img-fluid" alt="" width = "410">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Твое Место, Твои Правила</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Безопасно Сдавать В Субаренду</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Арендовать Проще</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Онлайн-Бронирование</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Широкий выбор</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Быстро и безопасно</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Частые вопросы</p>
        </header>

        <div class="row" id="#faq">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      Как работает сервис PanaTAB?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                      PanaTAB подбирает идеальных соседей на основе информации, которую вы указали при регистрации. При подборе подходящих вам анкет учитываются результаты теста на совместимость, желаемый пол соседа, место аренды, привычки и месячный бюджет. Степень вашей совместимости с потенциальными соседями рассчитывается автоматически и видна в левом верхнем углу каждой анкеты.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                      Кто видит мою анкету?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                      По умолчанию вашу анкету видят все пользователи, которые ищут соседа в том же городе, что и вы. Но если при регистрации вы отметили, что хотите снимать квартиру только с пользователями определенного пола — ваша анкета будет видна только им. Также в настройках профиля вы можете сделать свою анкету видимой только тем, кто полностью отвечает вашим пожеланиям: например, не курит и отрицательно относится к алкоголю, или вовсе сделать ее «невидимой»: в таком случае вашу анкету увидят только те пользователи, которым вы поставили лайк.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                      Кто может мне написать?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                      По умолчанию написать вам могут только те пользователи, которым вы поставили лайк. Если вы хотите получать больше сообщений — вы можете сделать чат с вами общедоступным в настройках профиля в разделе «Конфиденциальность».
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                      Почему нужно указывать столько данных?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                      PanaTAB создан, чтобы в кратчайшие сроки познакомить вас с людьми, похожими на вас по образу жизни и интересам. Чтобы вы смогли избежать нежелательных знакомств и переписок, мы призываем вас быть честными и открытыми, и заполнять вашу анкету максимально подробно. Это позволяет всем пользователям сайта принимать решение о знакомстве в офлайне и совместном проживании уже на этапе просмотра анкеты и не тратить лишнее время на общение с теми, кто точно не подойдет.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                      Как удалить мою анкету с сервиса?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                      Вы можете сделать это в разделе «Конфиденциальность», убрав свою анкету из результатов поиска. После этого ваш профиль будет удален с сервиса в течение 3 дней.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                      У меня остались вопросы!
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                      Мы всегда на связи на almas_nur02@mail.ru
                      Желаем вам удачного поиска!
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->


<!--    <section id="team" class="team">-->
<!--        -->
<!--      <div class="container" data-aos="fade-up">-->
<!---->
<!--        <header class="section-header">-->
<!--          <h2>Team</h2>-->
<!--          <p>Our hard working team</p>-->
<!--        </header>-->
<!---->
<!--        <div class="row gy-4">-->
<!--        -->
<!---->
<!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">-->
<!--            <div class="member">-->
<!--              <div class="member-img">-->
<!--                <img src="assets_panatab/img/team/almas.jpg" class="img-fluid" alt="">-->
<!--                <div class="social">-->
<!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
<!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
<!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
<!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="member-info">-->
<!--                <h4>Almas Nurakhmetov</h4>-->
<!--                <span>Computer Science</span>-->
<!--                <p>Alumni of Kazakh-Turkish Lyceum. Pavlodarski</p>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!---->
<!---->
<!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">-->
<!--            <div class="member">-->
<!--              <div class="member-img">-->
<!--                <img src="assets_panatab/img/team/talgat.jpg" class="img-fluid" alt="">-->
<!--                <div class="social">-->
<!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
<!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
<!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
<!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="member-info">-->
<!--                <h4>Talgat Sovetbekov</h4>-->
<!--                <span>Computer Science</span>-->
<!--                <p>Alumni of Kazakh-Turkish Lyceum. Predecessor of Bill Gates</p>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!---->
<!---->
<!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">-->
<!--            <div class="member">-->
<!--              <div class="member-img">-->
<!--                <img src="assets_panatab/img/team/bagdat.jpg" class="img-fluid" alt="">-->
<!--                <div class="social">-->
<!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
<!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
<!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
<!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="member-info">-->
<!--                <h4>Bagdat Kuangali</h4>-->
<!--                <span>Big Data</span>-->
<!--                <p> the Guru of Java<br>Zver' Mashina Atyrau Sila</p>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!---->
<!--          -->
<!---->
<!--          -->
<!---->
<!--        </div>-->
<!---->
<!--      </div>-->
<!---->
<!--    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Контакты</h2>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Адрес</h3>
                  <p>Кабанбаы батыр 60А / 6,<br>Нур-Султан, Казахстан</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Позвоните Нам</h3>
                  <p>+7 777 077 7117<br>+7 776 661 1661</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Напишите нам по электронной почте</h3>
                  <p>almas_nur02@mail.ru</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Часы работы</h3>
                  <p>Понедельник - Пятница<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Ваше ФИО" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Ваша почта" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Вид услуги" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Сообщение" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Загрузка</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Ваше сообщение было отправлено. Спасибо!</div>

                  <button type="submit">Отправить сообщение</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>  

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <img src="assets_panatab/img/shanyraq.png" alt="">
              <span>PanaTAB</span>
            </a>
            <p>PanaTAB поможет вам разделить комнату или весь дом — на ваших условиях. Добро пожаловать в будущее совместного проживания!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Полезные ссылки</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Домой</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">О нас</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Услуги</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Условия обслуживания</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Политика конфиденциальности</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Наш сервис</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Зарегистрироваться</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Войти</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Объявления</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Связаться с нами</h4>
            <p>
              EXPO Block C1 <br>
              Nur-Sultan, Kazakhstan<br>
              Astana IT University <br><br>
              <strong>Телефон:</strong> +7 777 771 1717<br>
              <strong>Почта:</strong> info@astanait.edu.kz<br>
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
        Designed by <a href="">PanaTAB team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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
