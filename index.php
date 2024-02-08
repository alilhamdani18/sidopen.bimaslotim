<?php
require 'backend/function.php';
require 'backend/cek-login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('dist/head.php');
  ?>
</head>

<body class="sb-nav-fixed">
  <?php
  // navbar
  include('dist/navbar.php');
  ?>
  <div id="layoutSidenav">
    <?php
    // sidebar
    include('dist/sidebar.php');
    ?>

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
                    <th>Deskripsi</th>
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

                    $deskripsi = $data['deskripsi'];
                    $model = $data['model'];
                    $jmlData = $data['banyak_stok'];
                    $id_stok = $data['id_stok'];

                  ?>

                    <tr>
                      <td><?= $No++; ?></td>
                      <td><?= $model; ?></td>
                      <td><?= $deskripsi; ?></td>
                      <td><?= $jmlData; ?></td>
                      <td>
                        <!-- <button class="btn btn-primary action" data-bs-toggle="modal" data-bs-target="#detail<?= $id_stok; ?>"><i class="fa-solid fa-arrows-rotate"></i></button> -->
                        <button class="btn btn-primary action my-1" data-bs-toggle="modal" data-bs-target="#detail<?= $id_stok; ?>"><i class="fa-solid fa-pen-to-square"></i></button>


                      </td>
                    </tr>
                    <div class="modal fade" id="detail<?= $id_stok; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content p-2">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-bold">Edit Deskripsi</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <h6>Edit Deskripsi untuk model <?= $model; ?> ini</h6>
                              <input type="hidden" name="id_stok" value="<?= $id_stok; ?>">
                              <input type="hidden" name="model" value="<?= $model; ?>">
                              <input type="hidden" name="banyak_masuk" value="<?= $banyak_masuk; ?>">
                              <input type="hidden" name="banyak_keluar" value="<?= $banyak_keluar; ?>">
                              <input type="text" name="deskripsi" value="<?= $deskripsi; ?>">
                              <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary submit" name="editDesc">Edit Data</button>
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
      </main>
      <?php
      include('dist/footer.php');
      ?>

    </div>
  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
  <script src="assets/js/scripts.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>