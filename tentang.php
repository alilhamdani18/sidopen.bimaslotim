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

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3 fw-bold text-warning fs-3" href="index.php">SIMBAH</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <div class="col-lg-5 ms-3 my-2">
      <h5 class="fw-semibold text-white title-nav d-lg-block d-none">Sistem Informasi Manajemen Buku Nikah</h5>
    </div>
    <div class="ms-auto">
      <p class="text-white m-2 desc-admin d-md-block d-none">Selamat Datang, <span class="text-warning fw-semibold">Admin</span></p>
    </div>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <<div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Utama</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Master Data</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseData" aria-expanded="false" aria-controls="collapseData">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-database"></i></div>
              Data
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseData" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="data-masuk.php">Data Masuk</a>
                <a class="nav-link" href="data-keluar.php">Data Keluar</a>
              </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLaporan" aria-expanded="false" aria-controls="collapseLaporan">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-file-export"></i></div>
              Laporan
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLaporan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="laporan-model-N.php">Laporan Model N</a>
                <a class="nav-link" href="laporan-model-NA.php">Laporan Model NA</a>
                <a class="nav-link" href="laporan-model-NB.php">Laporan Model NB</a>
                <a class="nav-link" href="laporan-model-R.php">Laporan Model R</a>
                <a class="nav-link" href="laporan-model-DN.php">Laporan Model DN</a>
              </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Extra</div>
            <a class="nav-link" href="admin.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
              Kelola Admin
            </a>
            <a class="nav-link" href="tentang.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-info"></i></div>
              Tentang
            </a>
            <a class="nav-link" href="logout.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
              Logout
            </a>
          </div>
        </div>
      </nav>
  </div>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4 pb-3">
        <h1 class="mt-4 fw-semibold">Tentang</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Tentang</li>
        </ol>
        <div class="container-fluid">
          <div class="row my-3">
            <div class="col-lg-12">
              <h3 class="fw-bold text-secondary">Tentang Kami</h3>
              <p class="fw fw-normal text-dark">
                SIMBAH (Sistem Informasi Manajemen Buku Nikah) merupakan aplikasi yang digunakan untuk mengatur atau memanage pendistribusian formulir nikah pada Kantor Kementerian Agama Kabupaten Lombok Timur. Aplikasi ini dibuat bertujuan untuk
                memaksimalkan proses pendataan dalam mendistribusikan buku nikah. Aplikasi ini dikelola langsung oleh staff Seksi Bimas Islam Kementerian Agama Kabupaten Lombok Timur.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <h3 class="fw-bold text-secondary my-3">Kontak Kami</h3>
              <div class="mb-3">
                <label for="email" class="form-label text-secondary fw-semibold fs-5">Email</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label text-secondary fw-semibold fs-5">Nama</label>
                <input type="text" class="form-control" id="nama" />
              </div>
              <div class="mb-3">
                <label for="noTelpon" class="form-label text-secondary fw-semibold fs-5">No. Telpon / HP</label>
                <input type="email" class="form-control" id="noTelpon" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label text-secondary fw-semibold fs-5">Pesan</label>
                <textarea class="form-control" id="pesan" rows="4"></textarea>
              </div>
              <div class="mb-3">
                <a href="" class="btn btn-success px-4 me-2">Kirim</a>
                <a href="" class="btn btn-secondary px-4">Reset</a>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6 px-5">
              <h3 class="fw-bold text-secondary my-3">Alamat Kami</h3>
              <div class="row">
                <div class="col-lg-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.419436815071!2d116.53223249999999!3d-8.651597899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4ebeb797cb69%3A0xeff29f37502cf3ca!2sKantor%20Kementerian%20Agama%20Kabupaten%20Lombok%20Timur!5e0!3m2!1sid!2sid!4v1706080121343!5m2!1sid!2sid" width="100%" height="300" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  <table class="mt-2">
                    <tr>
                      <td><i class="fa-solid fa-map-location-dot"></i></td>
                      <td class="px-3">Kantor Kementerian Agama Kabupaten Lombok Timur</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td class="px-3">JL. Profesor Mohamad Yamin, Khusus Kota Selong, Kec. Selong, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83611</td>
                    </tr>
                    <tr>
                      <td><i class="fa-solid fa-envelope-open-text"></i></td>
                      <td class="px-3">bimas.lotim@gmail.com</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="row bg-success">
                <div class="col-12"></div>
              </div>
              <div class="col-12"></div>
            </div>
          </div>
          <div class="row"></div>

        </div>
      </div>
    </main>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>