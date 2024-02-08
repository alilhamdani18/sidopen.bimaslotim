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
      </main>
      <?php
      include('dist/footer.php');
      ?>
    </div>
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