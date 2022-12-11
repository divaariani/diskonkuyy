<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DiskonKuyy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="stylesheet" href="css/leaflet.css">
  <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
    <style>
        #map {
            width: 100%;
            height: 500px;
        }
    </style>
  <link href="web/img/logo.png" rel="icon">
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
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
		<h1><a href="index.html">DiskonKuyy</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#specials">Promo Spesial Event</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
		<a href="login.php" class="book-a-table-btn scrollto">Masuk Akun</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(web/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Promo</span> Hunting</h2>
                <p class="animate__animated animate__fadeInUp">Membantu para promo hunter untuk mencari diskon dan promo setiap cafe maupun restoran. Menghadirkan fitur untuk mencari cafe maupun restoran yang dicari dengan memilih daerah yang diinginkan.</p>
                <div>
                  <a href="promo.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Lihat Promo</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(web/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Promo</span> Hunting</h2>
                <p class="animate__animated animate__fadeInUp">Membantu para promo hunter untuk mencari diskon dan promo setiap cafe maupun restoran. Menghadirkan fitur untuk mencari cafe maupun restoran yang dicari dengan memilih daerah yang diinginkan.</p>
                <div>
                  <a href="promo.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Lihat Promo</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(web/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Promo</span> Hunting</h2>
                <p class="animate__animated animate__fadeInUp">Membantu para promo hunter untuk mencari diskon dan promo setiap cafe maupun restoran. Menghadirkan fitur untuk mencari cafe maupun restoran yang dicari dengan memilih daerah yang diinginkan.</p>
                <div>
                  <a href="promo.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Lihat Promo</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("web/img/about.png");'>
            <a href="https://youtu.be/gllEt325suY" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Tentang DiskonKuyy</strong></h3>
              <p>DiskonKuyy menyediakan website untuk para promo hunter agar dapat mencari informasi promo tempat kuliner yang diinginkan. Tidak perlu repot lagi mengecek satu per satu tempat kuliner untuk mengecek promo yang tersedia. Cukup dengan membuka situs DiskonKuyy, semua promo dari banyaknya tempat kuliner terpercaya di Indonesia sudah siap tersedia. Tinggal pilih kuliner favoritmu.</p>
              <ul>
				<li><i class="bx bx-check-double"></i> Selalu up to date informasi promo diskon setiap tempat kuliner.</li>
                <li><i class="bx bx-check-double"></i> Filterisasi yang unik dan mudah dicari.</li>
                <li><i class="bx bx-check-double"></i> Data selalu valid.</li>
              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Promo <span>Spesial Event</span></h2>
          <p>Promo berlaku pada setiap Hari Libur Nasional.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Tahun Baru Masehi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Tahun Baru Imlek</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Bulan Ramadhan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Lebaran Idul Fitri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Hari Lahir Pancasila</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Lebaran Idul Adha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Hari Kemerdekaan NKRI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Natal</a>
              </li>
			</ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tahun Baru Masehi</h3>
                    <p>Promo tahun baru terbaik setiap tahun datang lagi! Raih semua kode promo dan voucher spesial tahun baru dari berbagai tempat kuliner di seluruh Indonesia. Kalian bisa belanja berbagai kuliner dengan diskon besar-besaran menyambut tahun baru.</p>
					<a href="promo.php" class="book-a-table-btn scrollto">Lihat Promo</a>
				  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="web/img/specials-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tahun Baru Imlek</h3>
                    <p>Aneka diskon dan promo Imlek tersedia secara online di daftar menu DiskonKuyy. Dapatkan berbagai kode promo dan voucher dari berbagai tempat kuliner kesayangan kalian. Nikmati voucher spesial Imlek sepuasnya.</p>
					<a href="promo.php" class="book-a-table-btn scrollto">Lihat Promo</a>
				  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="web/img/specials-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Bulan Ramadhan</h3>
                    <p>Berbagai tempat kuliner sudah menyiapkan banyak promo di bulan Ramadhan. Banyak sekali promo yang tersedia untuk kalian agar kalian bisa menikmati sajian Ramadhan yang lebih praktis dan hemat dompet.</p>
					<a href="promo.php" class="book-a-table-btn scrollto">Lihat Promo</a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="web/img/specials-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Lebaran Idul Fitri</h3>
                    <p>Biar Lebaran semakin meriah, jangan lupa cek promo Lebaran dari berbagai tempat kuliner, kalian bisa cek promo maupun diskon terbaik agar Perayaan Lebaran dan silaturahmi tetap maksimal. Pesan kuliner favorit kalian sambil silaturahmi bersama teman dan keluarga.</p>
					<a href="promo.php" class="book-a-table-btn scrollto">Lihat Promo</a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="web/img/specials-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Hari Lahir Pancasila</h3>
                    <p>Di Hari Lahir Pancasila kalian akan ditemani dengan promo makanan dan minuman yang murah meriah. Banyak promo, diskon, dan potongan harga yang menarik dari berbagai restoran dan gerai minuman. Semua promo ini bisa digunakan untuk jajan hemat.</p>
					<a href="promo.php" class="book-a-table-btn scrollto">Lihat Promo</a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="web/img/specials-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Lebaran Idul Adha</h3>
                    <p>Bagi yang hendak mempersiapkan hidangan Lezat pada hari raya Idul Adha. Ada Solusi nih bagi kalian yang mau belanja hemat sebagai tambahan kuliner untuk meramaikan perayaan Idul Adha. Terdapat beragam kuliner menarik yang menawarkan Promo Spesial Idul Adha.</p>
					<a href="promo.php" class="book-a-table-btn scrollto">Lihat Promo</a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="web/img/specials-6.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-7">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Hari Kemerdekaan NKRI</h3>
                    <p>Setiap tanggal 17 Agustus selalu diperingati sebagai Hari Kemerdekaan Indonesia. Dalam memeriahkan HUT NKRI, berbagai tempat kuliner memberikan ragam promo khusus untuk para pelanggan. Belanja semakin hemat dengan diskon yang ditawarkan untuk menyambut HUT NKRI!</p>
					<a href="promo.php" class="book-a-table-btn scrollto">Lihat Promo</a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="web/img/specials-7.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-8">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Natal</h3>
                    <p>Menjelang perayaan natal banyak tempat kuliner yang menawarkan diskon dan promo produk dalam rangka merayakan natal. Jangan lewatkan promo terbaru dan terkeren di hari Natal, mulai dari diskon, cashback, special offer dari berbagai tempat kuliner pilihan.</p>
					<a href="promo.php" class="book-a-table-btn scrollto">Lihat Promo</a>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="web/img/specials-8.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>			  
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Galeri foto dari <span>Tempat Kuliner</span></h2>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="web/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="web/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="web/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="web/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="web/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="web/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="web/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="web/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="web/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="web/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="web/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="web/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="web/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="web/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="web/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="web/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>
	    
      <!-- <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32654820.88251219!2d117.88879999999999!3d-2.4456499999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sen!2sid!4v1664171492442!5m2!1sen!2sid" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> -->
	    
    </section><!-- End Gallery Section -->
	
		</br>
		<!-- ======= Map ======= -->
		        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="data/ADMINISTRASIDESA_AR_25K_1.js"></script>
        <script src="data/xiboba_2.js"></script>
        <script src="data/trafficbun_3.js"></script>
        <script src="data/richeese_4.js"></script>
        <script src="data/phocajjang_5.js"></script>
        <script src="data/mcd_6.js"></script>
        <script src="data/kfc_7.js"></script>
        <script src="data/janjijiwa_8.js"></script>
        <script src="data/hokben_9.js"></script>
        <script src="data/chigo_10.js"></script>
        <script src="data/burgerking_11.js"></script>
        <script src="data/burgerbangor_12.js"></script>
        <script src="data/baskin_13.js"></script>
        <script src="data/bakmigm_14.js"></script>
        <script src="data/adanw_15.js"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-6.659139843913491,106.73531214849895],[-6.585228354517452,106.83403998039505]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_OSMStandard_0');
        map.getPane('pane_OSMStandard_0').style.zIndex = 400;
        var layer_OSMStandard_0 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OSMStandard_0',
            opacity: 1.0,
            attribution: '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OSMStandard_0;
        map.addLayer(layer_OSMStandard_0);
        function pop_ADMINISTRASIDESA_AR_25K_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker.link(feature.properties['KDPPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature.properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker.link(feature.properties['REMARK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker.link(feature.properties['KDPBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker.link(feature.properties['FCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker.link(feature.properties['LUASWH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(feature.properties['UUPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker.link(feature.properties['SRS_ID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LCODE'] !== null ? autolinker.link(feature.properties['LCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker.link(feature.properties['METADATA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker.link(feature.properties['KDEBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker.link(feature.properties['KDEPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker.link(feature.properties['KDCBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker.link(feature.properties['KDCPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker.link(feature.properties['KDBBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDBPUM'] !== null ? autolinker.link(feature.properties['KDBPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker.link(feature.properties['WADMKD'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker.link(feature.properties['WIADKD'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker.link(feature.properties['WADMKC'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker.link(feature.properties['WIADKC'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature.properties['WADMKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker.link(feature.properties['WIADKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties['WADMPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker.link(feature.properties['WIADPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker.link(feature.properties['TIPADM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? autolinker.link(feature.properties['SHAPE_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Area'] !== null ? autolinker.link(feature.properties['SHAPE_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_ADMINISTRASIDESA_AR_25K_1_0() {
            return {
                pane: 'pane_ADMINISTRASIDESA_AR_25K_1',
                opacity: 1,
                color: 'rgba(146,168,209,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(146,168,209,0.0)',
                interactive: true,
            }
        }
        map.createPane('pane_ADMINISTRASIDESA_AR_25K_1');
        map.getPane('pane_ADMINISTRASIDESA_AR_25K_1').style.zIndex = 401;
        map.getPane('pane_ADMINISTRASIDESA_AR_25K_1').style['mix-blend-mode'] = 'normal';
        var layer_ADMINISTRASIDESA_AR_25K_1 = new L.geoJson(json_ADMINISTRASIDESA_AR_25K_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_ADMINISTRASIDESA_AR_25K_1',
            layerName: 'layer_ADMINISTRASIDESA_AR_25K_1',
            pane: 'pane_ADMINISTRASIDESA_AR_25K_1',
            onEachFeature: pop_ADMINISTRASIDESA_AR_25K_1,
            style: style_ADMINISTRASIDESA_AR_25K_1_0,
        });
        bounds_group.addLayer(layer_ADMINISTRASIDESA_AR_25K_1);
        map.addLayer(layer_ADMINISTRASIDESA_AR_25K_1);
        function pop_xiboba_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_xiboba_2_0() {
            return {
                pane: 'pane_xiboba_2',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/xiboba.png.svg',
            iconSize: [76.0, 76.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_xiboba_2');
        map.getPane('pane_xiboba_2').style.zIndex = 402;
        map.getPane('pane_xiboba_2').style['mix-blend-mode'] = 'normal';
        var layer_xiboba_2 = new L.geoJson(json_xiboba_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_xiboba_2',
            layerName: 'layer_xiboba_2',
            pane: 'pane_xiboba_2',
            onEachFeature: pop_xiboba_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_xiboba_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_xiboba_2);
        map.addLayer(layer_xiboba_2);
        function pop_trafficbun_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_trafficbun_3_0() {
            return {
                pane: 'pane_trafficbun_3',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/traffic-bun.png.svg',
            iconSize: [38.0, 38.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_trafficbun_3');
        map.getPane('pane_trafficbun_3').style.zIndex = 403;
        map.getPane('pane_trafficbun_3').style['mix-blend-mode'] = 'normal';
        var layer_trafficbun_3 = new L.geoJson(json_trafficbun_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_trafficbun_3',
            layerName: 'layer_trafficbun_3',
            pane: 'pane_trafficbun_3',
            onEachFeature: pop_trafficbun_3,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_trafficbun_3_0(feature));
            },
        });
        bounds_group.addLayer(layer_trafficbun_3);
        map.addLayer(layer_trafficbun_3);
        function pop_richeese_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_richeese_4_0() {
            return {
                pane: 'pane_richeese_4',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/richeese-factory.png.svg',
            iconSize: [57.0, 57.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_richeese_4');
        map.getPane('pane_richeese_4').style.zIndex = 404;
        map.getPane('pane_richeese_4').style['mix-blend-mode'] = 'normal';
        var layer_richeese_4 = new L.geoJson(json_richeese_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_richeese_4',
            layerName: 'layer_richeese_4',
            pane: 'pane_richeese_4',
            onEachFeature: pop_richeese_4,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_richeese_4_0(feature));
            },
        });
        bounds_group.addLayer(layer_richeese_4);
        map.addLayer(layer_richeese_4);
        function pop_phocajjang_5(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_phocajjang_5_0() {
            return {
                pane: 'pane_phocajjang_5',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/pochajjang.png.svg',
            iconSize: [76.0, 76.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_phocajjang_5');
        map.getPane('pane_phocajjang_5').style.zIndex = 405;
        map.getPane('pane_phocajjang_5').style['mix-blend-mode'] = 'normal';
        var layer_phocajjang_5 = new L.geoJson(json_phocajjang_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_phocajjang_5',
            layerName: 'layer_phocajjang_5',
            pane: 'pane_phocajjang_5',
            onEachFeature: pop_phocajjang_5,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_phocajjang_5_0(feature));
            },
        });
        bounds_group.addLayer(layer_phocajjang_5);
        map.addLayer(layer_phocajjang_5);
        function pop_mcd_6(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_mcd_6_0() {
            return {
                pane: 'pane_mcd_6',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/McDonalds.png.svg',
            iconSize: [30.4, 30.4]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_mcd_6');
        map.getPane('pane_mcd_6').style.zIndex = 406;
        map.getPane('pane_mcd_6').style['mix-blend-mode'] = 'normal';
        var layer_mcd_6 = new L.geoJson(json_mcd_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_mcd_6',
            layerName: 'layer_mcd_6',
            pane: 'pane_mcd_6',
            onEachFeature: pop_mcd_6,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_mcd_6_0(feature));
            },
        });
        bounds_group.addLayer(layer_mcd_6);
        map.addLayer(layer_mcd_6);
        function pop_kfc_7(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_kfc_7_0() {
            return {
                pane: 'pane_kfc_7',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/kfc.png.svg',
            iconSize: [34.199999999999996, 34.199999999999996]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_kfc_7');
        map.getPane('pane_kfc_7').style.zIndex = 407;
        map.getPane('pane_kfc_7').style['mix-blend-mode'] = 'normal';
        var layer_kfc_7 = new L.geoJson(json_kfc_7, {
            attribution: '',
            interactive: true,
            dataVar: 'json_kfc_7',
            layerName: 'layer_kfc_7',
            pane: 'pane_kfc_7',
            onEachFeature: pop_kfc_7,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_kfc_7_0(feature));
            },
        });
        bounds_group.addLayer(layer_kfc_7);
        map.addLayer(layer_kfc_7);
        function pop_janjijiwa_8(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_janjijiwa_8_0() {
            return {
                pane: 'pane_janjijiwa_8',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/janjiw.png.svg',
            iconSize: [114.0, 114.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_janjijiwa_8');
        map.getPane('pane_janjijiwa_8').style.zIndex = 408;
        map.getPane('pane_janjijiwa_8').style['mix-blend-mode'] = 'normal';
        var layer_janjijiwa_8 = new L.geoJson(json_janjijiwa_8, {
            attribution: '',
            interactive: true,
            dataVar: 'json_janjijiwa_8',
            layerName: 'layer_janjijiwa_8',
            pane: 'pane_janjijiwa_8',
            onEachFeature: pop_janjijiwa_8,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_janjijiwa_8_0(feature));
            },
        });
        bounds_group.addLayer(layer_janjijiwa_8);
        map.addLayer(layer_janjijiwa_8);
        function pop_hokben_9(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_hokben_9_0() {
            return {
                pane: 'pane_hokben_9',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/hokben.png.svg',
            iconSize: [30.4, 30.4]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_hokben_9');
        map.getPane('pane_hokben_9').style.zIndex = 409;
        map.getPane('pane_hokben_9').style['mix-blend-mode'] = 'normal';
        var layer_hokben_9 = new L.geoJson(json_hokben_9, {
            attribution: '',
            interactive: true,
            dataVar: 'json_hokben_9',
            layerName: 'layer_hokben_9',
            pane: 'pane_hokben_9',
            onEachFeature: pop_hokben_9,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_hokben_9_0(feature));
            },
        });
        bounds_group.addLayer(layer_hokben_9);
        map.addLayer(layer_hokben_9);
        function pop_chigo_10(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_chigo_10_0() {
            return {
                pane: 'pane_chigo_10',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/chigo.png.svg',
            iconSize: [45.599999999999994, 45.599999999999994]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_chigo_10');
        map.getPane('pane_chigo_10').style.zIndex = 410;
        map.getPane('pane_chigo_10').style['mix-blend-mode'] = 'normal';
        var layer_chigo_10 = new L.geoJson(json_chigo_10, {
            attribution: '',
            interactive: true,
            dataVar: 'json_chigo_10',
            layerName: 'layer_chigo_10',
            pane: 'pane_chigo_10',
            onEachFeature: pop_chigo_10,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_chigo_10_0(feature));
            },
        });
        bounds_group.addLayer(layer_chigo_10);
        map.addLayer(layer_chigo_10);
        function pop_burgerking_11(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_burgerking_11_0() {
            return {
                pane: 'pane_burgerking_11',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/Burger_King.png.svg',
            iconSize: [30.4, 30.4]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_burgerking_11');
        map.getPane('pane_burgerking_11').style.zIndex = 411;
        map.getPane('pane_burgerking_11').style['mix-blend-mode'] = 'normal';
        var layer_burgerking_11 = new L.geoJson(json_burgerking_11, {
            attribution: '',
            interactive: true,
            dataVar: 'json_burgerking_11',
            layerName: 'layer_burgerking_11',
            pane: 'pane_burgerking_11',
            onEachFeature: pop_burgerking_11,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_burgerking_11_0(feature));
            },
        });
        bounds_group.addLayer(layer_burgerking_11);
        map.addLayer(layer_burgerking_11);
        function pop_burgerbangor_12(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_burgerbangor_12_0() {
            return {
                pane: 'pane_burgerbangor_12',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/bangor.png.svg',
            iconSize: [76.0, 76.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_burgerbangor_12');
        map.getPane('pane_burgerbangor_12').style.zIndex = 412;
        map.getPane('pane_burgerbangor_12').style['mix-blend-mode'] = 'normal';
        var layer_burgerbangor_12 = new L.geoJson(json_burgerbangor_12, {
            attribution: '',
            interactive: true,
            dataVar: 'json_burgerbangor_12',
            layerName: 'layer_burgerbangor_12',
            pane: 'pane_burgerbangor_12',
            onEachFeature: pop_burgerbangor_12,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_burgerbangor_12_0(feature));
            },
        });
        bounds_group.addLayer(layer_burgerbangor_12);
        map.addLayer(layer_burgerbangor_12);
        function pop_baskin_13(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_baskin_13_0() {
            return {
                pane: 'pane_baskin_13',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/Baskin-Robbins.png.svg',
            iconSize: [38.0, 38.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_baskin_13');
        map.getPane('pane_baskin_13').style.zIndex = 413;
        map.getPane('pane_baskin_13').style['mix-blend-mode'] = 'normal';
        var layer_baskin_13 = new L.geoJson(json_baskin_13, {
            attribution: '',
            interactive: true,
            dataVar: 'json_baskin_13',
            layerName: 'layer_baskin_13',
            pane: 'pane_baskin_13',
            onEachFeature: pop_baskin_13,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_baskin_13_0(feature));
            },
        });
        bounds_group.addLayer(layer_baskin_13);
        map.addLayer(layer_baskin_13);
        function pop_bakmigm_14(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_bakmigm_14_0() {
            return {
                pane: 'pane_bakmigm_14',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/bakmi-gm.png.svg',
            iconSize: [38.0, 38.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_bakmigm_14');
        map.getPane('pane_bakmigm_14').style.zIndex = 414;
        map.getPane('pane_bakmigm_14').style['mix-blend-mode'] = 'normal';
        var layer_bakmigm_14 = new L.geoJson(json_bakmigm_14, {
            attribution: '',
            interactive: true,
            dataVar: 'json_bakmigm_14',
            layerName: 'layer_bakmigm_14',
            pane: 'pane_bakmigm_14',
            onEachFeature: pop_bakmigm_14,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_bakmigm_14_0(feature));
            },
        });
        bounds_group.addLayer(layer_bakmigm_14);
        map.addLayer(layer_bakmigm_14);
        function pop_adanw_15(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_adanw_15_0() {
            return {
                pane: 'pane_adanw_15',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/a+dan+w.png.svg',
            iconSize: [38.0, 38.0]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_adanw_15');
        map.getPane('pane_adanw_15').style.zIndex = 415;
        map.getPane('pane_adanw_15').style['mix-blend-mode'] = 'normal';
        var layer_adanw_15 = new L.geoJson(json_adanw_15, {
            attribution: '',
            interactive: true,
            dataVar: 'json_adanw_15',
            layerName: 'layer_adanw_15',
            pane: 'pane_adanw_15',
            onEachFeature: pop_adanw_15,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_adanw_15_0(feature));
            },
        });
        bounds_group.addLayer(layer_adanw_15);
        map.addLayer(layer_adanw_15);
        setBounds();
        resetLabels([layer_chigo_10,layer_burgerking_11,layer_burgerbangor_12,layer_baskin_13,layer_bakmigm_14,layer_adanw_15]);
        map.on("zoomend", function(){
            resetLabels([layer_chigo_10,layer_burgerking_11,layer_burgerbangor_12,layer_baskin_13,layer_bakmigm_14,layer_adanw_15]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_chigo_10,layer_burgerking_11,layer_burgerbangor_12,layer_baskin_13,layer_bakmigm_14,layer_adanw_15]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_chigo_10,layer_burgerking_11,layer_burgerbangor_12,layer_baskin_13,layer_bakmigm_14,layer_adanw_15]);
        });
		</script>
	<!-- ======= End Map ======= -->
	
	</br>

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
