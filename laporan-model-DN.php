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
          <h1 class="mt-4 fw-semibold ">Laporan Model DN</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active ">Laporan Model DN</li>
          </ol>
          <div class="card mb-3">
            <div class="card-body">
              Laporan dibawah ini adalah laporan untuk Model DN
            </div>
          </div>
          <div class="btn-group mb-4 me-3 ">
            <button type="button" class="btn btn-primary dropdown-toggle  me-3 " data-bs-toggle="dropdown" aria-expanded="false">
              Tambah Data
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="data-masuk.php">Data Masuk</a></li>
              <li><a class="dropdown-item" href="data-keluar.php">Data Keluar</a></li>
            </ul>

            <form action="export-excel-DN.php" method="post" class="col d-flex">
              <input type="submit" value="Export ke Excel" name="export_excel" class="btn btn-success me-3">
              <select name="tahun" id="tahun" class="me-3 p-1">
                <option name="tahun" value="Tahun">Tahun</option>
                <?php for ($tahun = '2021'; $tahun <= date('Y'); $tahun++) { ?>
                  <option value="<?= $tahun ?>"><?= $tahun ?></option>
                <?php } ?>
              </select>
            </form>
          </div>

          <!-- Data Masuk -->
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h4 class="fw-semibold">Laporan Masuk Model DN</h4>
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
                  $ambilDataMasuk = mysqli_query($conn, "SELECT * FROM tbl_masuk WHERE model = 'DN'");
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
            <div class="card-header d-flex justify-content-between p-3">
              <div>
                <h4 class="fw-semibold">Laporan Keluar Model DN</h4>
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
                  $ambilDataKeluar = mysqli_query($conn, "SELECT * FROM tbl_keluar WHERE model = 'DN'");
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
          <!-- Data Kerusakan Barang -->
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h4 class="fw-semibold">Laporan Kerusakan Barang Model DN</h4>
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
                  $ambilDataKeluar = mysqli_query($conn, "SELECT * FROM tbl_lainnya WHERE model = 'DN'");
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilDataKeluar)) {

                    $id_barang = $data['id_barang'];
                    $tanggal = $data['tanggal'];
                    $uraian = $data['uraian'];
                    $banyak_barang = $data['banyak_barang'];
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
                      <td><?= $banyak_barang; ?></td>
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