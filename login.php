<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "diskonkuyy";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>

<?php 
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: ");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        echo "<script>window.location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
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
  <footer id="footer">
    <div class="container">
		<h5>[khusus untuk admin tempat kuliner yang menawarkan promo]</h5>
    </div>
  </footer><!-- End Header -->
  
  <!-- ======= Form ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Silahkan  <span>Log In</span></h2>
          <p>Masukkan email dan password akun Anda!</p>
        </div>
						<form action="" method="POST" class="login-email">
							<div class="mt-3 input-group">
								<input class="form-control form-control-lg" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
							</div>
							<div class="mt-3 input-group">
								<input class="form-control form-control-lg" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
							</div>
							
								<div class="text-center"><a class="logo me-auto">⠀⠀⠀⠀⠀⠀</a></div>

							<div class="text-center">
								<button name="submit" class="signin">Log In</button>
							</div>
							<p class="text-center">Belum memiliki akun? <a href="register.php">Register</a></p>
						</form>
      </div>
    </section><!-- End Form -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="web/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="web/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="web/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="web/vendor/php-email-form/validate.js"></script>
  <script src="web/js/main.js"></script>

</body>

</html>