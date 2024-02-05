<?php
require 'backend/function.php';


// cek login, terdaftar atau tidak
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Cocokkan dengan database
  $cekdatabase = mysqli_query($conn, "SELECT * FROM tbl_login WHERE username = '$username'and password = '$password'");

  // hitung jumlah data
  $hitung = mysqli_num_rows($cekdatabase);

  if ($hitung > 0) {
    $_SESSION['log'] = 'True';
    header('location:index.php');
  } else {
    header('location:login.php');
  }
}
if (!isset($_SESSION['log'])) {
} else {
  header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Sistem Informasi Manajemen Buku Nikah</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="assets/css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="img/kemenag.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container mt-5 mx-auto">
    <div class="row justify-content-center">
      <div class="col-md-10 login-page col-lg-6 col-sm-12 col-12 right bg-white">
        <div class="container p-3 pb-4 col-md-12 mx-auto">
          <div class="row justify-content-center mt-2 text-center">
            <div class="col-8">
              <img src="img/kemenag.png" width="100" alt="" />
              <div class="fw-bold fs-2 text-success mt-3">Masuk ke <span class="text-warning">SIMBAH</span></div>
              <div class="fw-semibold text-success">Sistem Informasi Manajemen Buku Nikah</div>
            </div>
          </div>
          <form class="row justify-content-center" method="post">
            <div class="col-12 col-md-12 col-lg-12 p-2">
              <div class="mb-3 form-group ">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" />
              </div>
              <div class="mb-3 form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" />
              </div>
              <!-- <div class="mb-3 form-group">
                <a href="register.html" class="text-decoration-none text-primary p-2">Lupa Password ?</a>
              </div> -->
              <!-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="check" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
              </div>   -->
            </div>
            <div class="row d-flex flex-column align-items-center justify-content-center">
              <button class="btn btn-primary col-12 col-md-12 col-lg-12 fw-semibold fs-5" name="login">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>