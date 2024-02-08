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
              <!-- <div class="col-sm-12 col-lg-6">
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
            </div> -->
              <div class="col-sm-12 col-lg-12">
                <h3 class="fw-bold text-secondary my-3">Alamat Kami</h3>
                <div class="row">
                  <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.419436815071!2d116.53223249999999!3d-8.651597899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4ebeb797cb69%3A0xeff29f37502cf3ca!2sKantor%20Kementerian%20Agama%20Kabupaten%20Lombok%20Timur!5e0!3m2!1sid!2sid!4v1706080121343!5m2!1sid!2sid" width="100%" height="300" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <table class="mt-5">
                      <tr>
                        <td><i class="fa-solid fa-map-location-dot"></i></td>
                        <td class="px-3">Kantor Kementerian Agama Kabupaten Lombok Timur</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="px-3">JL. Profesor Mohamad Yamin, Khusus Kota Selong, Kec. Selong, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83611</td>
                      </tr>
                      <tr>
                        <td><i class="fa-solid fa-envelope-open-text mt-3"></i></td>
                        <td class="px-3">kemenaglomboktimur@kemenag.go.id.</td>
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
      <?php
      include('dist/footer.php');
      ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>