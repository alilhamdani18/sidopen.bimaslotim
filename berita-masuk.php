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
  include('dist/navbar.php');
  ?>
  <div id="layoutSidenav">
    <?php
    include('dist/sidebar.php');
    ?>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4 fw-semibold ">Berita Acara Masuk</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active ">Berita Acara Masuk</li>
          </ol>
          <div class="card mb-3">
            <div class="card-body">
              Berita Acara untuk Data Masuk Pendistribusian Dokumen Pencatatan Nikah
            </div>
          </div>

          <!-- Berita Acara Masuk -->
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h4 class="fw-semibold">Berita Acara Masuk Model N</h4>
              </div>
            </div>
            <div class="card-body table-responsive">
              <table id="" class="display" style="width:100%">
                <thead>
                  <tr class="text-center align-middle">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Nomor Seri</th>
                    <th>Pihak Pertama</th>
                    <th>Pihak Kedua</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ambilData = mysqli_query($conn, "SELECT * FROM tbl_berita WHERE nama_barang = 'N'");
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilData)) {

                    // $id_laporan = $data['id_laporan'];
                    $nama_barang = $data['nama_barang'];
                    $jumlah_barang = $data['jumlah_barang'];
                    $satuan = $data['satuan'];
                    $nomor_seri = $data['nomor_seri'];
                    $pihak_pertama = $data['pihak_pertama'];
                    $pihak_kedua = $data['pihak_kedua'];
                    $keterangan = $data['keterangan'];


                  ?>

                    <tr class="text-center align-middle">
                      <td><?= $No++ ?></td>
                      <td><?= $nama_barang; ?></td>
                      <td><?= $jumlah_barang; ?></td>
                      <td><?= $satuan; ?></td>
                      <td><?= $nomor_seri; ?></td>
                      <td><?= $pihak_pertama; ?></td>
                      <td><?= $pihak_kedua; ?></td>
                      <td><?= $keterangan; ?></td>
                      <td>
                        <button class="btn btn-primary action" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-upload"></i></button>
                        <button class="btn btn-success action my-1" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-download"></i></button>
                      </td>
                    </tr>


                  <?php
                  }

                  ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h4 class="fw-semibold">Berita Acara Masuk Model NA</h4>
              </div>
            </div>
            <div class="card-body table-responsive">
              <table id="" class="display" style="width:100%">
                <thead>
                  <tr class="text-center align-middle">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Nomor Seri</th>
                    <th>Pihak Pertama</th>
                    <th>Pihak Kedua</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ambilData = mysqli_query($conn, "SELECT * FROM tbl_berita WHERE nama_barang = 'NA'");
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilData)) {

                    // $id_laporan = $data['id_laporan'];
                    $nama_barang = $data['nama_barang'];
                    $jumlah_barang = $data['jumlah_barang'];
                    $satuan = $data['satuan'];
                    $nomor_seri = $data['nomor_seri'];
                    $pihak_pertama = $data['pihak_pertama'];
                    $pihak_kedua = $data['pihak_kedua'];
                    $keterangan = $data['keterangan'];


                  ?>

                    <tr class="text-center align-middle">
                      <td><?= $No++ ?></td>
                      <td><?= $nama_barang; ?></td>
                      <td><?= $jumlah_barang; ?></td>
                      <td><?= $satuan; ?></td>
                      <td><?= $nomor_seri; ?></td>
                      <td><?= $pihak_pertama; ?></td>
                      <td><?= $pihak_kedua; ?></td>
                      <td><?= $keterangan; ?></td>
                      <td>
                        <button class="btn btn-primary action" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-upload"></i></button>
                        <button class="btn btn-success action my-1" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-download"></i></button>
                      </td>
                    </tr>


                  <?php
                  }

                  ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h4 class="fw-semibold">Berita Acara Masuk Model NB</h4>
              </div>
            </div>
            <div class="card-body table-responsive">
              <table id="" class="display" style="width:100%">
                <thead>
                  <tr class="text-center align-middle">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Nomor Seri</th>
                    <th>Pihak Pertama</th>
                    <th>Pihak Kedua</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ambilData = mysqli_query($conn, "SELECT * FROM tbl_berita WHERE nama_barang = 'NB'");
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilData)) {

                    // $id_laporan = $data['id_laporan'];
                    $nama_barang = $data['nama_barang'];
                    $jumlah_barang = $data['jumlah_barang'];
                    $satuan = $data['satuan'];
                    $nomor_seri = $data['nomor_seri'];
                    $pihak_pertama = $data['pihak_pertama'];
                    $pihak_kedua = $data['pihak_kedua'];
                    $keterangan = $data['keterangan'];


                  ?>

                    <tr class="text-center align-middle">
                      <td><?= $No++ ?></td>
                      <td><?= $nama_barang; ?></td>
                      <td><?= $jumlah_barang; ?></td>
                      <td><?= $satuan; ?></td>
                      <td><?= $nomor_seri; ?></td>
                      <td><?= $pihak_pertama; ?></td>
                      <td><?= $pihak_kedua; ?></td>
                      <td><?= $keterangan; ?></td>
                      <td>
                        <button class="btn btn-primary action" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-upload"></i></button>
                        <button class="btn btn-success action my-1" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-download"></i></button>
                      </td>
                    </tr>


                  <?php
                  }

                  ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h4 class="fw-semibold">Berita Acara Masuk Model R</h4>
              </div>
            </div>
            <div class="card-body table-responsive">
              <table id="" class="display" style="width:100%">
                <thead>
                  <tr class="text-center align-middle">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Nomor Seri</th>
                    <th>Pihak Pertama</th>
                    <th>Pihak Kedua</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ambilData = mysqli_query($conn, "SELECT * FROM tbl_berita WHERE nama_barang = 'R'");
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilData)) {

                    // $id_laporan = $data['id_laporan'];
                    $nama_barang = $data['nama_barang'];
                    $jumlah_barang = $data['jumlah_barang'];
                    $satuan = $data['satuan'];
                    $nomor_seri = $data['nomor_seri'];
                    $pihak_pertama = $data['pihak_pertama'];
                    $pihak_kedua = $data['pihak_kedua'];
                    $keterangan = $data['keterangan'];


                  ?>

                    <tr class="text-center align-middle">
                      <td><?= $No++ ?></td>
                      <td><?= $nama_barang; ?></td>
                      <td><?= $jumlah_barang; ?></td>
                      <td><?= $satuan; ?></td>
                      <td><?= $nomor_seri; ?></td>
                      <td><?= $pihak_pertama; ?></td>
                      <td><?= $pihak_kedua; ?></td>
                      <td><?= $keterangan; ?></td>
                      <td>
                        <button class="btn btn-primary action" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-upload"></i></button>
                        <button class="btn btn-success action my-1" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-download"></i></button>
                      </td>
                    </tr>


                  <?php
                  }

                  ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h4 class="fw-semibold">Berita Acara Masuk Model DN</h4>
              </div>
            </div>
            <div class="card-body table-responsive">
              <table id="" class="display" style="width:100%">
                <thead>
                  <tr class="text-center align-middle">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Nomor Seri</th>
                    <th>Pihak Pertama</th>
                    <th>Pihak Kedua</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ambilData = mysqli_query($conn, "SELECT * FROM tbl_berita WHERE nama_barang = 'DN'");
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilData)) {

                    // $id_laporan = $data['id_laporan'];
                    $nama_barang = $data['nama_barang'];
                    $jumlah_barang = $data['jumlah_barang'];
                    $satuan = $data['satuan'];
                    $nomor_seri = $data['nomor_seri'];
                    $pihak_pertama = $data['pihak_pertama'];
                    $pihak_kedua = $data['pihak_kedua'];
                    $keterangan = $data['keterangan'];


                  ?>

                    <tr class="text-center align-middle">
                      <td><?= $No++ ?></td>
                      <td><?= $nama_barang; ?></td>
                      <td><?= $jumlah_barang; ?></td>
                      <td><?= $satuan; ?></td>
                      <td><?= $nomor_seri; ?></td>
                      <td><?= $pihak_pertama; ?></td>
                      <td><?= $pihak_kedua; ?></td>
                      <td><?= $keterangan; ?></td>
                      <td>
                        <button class="btn btn-primary action" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-upload"></i></button>
                        <button class="btn btn-success action my-1" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-download"></i></button>
                      </td>
                    </tr>


                  <?php
                  }

                  ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h4 class="fw-semibold">Berita Acara Masuk Model RA</h4>
              </div>
            </div>
            <div class="card-body table-responsive">
              <table id="" class="display" style="width:100%">
                <thead>
                  <tr class="text-center align-middle">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Nomor Seri</th>
                    <th>Pihak Pertama</th>
                    <th>Pihak Kedua</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ambilData = mysqli_query($conn, "SELECT * FROM tbl_berita WHERE nama_barang = 'RA'");
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilData)) {

                    // $id_laporan = $data['id_laporan'];
                    $nama_barang = $data['nama_barang'];
                    $jumlah_barang = $data['jumlah_barang'];
                    $satuan = $data['satuan'];
                    $nomor_seri = $data['nomor_seri'];
                    $pihak_pertama = $data['pihak_pertama'];
                    $pihak_kedua = $data['pihak_kedua'];
                    $keterangan = $data['keterangan'];


                  ?>

                    <tr class="text-center align-middle">
                      <td><?= $No++ ?></td>
                      <td><?= $nama_barang; ?></td>
                      <td><?= $jumlah_barang; ?></td>
                      <td><?= $satuan; ?></td>
                      <td><?= $nomor_seri; ?></td>
                      <td><?= $pihak_pertama; ?></td>
                      <td><?= $pihak_kedua; ?></td>
                      <td><?= $keterangan; ?></td>
                      <td>
                        <button class="btn btn-primary action" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-upload"></i></button>
                        <button class="btn btn-success action my-1" data-bs-toggle="modal" data-bs-target="#"><i class="fa-solid fa-download"></i></button>
                      </td>
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
      <?php
      include('dist/footer.php');
      ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/datatables-simple-demo.js"></script>
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