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
          <h1 class="mt-4 fw-semibold">Kelola Admin</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Kelola Admin</li>
          </ol>
          <div class="card mb-4">
            <!-- <div class="card-header">
              <button class="btn btn-primary my-2 " data-bs-toggle="modal" data-bs-target="#formTambahAdmin"><i class="fa-solid fa-file-circle-plus"></i>Tambah Admin</button>
            </div> -->
            <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <!-- <th>Password</th> -->
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $ambilDataAdmin = mysqli_query($conn, "SELECT * FROM tbl_login");
                  $No = 1;
                  while ($data = mysqli_fetch_array($ambilDataAdmin)) {
                    $id_user = $data['id_user'];
                    $username = $data['username'];
                    $password = $data['password'];


                  ?>

                    <tr>
                      <td><?= $No++; ?></td>
                      <td><?= $username; ?></td>
                      <td>
                        <button class="btn btn-success action" data-bs-toggle="modal" data-bs-target="#readData<?= $id_user; ?> "><i class="fa-solid fa-eye"></i></button>
                        <button class="btn btn-primary action my-1" data-bs-toggle="modal" data-bs-target="#editData<?= $id_user; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger action" data-bs-toggle="modal" data-bs-target="#hapusData<?= $id_user; ?>"><i class="fa-solid fa-trash-can"></i></button>
                      </td>
                    </tr>
                    <!-- readData -->
                    <div class="modal fade" id="readData<?= $id_user; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content p-3">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-semibold">Details Data Admin</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="">
                              <div class="inputfield">
                                <div>
                                  <label for="username">Username</label>
                                  <input type="text" name="username" value="<?= $username; ?>" disabled id="username" />
                                </div>
                                <!-- <div>
                                  <label for="email">Email</label>
                                  <input type="email" name="email" value="<?= $email; ?>" disabled id="email" />
                                </div> -->
                                <div>
                                  <label for="password">Password</label>
                                  <input type="password" name="password" value="<?= $password ?>" disabled id="password" />
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Edit Data  -->
                    <div class="modal fade" id="editData<?= $id_user; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content p-3">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-bold">Edit Data Admin</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <div class="inputfield">
                                <div>
                                  <label for="username">Username</label>
                                  <input type="text" name="username" value="<?= $username; ?>" id="username" />
                                </div>
                                <!-- <div>
                                  <label for="email">Email</label>
                                  <input type="email" name="email" value="<?= $email; ?>" id="email" />
                                </div> -->
                                <div>
                                  <label for="password">Password</label>
                                  <input type="password" name="password" value="<?= $password ?>" id="password" />
                                </div>
                                <input type="hidden" name="id_user" value="<?= $id_user; ?>">
                              </div>
                              <div class="d-flex justify-content-center my-3">
                                <button type="submit" class="btn btn-primary submit" name="editAdmin">Edit Data</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>



                    <!-- Hapus Data  -->
                    <div class="modal fade" id="hapusData<?= $id_user; ?>">
                      <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content p-3">
                          <div class="modal-header py-2">
                            <h4 class="modal-title fw-bold">Hapus Data Masuk</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post">
                              <h6>Apakah anda yakin ingin menghapus data admin <strong>(<?= $username ?>)</strong> ini ?</h6>
                              <input type="hidden" name="id_user" value="<?= $id_user; ?>">
                              <div class="d-flex justify-content-center my-3">
                                <button type="submit" class="btn btn-danger submit" name="hapusAdmin">Hapus</button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>