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
          <h1 class="mt-4 fw-semibold">Tambah Berita Acara Masuk</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Tambah Berita Acara Masuk</li>
          </ol>
          <div class="card mb-4">
            <div class="card-header">
              <button class="btn btn-primary my-2 " data-bs-toggle="modal" data-bs-target="#uploadFile"><i class="fa-solid fa-file-circle-plus"></i> Tambah Data</button>
            </div>
            <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nomor Surat</th>
                    <th>Nama File</th>
                    <th>Pihak Pertama</th>
                    <th>Pihak Kedua</th>
                    <th>Type</th>
                    <!-- <th>Berkas</th> -->
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ambilData = mysqli_query($conn, "SELECT * FROM tbl_berita_masuk");
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilData)) {
                    $id_berita = $data['id_berita'];
                    $nomor = $data['nomor'];
                    $nama_file = $data['nama_file'];
                    $pihak_pertama = $data['pihak_pertama'];
                    $pihak_kedua = $data['pihak_kedua'];
                    $ekstensi = $data['ekstensi'];
                    $berkas = $data['berkas'];


                  ?>

                    <tr>
                      <!-- <td><?= $id_berita; ?></td> -->
                      <td><?= $No++; ?></td>
                      <td><?= $nomor; ?></td>
                      <td><?= $nama_file; ?></td>
                      <td><?= $pihak_pertama; ?></td>
                      <td><?= $pihak_kedua; ?></td>
                      <td><?= $ekstensi; ?></td>
                      <!-- <td><?= $berkas; ?></td> -->
                      <td>
                        <button class="btn btn-success action m-1" data-bs-toggle="modal" data-bs-target="#readData<?= $id_berita; ?>"><i class="fa-solid fa-download"></i></button>
                        <!-- <button class="btn btn-primary action my-1" data-bs-toggle="modal" data-bs-target="#editData<?= $id_berita; ?>"><i class="fa-solid fa-pen-to-square"></i></button> -->
                        <button class="btn btn-danger action" data-bs-toggle="modal" data-bs-target="#hapusData<?= $id_berita; ?>"><i class="fa-solid fa-trash-can"></i></button>
                      </td>
                    </tr>
                    <!-- Download Data -->
                    <div class="modal fade" id="readData<?= $id_berita; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content p-3">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-bold">Download Berita Acara</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <h6>Download Berita Acara ini ?</h6>
                              <div class="d-flex justify-content-center mt-5">
                                <a class="btn btn-success" href="download-file.php?url=<?php echo $data['berkas']; ?>">Download</a>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Edit Data  -->
                    <div class="modal fade" id="editData<?= $id_berita; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content p-3">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-bold">Edit Data Masuk</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST" id="formBerita" enctype="multipart/form-data">
                              <div class="inputfield">
                                <input type="hidden" name="id_berita">

                                <div>
                                  <label for="nomor">Nomor Surat</label>
                                  <input type="text" name="nomor" value="<?= $nomor ?>" id="nomor" />
                                </div>
                                <div>
                                  <label for="pihak_pertama">Pihak Pertama</label>
                                  <input type="text" name="pihak_pertama" value="<?= $pihak_pertama ?>" id="pihak_pertama" />
                                </div>
                                <div>
                                  <label for="pihak_kedua">Pihak Kedua</label>
                                  <input type="text" name="pihak_kedua" value="<?= $pihak_kedua ?>" id="pihak_kedua" />
                                </div>
                                <div>
                                  <label for="berkas">Upload File Berita Acara</label>
                                  <input type="file" autocomplete="off" name="berkas" value="<?= $nama_file ?>" id="berkas" />
                                </div>
                                <div class="d-flex justify-content-center my-3">
                                  <button type="submit" class="btn btn-primary submit" name="editBeritaMasuk">Edit Data</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- Hapus Data  -->
                    <div class="modal fade" id="hapusData<?= $id_berita; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content p-3">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-bold">Hapus Berita Acara</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <h6>Apakah anda yakin ingin menghapus Berita Acara <?= $nomor; ?> ini ?</h6>
                              <input type="hidden" name="id_berita" value="<?= $id_berita; ?>">
                              <div class="d-flex justify-content-center mt-5">
                                <!-- <a class="btn btn-danger" href="hapus-file.php?name=file/<?php echo $data['nama_file']; ?>">Hapus</a> -->
                                <button type="submit" class="btn btn-danger submit" name="hapusBeritaMasuk">Hapus</button>
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
    <div class="modal fade" id="uploadFile">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content p-3">
          <div class="modal-header py-2">
            <h4 class="modal-title fw-bold">Tambah Berita Acara Masuk</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="inputfield">
                <div>
                  <label for="nomor">Nomor Surat</label>
                  <input type="text" name="nomor" id="nomor" />
                </div>
                <div>
                  <label for="pihak_pertama">Pihak Pertama</label>
                  <input type="text" name="pihak_pertama" id="pihak_pertama" />
                </div>
                <div>
                  <label for="pihak_kedua">Pihak Kedua</label>
                  <input type="text" name="pihak_kedua" id="pihak_kedua" />
                </div>
                <div>
                  <label for="berkas">Keterangan</label>
                  <input type="file" autocomplete="off" name="berkas" id="berkas" />
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary" name="beritaMasuk" value="Tambah Data">Tambah Data</button>
                </div>
              </div>
            </form>
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