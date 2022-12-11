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
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
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
          <h2>Silahkan  <span>Register</span></h2>
          <p>Buat akun baru Anda.</p>
        </div>
						<form action="" method="POST" class="login-email">
							<div class="mt-3 input-group">
								<input class="form-control form-control-lg" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
							</div>
							<div class="mt-3 input-group">
								<input class="form-control form-control-lg" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
							</div>
							<div class="mt-3 input-group">
								<input class="form-control form-control-lg" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
							</div>
							<div class="mt-3 input-group">
								<input class="form-control form-control-lg" type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
							</div>
							
								<div class="text-center"><a class="logo me-auto">⠀⠀⠀⠀⠀⠀</a></div>
								
							<div class="text-center">
								<button name="submit" class="signin">Register</button>
							</div>
							<p class="text-center">Sudah memiliki akun? <a href="login.php">Masuk Akun</a></p>
						</form>
      </div>
    </section><!-- Form -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="web/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="web/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="web/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="web/vendor/php-email-form/validate.js"></script>
  <script src="web/js/main.js"></script>

</body>

</html>