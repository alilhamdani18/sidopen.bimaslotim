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
  <link rel="stylesheet" href="assets/css/style.css" />
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
          <li><a class="dropdown-item" href="backend/logout.php">Logout</a></li>
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
                <a class="nav-link" href="report/laporan-model-N.php">Laporan Model N</a>
                <a class="nav-link" href="report/laporan-model-NA.php">Laporan Model NA</a>
                <a class="nav-link" href="report/laporan-model-NB.php">Laporan Model NB</a>
                <a class="nav-link" href="report/laporan-model-R.php">Laporan Model R</a>
                <a class="nav-link" href="report/laporan-model-DN.php">Laporan Model DN</a>
                <a class="nav-link" href="report/laporan-model-RA.php">Laporan Model RA</a>

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
            <a class="nav-link" href="backend/logout.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
              Logout
            </a>
          </div>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container px-4">
          <h1 class="mt-4 fw-semibold">Tambah Data Masuk</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Tambah Data Masuk</li>
          </ol>
          <div class="card mb-4">
            <div class="card-header">
              <button class="btn btn-primary my-2 " data-bs-toggle="modal" data-bs-target="#formTambahDataMasuk"><i class="fa-solid fa-file-circle-plus"></i> Tambah Data</button>
              <div class="btn-group mx-2">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Laporan Data
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="report/laporan-model-N.php">Laporan N</a></li>
                  <li><a class="dropdown-item" href="report/laporan-model-NA.php">Laporan NA</a></li>
                  <li><a class="dropdown-item" href="report/laporan-model-NB.php">Laporan NB</a></li>
                  <li><a class="dropdown-item" href="report/laporan-model-R.php">Laporan R</a></li>
                  <li><a class="dropdown-item" href="report/laporan-model-DN.php">Laporan DN</a></li>
                  <li><a class="dropdown-item" href="report/laporan-model-RA.php">Laporan RA</a></li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Banyak Masuk</th>
                    <th>Model</th>
                    <th>Nomor Seri</th>
                    <th>Satuan</th>
                    <th>Nomor Bukti</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ambilDataMasuk = mysqli_query($conn, "SELECT * FROM tbl_masuk");
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

                    <tr>
                      <!-- <td><?= $id_masuk; ?></td> -->
                      <td><?= $No++; ?></td>
                      <td><?= $tanggal; ?></td>
                      <td><?= $uraian; ?></td>
                      <td><?= $banyak_masuk; ?></td>
                      <td><?= $model; ?></td>
                      <td><?= $nomor_seri; ?></td>
                      <td><?= $satuan; ?></td>
                      <td><?= $nomor_bukti; ?></td>
                      <td><?= $keterangan; ?></td>
                      <td>
                        <button class="btn btn-success action" data-bs-toggle="modal" data-bs-target="#readData<?= $id_masuk; ?> "><i class="fa-solid fa-eye"></i></button>
                        <button class="btn btn-primary action my-1" data-bs-toggle="modal" data-bs-target="#editData<?= $id_masuk; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger action" data-bs-toggle="modal" data-bs-target="#hapusData<?= $id_masuk; ?>"><i class="fa-solid fa-trash-can"></i></button>
                      </td>
                    </tr>
                    <!-- readData -->
                    <div class="modal fade" id="readData<?= $id_masuk; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content p-3">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-semibold">Details Data Masuk</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" id="formRead">
                              <div class="inputfield">
                                <div>
                                  <label for="tanggal">Tanggal</label>
                                  <input type="date" name="tanggal" value="<?= $tanggal; ?>" disabled id="tanggal" />
                                </div>
                                <div>
                                  <label for="uraian">Uraian</label>
                                  <textarea name="uraian" disabled id="uraian" cols="30" rows="3"><?php echo $uraian; ?></textarea>
                                </div>
                                <div>
                                  <label for="jmlMasuk">Jumlah Masuk</label>
                                  <input type="number" name="jmlMasuk" value="<?= $banyak_masuk ?>" disabled id="jmlMasuk" />
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <label for="model">Model</label>
                                    <select class="half" name="model" disabled id="model">
                                      <option value="<?= $model; ?>"><?= $model; ?></option>
                                    </select>
                                  </div>
                                  <div class="col-lg-6">
                                    <label for="nomorSeri">Seri / Nomor</label>
                                    <input class="half" type="text" name="nomorSeri" value="<?= $nomor_seri ?>" disabled id="nomorSeri" />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div>
                                      <label for="satuan">Satuan</label>
                                      <input type="text" name="satuan" value="<?= $satuan; ?>" disabled id="satuan" />
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div>
                                      <label for="nomorBukti">Nomor Bukti</label>
                                      <input type="text" name="nomorBukti" value="<?= $nomor_bukti; ?>" disabled id="nomorBukti" />
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <label for="ket">Keterangan</label>
                                  <input type="text" name="ket" value="<?= $keterangan; ?>" disabled id="ket" />
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Edit Data  -->
                    <div class="modal fade" id="editData<?= $id_masuk; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content p-3">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-bold">Tambah Data Masuk</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <div class="inputfield">
                                <div>
                                  <label for="tanggal">Tanggal</label>
                                  <input type="date" name="tanggal" value="<?= $tanggal; ?>" id="tanggal" />
                                </div>
                                <div>
                                  <label for="uraian">Uraian</label>
                                  <textarea name="uraian" id="uraian" cols="30" rows="3"><?php echo $uraian; ?></textarea>
                                </div>
                                <div>
                                  <label for="jmlMasuk">Jumlah Masuk</label>
                                  <input type="number" name="banyak_masuk" value="<?= $banyak_masuk; ?>" id="jmlMasuk" />
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <label for="model">Model</label>
                                    <select class="half" name="model" id="model">
                                      <option value="<?= $model; ?>"><?= $model; ?></option>
                                      <option value="N">N</option>
                                      <option value="NA">NA</option>
                                      <option value="NB">NB</option>
                                      <option value="R">R</option>
                                      <option value="DN">DN</option>
                                      <option value="RA">RA</option>
                                    </select>
                                  </div>
                                  <div class="col-lg-6">
                                    <label for="nomorSeri">Seri / Nomor</label>
                                    <input type="text" name="nomorSeri" value="<?= $nomor_seri; ?>" id="nomorSeri" />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div>
                                      <label for="satuan">Satuan</label>
                                      <input type="text" name="satuan" value="<?= $satuan; ?>" id="satuan" />
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div>
                                      <label for="nomorBukti">Nomor Bukti</label>
                                      <input type="text" name="nomorBukti" value="<?= $nomor_bukti; ?>" id="nomorBukti" />
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <label for="ket">Keterangan</label>
                                  <input type="text" name="ket" value="<?= $keterangan; ?>" id="ket" />
                                </div>
                                <input type="hidden" name="id_masuk" value="<?= $id_masuk; ?>">
                              </div>
                              <div class="d-flex justify-content-center my-3">
                                <button type="submit" class="btn btn-primary submit" name="editMasuk">Edit Data</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- Hapus Data  -->
                    <div class="modal fade" id="hapusData<?= $id_masuk; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content p-3">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-bold">Hapus Data Masuk</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <h6>Apakah anda yakin ingin menghapus data <?= $model ?> ini ?</h6>
                              <input type="hidden" name="id_stok" value="">
                              <input type="hidden" name="banyak_masuk" value="<?= $banyak_masuk; ?>">
                              <input type="hidden" name="model" value="<?= $model; ?>">
                              <input type="hidden" name="id_masuk" value="<?= $id_masuk; ?>">
                              <div class="d-flex justify-content-center my-3">
                                <button type="submit" class="btn btn-danger submit" name="hapusDataMasuk">Hapus</button>
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
        </div>
    </div>
    </main>
    <!-- Modal Form -->
    <div class="modal fade" id="formTambahDataMasuk">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content p-3">
          <div class="modal-header py-2">
            <h4 class="modal-title fw-bold">Tambah Data Masuk</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="POST" id="formMasuk">
              <div class="inputfield">
                <input type="hidden" name="id_masuk" value="<?= $id_masuk; ?>">
                <div>
                  <label for="tanggal">Tanggal</label>
                  <input type="date" name="tanggal" id="tanggal" />
                </div>
                <div>
                  <label for="uraian">Uraian</label>
                  <textarea name="uraian" id="uraian" cols="30" rows="3"></textarea>
                </div>
                <div>
                  <label for="jmlMasuk">Jumlah Masuk</label>
                  <input type="number" name="jmlMasuk" id="jmlMasuk" />
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <label for="model">Model</label>
                    <select class="half" name="model" id="model">
                      <option value="">--Pilih Model--</option>
                      <?php
                      $ambilDataStok = mysqli_query($conn, "SELECT * FROM tbl_stok");
                      while ($fetchArray = mysqli_fetch_array($ambilDataStok)) {
                        $model = $fetchArray['model'];

                      ?>

                        <option value="<?= $model ?>"><?= $model ?></option>

                      <?php
                      }

                      ?>
                    </select>
                  </div>
                  <div class="col-lg-6">
                    <label for="nomorSeri">Seri / Nomor</label>
                    <input class="half" type="text" name="nomorSeri" id="nomorSeri" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div>
                      <label for="satuan">Satuan</label>
                      <input type="text" name="satuan" id="satuan" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div>
                      <label for="nomorBukti">Nomor Bukti</label>
                      <input type="text" name="nomorBukti" id="nomorBukti" />
                    </div>
                  </div>
                </div>
                <div>
                  <label for="ket">Keterangan</label>
                  <input type="text" name="ket" id="ket" />
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" form="formMasuk" class="btn btn-primary submit" name="addDataMasuk" value="addDataMasuk">Tambah Data</button>
          </div>
        </div>
      </div>
    </div>


  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="/assets/js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>