<?php
require '../backend/function.php';
require '../backend/cek-login.php';
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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <link href="../assets/css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="shortcut icon" href="../img/kemenag.png" type="image/x-icon" />
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
            <a class="nav-link" href="../index.php">
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
                <a class="nav-link" href="../data-masuk.php">Data Masuk</a>
                <a class="nav-link" href="../data-keluar.php">Data Keluar</a>
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
            <a class="nav-link" href="../admin.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
              Kelola Admin
            </a>
            <a class="nav-link" href="../tentang.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-info"></i></div>
              Tentang
            </a>
            <a class="nav-link" href="../backend/logout.php">
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
          <h1 class="mt-4 fw-semibold ">Laporan Model RA</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
            <li class="breadcrumb-item active ">Laporan Model RA</li>
          </ol>
          <div class="card mb-3">
            <div class="card-body">
              Laporan dibawah ini adalah laporan untuk Model RA
            </div>
          </div>
          <div class="btn-group mb-4">
            <button type="button" class="btn btn-primary dropdown-toggle  me-3 " data-bs-toggle="dropdown" aria-expanded="false">
              Tambah Data
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../data-masuk.php">Data Masuk</a></li>
              <li><a class="dropdown-item" href="../data-keluar.php">Data Keluar</a></li>
            </ul>
            <form action="../export/export-excel-RA.php" method="post">
              <input type="submit" value="Export Ke Excel" name="export_excel" class="btn btn-success">
            </form>
          </div>

          <!-- Data Masuk -->
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h4 class="fw-semibold">Laporan Masuk Model RA</h4>
                <div class="row my-2 ">
                  <div>
                    <form action="" method="post" class="col d-flex">
                      <select name="tahun" id="tahun" class="me-3">
                        <option name="tahun" value="Tahun">Tahun</option>
                        <?php for ($tahun = '2021'; $tahun <= date('Y'); $tahun++) { ?>
                          <option value="<?= $tahun ?>"><?= $tahun ?></option>
                        <?php } ?>
                      </select>
                      <button type="submit" value="" name="filter" class="btn btn-info">Filter</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body table-responsive">
              <table id="" class="display" style="width:100%">
                <thead>
                  <tr class="text-center align-middle">
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Banyak Masuk</th>
                    <th>Model</th>
                    <th>Nomor Seri</th>
                    <th>Satuan</th>
                    <th>Nomor Bukti</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($_POST['filter'])) {
                    $tahun = $_POST['tahun'];
                    if ($tahun != 'Tahun') {
                      $ambilDataMasuk = mysqli_query($conn, "SELECT * FROM tbl_masuk WHERE model = 'RA' AND YEAR(tanggal) = '$tahun'");
                    } else {
                      $ambilDataMasuk = mysqli_query($conn, "SELECT * FROM tbl_masuk WHERE model = 'RA'");
                    }
                  } else {
                    $ambilDataMasuk = mysqli_query($conn, "SELECT * FROM tbl_masuk WHERE model = 'RA'");
                  }
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilDataMasuk)) {

                    $id_masuk = $data['id_masuk'];
                    $tanggal = $data['tanggal'];
                    $uraian = $data['uraian'];
                    $banyak_masuk = $data['banyak_masuk'];
                    $model = $data['model'];
                    $nomor_seri = $data['nomor_seri'];
                    $satuan = $data['satuan'];
                    $nomor_bukti = $data['nomor_bukti'];
                    $keterangan = $data['keterangan'];


                  ?>

                    <tr class="text-center align-middle">
                      <td><?= $No++ ?></td>
                      <td><?= $tanggal; ?></td>
                      <td><?= $uraian; ?></td>
                      <td><?= $banyak_masuk; ?></td>
                      <td><?= $model; ?></td>
                      <td><?= $nomor_seri; ?></td>
                      <td><?= $satuan; ?></td>
                      <td><?= $nomor_bukti; ?></td>
                      <td><?= $keterangan; ?></td>
                    </tr>


                  <?php
                  }

                  ?>

                </tbody>
              </table>
            </div>
          </div>


          <!-- Data Keluar -->
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h4 class="fw-semibold">Laporan Keluar Model RA</h4>
                <div class="row my-2 ">
                  <div>
                    <form action="" method="post" class="col d-flex">
                      <select name="tahun" id="tahun" class="me-3">
                        <option name="tahun" value="Tahun">Tahun</option>
                        <?php for ($tahun = '2021'; $tahun <= date('Y'); $tahun++) { ?>
                          <option value="<?= $tahun ?>"><?= $tahun ?></option>
                        <?php } ?>
                      </select>
                      <button type="submit" value="" name="filter" class="btn btn-info">Filter</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body table-responsive ">
              <table id="" class="display" style="width:100%">
                <thead>
                  <tr class="text-center align-middle">
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Banyak Masuk</th>
                    <th>Model</th>
                    <th>Nomor Seri</th>
                    <th>Satuan</th>
                    <th>Nomor Bukti</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($_POST['filter'])) {
                    $tahun = $_POST['tahun'];
                    if ($tahun != 'Tahun') {
                      $ambilDataKeluar = mysqli_query($conn, "SELECT * FROM tbl_keluar WHERE model = 'RA' AND YEAR(tanggal) = '$tahun'");
                    } else {
                      $ambilDataKeluar = mysqli_query($conn, "SELECT * FROM tbl_keluar WHERE model = 'RA'");
                    }
                  } else {
                    $ambilDataKeluar = mysqli_query($conn, "SELECT * FROM tbl_keluar WHERE model = 'RA'");
                  }
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilDataKeluar)) {

                    $id_keluar = $data['id_keluar'];
                    $tanggal = $data['tanggal'];
                    $uraian = $data['uraian'];
                    $banyak_keluar = $data['banyak_keluar'];
                    $model = $data['model'];
                    $nomor_seri = $data['nomor_seri'];
                    $satuan = $data['satuan'];
                    $nomor_bukti = $data['nomor_bukti'];
                    $keterangan = $data['keterangan'];


                  ?>

                    <tr class="text-center align-middle">
                      <td><?= $No++ ?></td>
                      <td><?= $tanggal; ?></td>
                      <td><?= $uraian; ?></td>
                      <td><?= $banyak_keluar; ?></td>
                      <td><?= $model; ?></td>
                      <td><?= $nomor_seri; ?></td>
                      <td><?= $satuan; ?></td>
                      <td><?= $nomor_bukti; ?></td>
                      <td><?= $keterangan; ?></td>
                    </tr>


                  <?php
                  }

                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="../assets/js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="../assets/js/datatables-simple-demo.js"></script>
  <script>
    $(document).ready(function() {
      $('table.display').DataTable();
    });
    $('.table.display').DataTable({
      responsive: true
    });


    // 
    // $(document).ready(function() {
    //   $('#table_id').DataTable({
    //     // script untuk membuat export data 
    //     dom: 'Bfrtip',
    //     buttons: [
    //       'copy', 'csv', 'excel', 'pdf', 'print'
    //     ]
    //   })
    // });
  </script>
</body>

</html>