<?php
require 'backend/function.php';
require 'backend/cek-login.php';
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
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="shortcut icon" href="img/kemenag.png" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    <!-- <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div>
    </div> -->
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
    <div id="layoutSidenav_nav">
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
                <a class="nav-link" href="laporan-model-RA.php">Laporan Model RA</a>
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
        <div class="container-fluid px-4">
          <h1 class="mt-4 fw-semibold">Dashboard</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
          <div class="row">
            <div class="col-xl-4 col-md-6">
              <div class="card bg-dark bg-gradient text-center  text-light mb-3 shadow-lg pb-3 ">
                <div class="card-body fw-bold pt-1 text-center text-light  fs-4">Sisa Stok N</div>
                <a href="" class="text-light"><i class="fa-solid fa-book-open fa-3x"></i></a>
                <div class="fw-semibold fs-3 mt-2 ">
                  <?php
                  $ambilDataStokSekarang = mysqli_query($conn, "SELECT banyak_stok FROM tbl_stok WHERE model = 'N'");
                  $data = mysqli_fetch_array($ambilDataStokSekarang);
                  $jmlStok = $data['banyak_stok'];


                  ?>
                  <div><?= $jmlStok; ?></div>
                  <?php

                  ?>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6">
              <div class="card bg-danger bg-gradient  text-center  text-light mb-3 shadow-lg pb-3 ">
                <div class="card-body fw-bold  pt-1 text-center text-light  fs-4">Sisa Stok NA</div>
                <a href="" class="text-light"><i class="fa-solid fa-book-open fa-3x"></i></a>
                <div class="fw-semibold fs-3 mt-2 ">
                  <?php
                  $ambilDataStokSekarang = mysqli_query($conn, "SELECT banyak_stok FROM tbl_stok WHERE model = 'NA'");
                  $data = mysqli_fetch_array($ambilDataStokSekarang);
                  $jmlStok = $data['banyak_stok'];


                  ?>
                  <div><?= $jmlStok; ?></div>
                  <?php

                  ?>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card bg-success bg-gradient  text-center  text-light mb-3 shadow-lg pb-3 ">
                <div class="card-body fw-bold pt-1 text-center text-light fs-4">Sisa Stok NB</div>
                <a href="" class="text-light"><i class="fa-solid fa-book-open fa-3x"></i></a>
                <div class="fw-semibold fs-3 mt-2 ">
                  <?php
                  $ambilDataStokSekarang = mysqli_query($conn, "SELECT banyak_stok FROM tbl_stok WHERE model = 'NB'");
                  $data = mysqli_fetch_array($ambilDataStokSekarang);
                  $jmlStok = $data['banyak_stok'];


                  ?>
                  <div><?= $jmlStok; ?></div>
                  <?php

                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-xl-4 col-md-6">
              <div class="card bg-info bg-gradient  text-center  text-dark mb-3 shadow-lg pb-3 ">
                <div class="card-body fw-bold  pt-1 text-center text-dark  fs-4">Sisa Stok R</div>
                <a href="" class="text-dark"><i class="fa-solid fa-book-open fa-3x"></i></a>
                <div class="fw-semibold fs-3 mt-2 ">
                  <?php
                  $ambilDataStokSekarang = mysqli_query($conn, "SELECT banyak_stok FROM tbl_stok WHERE model = 'R'");
                  $data = mysqli_fetch_array($ambilDataStokSekarang);
                  $jmlStok = $data['banyak_stok'];


                  ?>
                  <div><?= $jmlStok; ?></div>
                  <?php

                  ?>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card bg-primary bg-gradient text-center  text-light mb-3 shadow-lg pb-3 ">
                <div class="card-body fw-bold pt-1 text-center text-light  fs-4">Sisa Stok DN</div>
                <a href="" class="text-light"><i class="fa-solid fa-book-open fa-3x"></i></a>
                <div class="fw-semibold fs-3 mt-2 ">
                  <?php
                  $ambilDataStokSekarang = mysqli_query($conn, "SELECT banyak_stok FROM tbl_stok WHERE model = 'DN'");
                  $data = mysqli_fetch_array($ambilDataStokSekarang);
                  $jmlStok = $data['banyak_stok'];


                  ?>
                  <div><?= $jmlStok; ?></div>
                  <?php

                  ?>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card bg-warning bg-gradient  text-center  text-dark mb-3 shadow-lg pb-3 ">
                <div class="card-body fw-bold pt-1 text-center text-dark fs-4">Sisa Stok RA</div>
                <a href="" class="text-dark"><i class="fa-solid fa-book-open fa-3x"></i></a>
                <div class="fw-semibold fs-3 mt-2 ">
                  <?php
                  $ambilDataStokSekarang = mysqli_query($conn, "SELECT banyak_stok FROM tbl_stok WHERE model = 'RA'");
                  $data = mysqli_fetch_array($ambilDataStokSekarang);
                  $jmlStok = $data['banyak_stok'];


                  ?>
                  <div><?= $jmlStok; ?></div>
                  <?php

                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <!-- <div class="card-header">
              <button class="btn btn-primary my-2 " data-bs-toggle="modal" data-bs-target="#formDataStok"><i class="fa-solid fa-file-circle-plus"></i> Tambah Data</button>
            </div> -->
            <div class="card-body">
              <table id="datatablesSimple">
                <thead class="text-center">
                  <tr>
                    <th>No.</th>
                    <th>Model</th>
                    <th>Sisa Stok</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ambilDataStok = mysqli_query($conn, "SELECT * FROM tbl_stok");
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilDataStok)) {
                    // $i = 1;

                    $tanggal = $data['tanggal'];
                    $model = $data['model'];
                    $jmlData = $data['banyak_stok'];
                    $id_stok = $data['id_stok'];

                  ?>

                    <tr>
                      <td><?= $No++; ?></td>
                      <td><?= $model; ?></td>
                      <td><?= $jmlData; ?></td>
                      <td>
                        <button class="btn btn-primary action" data-bs-toggle="modal" data-bs-target="#refresh<?= $id_stok; ?>"><i class="fa-solid fa-arrows-rotate"></i></button>
                      </td>
                    </tr>
                    <div class="modal fade" id="refresh<?= $id_stok; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content p-2">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-bold">Refresh Data</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <h6>Refresh Data untuk model <?= $model; ?> ini</h6>
                              <input type="hidden" name="id_stok" value="<?= $id_stok; ?>">
                              <input type="hidden" name="model" value="<?= $model; ?>">
                              <input type="hidden" name="banyak_masuk" value="<?= $banyak_masuk; ?>">
                              <input type="hidden" name="banyak_keluar" value="<?= $banyak_keluar; ?>">
                              <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary submit" name="refresh">Refresh Data</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                  }

                  ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="modal fade" id="formDataStok">
            <div class="modal-dialog modal-dialog-centered modal-lg bg-secondary">
              <div class="modal-content p-3">
                <div class="modal-header py-2">
                  <h4 class="modal-title fw-bold">Tambah Data Masuk</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="" method="post">
                    <div class="inputfield">
                      <div class="row">
                        <div class="col-lg-6">
                          <label for="model">Model</label>
                          <select class="half" name="model" id="model">
                            <option value="">--pilih model--</option>
                            <option value="N">N</option>
                            <option value="NA">NA</option>
                            <option value="NB">NB</option>
                            <option value="R">R</option>
                            <option value="DN">DN</option>
                            <option value="RA">RA</option>
                          </select>
                        </div>
                        <div class="col-lg-6">
                          <label for="jmlStok">Jumlah Stok</label>
                          <input type="number" name="jmlStok" id="jmlStok" />
                        </div>
                      </div>
                  </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary submit" name="addStok" value="addStok">Tambah Data</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

    </div>
  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
  <script src="assets/js/scripts.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>