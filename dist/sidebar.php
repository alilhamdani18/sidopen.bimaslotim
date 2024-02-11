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
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBerita" aria-expanded="false" aria-controls="collapseBerita">
          <div class="sb-nav-link-icon"><i class="fa-solid fa-file-signature"></i></div>
          Berita Acara
          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseBerita" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="berita-masuk.php">Data Masuk</a>
            <a class="nav-link" href="berita-keluar.php">Data Keluar</a>
            <!-- <a class="nav-link" href="lainnya.php">Lainnya</a> -->
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
        <a class="nav-link" href="backend/logout.php">
          <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
          Logout
        </a>
      </div>
    </div>
  </nav>
</div>