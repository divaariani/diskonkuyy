<?php

include 'config/app.php';

$data_promo = select("SELECT * FROM dkpromo ORDER BY promo ASC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DiskonKuyy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="web/img/logo.png" rel="icon">
  <link href="web/img/logo.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="web/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="web/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="web/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="web/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="web/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="web/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="web/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="atasmenu" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
		<h1><a href="index.html">DiskonKuyy</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Beranda</a></li>
          <li><a class="nav-link scrollto" href="index.php">Tentang</a></li>
          <li><a class="nav-link scrollto" href="index.php">Promo Spesial Event</a></li>
          <li><a class="nav-link scrollto" href="index.php">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
	  <a href="login.php" class="book-a-table-btn scrollto">Masuk Akun</a>
    </div>
  </header><!-- End Header -->
  
  <main id="main">
    <!-- ======= Menu Section ======= -->
	<img src="web/img/slide/header.jpg" width="100%" height="5%">
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
			<h2>Daftar <span>Promo</span></h2>
			
			<br>
			
			<form>
				<input class="search" type="text" placeholder="Cari..." required>
				<input class="button" type="button" value="Cari">		
			</form>	
        </div>
		
		    <div class="row menu-container">

						<?php $no = 1; ?>
						<?php foreach ($data_promo as $promo) : ?>

					<div class="col-lg-6 menu-item filter-">
						<div class="menu-content">
						  <a href="#"><?php echo $promo['promo']; ?></a><span> <s>Rp<?php echo $promo['harga_awal']; ?></s> Rp<?php echo $promo['harga_akhir']; ?> </span>
						</div>
						<div class="menu-ingredients">
							[<?php echo $promo['tempat']; ?>]
						</div>
						<div class="menu-ingredients">
							Batas Promo: <?php echo $promo['bataspromo']; ?>
						</div>
					</div>
					<?php endforeach; ?>
			
			</div>
			
      </div>
    </section><!-- End Menu Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>DiskonKuyy</h3>
      <p>Membantu para promo hunter untuk menemukan promo disetiap kuliner yang diinginkan.</p>

      <div class="copyright">
        &copy; Copyright <strong><span>2022</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Bosses Team
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="web/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="web/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="web/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="web/vendor/php-email-form/validate.js"></script>
  <script src="web/js/main.js"></script>

</body>

</html>