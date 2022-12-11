<?php

include 'config/app.php';

$data_promo = select("SELECT * FROM dkpromo ORDER BY tempat ASC");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DiskonKuyy</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src=" https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script src=" https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="form.php"><img src="assets/images/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search...">
              </div>
            </form>
          </div>
		  
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Admin</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Log Out </a>
              </div>
            </li>
			
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Admin</span>
                  <span class="text-secondary text-small">DiskonKuyy</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
 
            <li class="nav-item">
              <a class="nav-link" href="form.php">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
			
            <li class="nav-item">
              <a class="nav-link" href="chart.php">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
			
            <li class="nav-item">
              <a class="nav-link" href="table.php">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-table-large menu-icon"></i>
                </span> Tables
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
			
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="container mt-5">
                    <div class="wrapper">
					<div class="container mt-8">
						<h2>Data Promo</h2>            
           
						<a href= "form.php" class="btn btn-block btn-lg btn-gradient-primary mt-4">Tambah</a>
						<!-- upload xls -->
						<div>
							<form action="aksi.php" method="POST" enctype="multipart/form-data">
									<input class="form-control-sm" type="file" name="filexls" id="formFile" class="row g-2">
									<input type="submit" name="submit" class="btn btn-block btn-lg btn-gradient-primary mt-4" value="Import file" />
							</form>
						</div>
							<!-- end upload xls -->

						<table class="table table-bordered table-striped mt-3">
							<table class="table table-bordered table-striped mt-3">
								<thead>
									<tr class="text-center">
										<th>No</th>
										<th>Tempat Promo</th>
										<th>Nama Promo</th>
										<th>Batas Promo</th>
										<th>Harga Awal</th>
										<th>Harga Akhir</th>
										<th>Aksi</th>
									</tr>
								</thead>

								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($data_promo as $promo) : ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $promo['tempat']; ?></td>
										<td><?php echo $promo['promo']; ?></td>
										<td><?php echo $promo['bataspromo']; ?></td>
										<td><?php echo $promo['harga_awal']; ?></td>
										<td><?php echo $promo['harga_akhir']; ?></td>
										<td width="15%" class="text-center">
											<a href="ubah.php?id=<?= $promo['id']?>" class="badge badge-gradient-success">Ubah</a>
											<a href="hapus.php?id=<?= $promo['id']?>" class="badge badge-gradient-danger" onclick="return confirm('Yakin Data Promo Akan Dihapus?');">Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							
						<a href= "pdf_v.php" class="btn btn-block btn-lg btn-gradient-primary mt-4">Cetak PDF</a>
						<a class="btn btn-block btn-lg btn-gradient-primary mt-4" href="export.php">Export File</a>
							
						</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			
          </div>
 
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © DiskonKuyy 2022</span>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/file-upload.js"></script>
  </body>
</html>