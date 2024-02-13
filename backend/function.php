<?php

session_start();
// membuat koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_simbah";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Testing
// if ($conn) {
//   echo 'Koneksi berhasil';
// }


// // Menambah data stok baru
// if (isset($_POST['addStok'])) {
//   $model = $_POST['model'];
//   $jmlStok = $_POST['jmlStok'];

//   $addStok = mysqli_query($conn, "INSERT INTO tbl_stok (model, banyak_stok) VALUES ('$model','$jmlStok')");

//   if ($addStok) {
//     echo 'Data Berhasil Dimasukkan';
//     header('location:index.php');
//   } else {
//     die("Data Gagal dimasukkan");
//     header('location:index.php');
//   }
// }

// Edit Deskripsi Model
if (isset($_POST['editDesc'])) {
  // $id_stok = $_POST['id_stok'];
  $id_stok = $_POST['id_stok'];
  $model = $_POST['model'];
  $deskripsi = $_POST['deskripsi'];

  $updateDeskripsi = mysqli_query($conn, "UPDATE tbl_stok SET deskripsi = '$deskripsi' WHERE id_stok = $id_stok");
  if ($updateDeskripsi) {
    echo '
        <script>
          alert(\'Deskripsi Berhasil Diupdate\')
        </script>';
    echo 'header(\'location:index.php\')';
  } else {
    echo '
        <script>
          alert(\'Deskripsi Gagal Diupdate\')
        </script>';
    echo 'header(\'location:index.php\')';
  }
}
// Menambah data Masuk baru
if (isset($_POST['addDataMasuk'])) {
  $tanggal = $_POST['tanggal'];
  $uraian = $_POST['uraian'];
  $jmlMasuk = $_POST['jmlMasuk'];
  $model = $_POST['model'];
  $nomorSeri = $_POST['nomorSeri'];
  $satuan = $_POST['satuan'];
  $nomorBukti = $_POST['nomorBukti'];
  $ket = $_POST['ket'];

  $cekStokSekarang = mysqli_query($conn, "SELECT * FROM tbl_stok WHERE model = '$model'");
  $ambilData = mysqli_fetch_array($cekStokSekarang);

  $stokSekarang = $ambilData['banyak_stok'];
  $tambahkanData = $stokSekarang + $jmlMasuk;


  // Tambah data masuk
  $addDataMasuk = mysqli_query($conn, "INSERT INTO tbl_masuk (tanggal, uraian, banyak_masuk, model, nomor_seri, satuan, nomor_bukti, Keterangan) VALUES ('$tanggal', '$uraian', '$jmlMasuk', '$model', '$nomorSeri', '$satuan', '$nomorBukti', '$ket')");

  // update stok
  $updateDataStok = mysqli_query($conn, "UPDATE tbl_stok SET banyak_stok = '$tambahkanData' WHERE model = '$model'");

  if ($addDataMasuk && $updateDataStok) {
    echo '
        <script>
          alert(\'Data Berhasil Ditambahkan\')
        </script>';
    echo 'header(\'location:data-masuk.php\')';
  } else {
    echo '
        <script>
          alert(\'Data Gagal Ditambahkan\')
        </script>';
    echo 'header(\'location:data-masuk.php\')';
  }
}
// Menambah data Keluar baru
if (isset($_POST['addDataKeluar'])) {
  $tanggal = $_POST['tanggal'];
  $uraian = $_POST['uraian'];
  $jmlKeluar = $_POST['jmlKeluar'];
  $model = $_POST['model'];
  $nomorSeri = $_POST['nomorSeri'];
  $satuan = $_POST['satuan'];
  $nomorBukti = $_POST['nomorBukti'];
  $ket = $_POST['ket'];

  $cekStokSekarang = mysqli_query($conn, "SELECT * FROM tbl_stok WHERE model = '$model'");
  $ambilData = mysqli_fetch_array($cekStokSekarang);

  $stokSekarang = $ambilData['banyak_stok'];
  if ($stokSekarang >= $jmlKeluar) {
    $kurangkanData = $stokSekarang - $jmlKeluar;

    // Tambah Data Keluar
    $addDataKeluar = mysqli_query($conn, "INSERT INTO tbl_keluar (tanggal, uraian, banyak_keluar, model, nomor_seri, satuan, nomor_bukti, Keterangan) VALUES ('$tanggal', '$uraian', '$jmlKeluar', '$model', '$nomorSeri', '$satuan', '$nomorBukti', '$ket')");

    // update stok
    $updateDataStok = mysqli_query($conn, "UPDATE tbl_stok SET banyak_stok = '$kurangkanData' WHERE model = '$model'");

    if ($addDataKeluar && $updateDataStok) {
      echo '
        <script>
          alert(\'Data Berhasil Ditambahkan\')
        </script>';
      echo 'header(\'location:data-keluar.php\')';
    } else {
      echo '
        <script>
          alert(\'Data Gagal Ditambahkan\')
        </script>';
      echo 'header(\'location:data-keluar.php\')';
    }
  } else {
    echo '
      <script>
        alert(\'Stok tidak mencukupi\')
      </script>';
    echo 'header(\'location:data-keluar.php\')';
  }
}
// Menambah data Kerusakan Barang baru
if (isset($_POST['addDataBarang'])) {
  $tanggal = $_POST['tanggal'];
  $uraian = $_POST['uraian'];
  $jmlBarang = $_POST['jmlBarang'];
  $model = $_POST['model'];
  $nomorSeri = $_POST['nomorSeri'];
  $satuan = $_POST['satuan'];
  $nomorBukti = $_POST['nomorBukti'];
  $ket = $_POST['ket'];

  $cekStokSekarang = mysqli_query($conn, "SELECT * FROM tbl_stok WHERE model = '$model'");
  $ambilData = mysqli_fetch_array($cekStokSekarang);

  $stokSekarang = $ambilData['banyak_stok'];
  if ($stokSekarang >= $jmlBarang) {
    $kurangkanData = $stokSekarang - $jmlBarang;

    // Tambah Data Keluar
    $addDataBarang = mysqli_query($conn, "INSERT INTO tbl_lainnya (tanggal, uraian, banyak_barang, model, nomor_seri, satuan, nomor_bukti, Keterangan) VALUES ('$tanggal', '$uraian', '$jmlBarang', '$model', '$nomorSeri', '$satuan', '$nomorBukti', '$ket')");

    // update stok
    $updateDataStok = mysqli_query($conn, "UPDATE tbl_stok SET banyak_stok = '$kurangkanData' WHERE model = '$model'");

    if ($addDataBarang && $updateDataStok) {
      echo '
        <script>
          alert(\'Data Berhasil Ditambahkan\')
        </script>';
      echo 'header(\'location:data-lainnya.php\')';
    } else {
      echo '
        <script>
          alert(\'Data Gagal Ditambahkan\')
        </script>';
      echo 'header(\'location:data-lainnya.php\')';
    }
  } else {
    echo '
      <script>
        alert(\'Stok tidak mencukupi\')
      </script>';
    echo 'header(\'location:data-keluar.php\')';
  }
}



// Edit Data Masuk
if (isset($_POST['editMasuk'])) {
  $id_masuk = $_POST['id_masuk'];
  $tanggal = $_POST['tanggal'];
  $uraian = $_POST['uraian'];
  $banyak_masuk = $_POST['banyak_masuk'];
  $model = $_POST['model'];
  $nomor_seri = $_POST['nomorSeri'];
  $satuan = $_POST['satuan'];
  $nomor_bukti = $_POST['nomorBukti'];
  $keterangan = $_POST['ket'];

  $cekStokSekarang = mysqli_query($conn, "SELECT * FROM tbl_stok WHERE model = '$model'");
  $ambilData = mysqli_fetch_array($cekStokSekarang);
  $stokSekarang = $ambilData['banyak_stok'];

  $dataMasukSekarang = mysqli_query($conn, "SELECT * FROM tbl_masuk WHERE id_masuk = '$id_masuk'");
  $ambilDataMasukSekarang = mysqli_fetch_array($dataMasukSekarang);
  $dataMasukSekarang = $ambilDataMasukSekarang['banyak_masuk'];


  if ($banyak_masuk > $dataMasukSekarang) {
    $selisih = $banyak_masuk - $dataMasukSekarang;
    $tambahStok = $stokSekarang + $selisih;
    $editMasuk = mysqli_query($conn, "UPDATE tbl_masuk SET tanggal = '$tanggal', uraian = '$uraian', banyak_masuk = '$banyak_masuk', model = '$model', nomor_seri = '$nomor_seri', satuan = '$satuan', nomor_bukti = '$nomor_bukti', keterangan = '$keterangan' WHERE id_masuk = '$id_masuk'");
    $updateDataStok = mysqli_query($conn, "UPDATE tbl_stok SET banyak_stok = '$tambahStok' WHERE model = '$model'");

    if ($editMasuk && $updateDataStok) {
      echo '
        <script>
          alert(\'Data Berhasil Diedit\')
        </script>';
      echo 'header(\'location:data-masuk.php\')';
    } else {
      echo '
        <script>
          alert(\'Data Gagal Diedit\')
        </script>';
      echo 'header(\'location:data-masuk.php\')';
    }
  } else {
    $selisih = $dataMasukSekarang - $banyak_masuk;
    $kurangiStok = $stokSekarang - $selisih;
    $editMasuk = mysqli_query($conn, "UPDATE tbl_masuk SET tanggal = '$tanggal', uraian = '$uraian', banyak_masuk = '$banyak_masuk', model = '$model', nomor_seri = '$nomor_seri', satuan = '$satuan', nomor_bukti = '$nomor_bukti', keterangan = '$keterangan' WHERE id_masuk = '$id_masuk'");
    $updateDataStok = mysqli_query($conn, "UPDATE tbl_stok SET banyak_stok = '$kurangiStok' WHERE model = '$model'");

    if ($editMasuk && $updateDataStok) {
      echo '
        <script>
        alert(\'Data Berhasil Diedit\')
        </script>';
      echo 'header(\'location:data-masuk.php\')';
    } else {
      echo '
        <script>
          alert(\'Data Gagal Diedit\')
        </script>';
      echo 'header(\'location:data-masuk.php\')';
    }
  }
}
// Edit Data Keluar
if (isset($_POST['editKeluar'])) {
  // $id_keluar = isset($_POST['id_keluar']) ? $_POST['id_keluar'] : '';
  $id_keluar = $_POST['id_keluar'];
  $tanggal = $_POST['tanggal'];
  $uraian = $_POST['uraian'];
  // $banyak_keluar = isset($_POST['jmlKeluar']) ? $_POST['jmlKeluar'] : '';
  $banyak_keluar = $_POST['banyak_keluar'];
  $model = $_POST['model'];
  $nomor_seri = $_POST['nomorSeri'];
  $satuan = $_POST['satuan'];
  $nomor_bukti = $_POST['nomorBukti'];
  $keterangan = $_POST['ket'];

  $cekStokSekarang = mysqli_query($conn, "SELECT * FROM tbl_stok WHERE model = '$model'");
  $ambilData = mysqli_fetch_array($cekStokSekarang);
  $stokSekarang = $ambilData['banyak_stok'];

  $dataKeluarSekarang = mysqli_query($conn, "SELECT * FROM tbl_keluar WHERE id_keluar = '$id_keluar'");
  $ambildataKeluarSekarang = mysqli_fetch_array($dataKeluarSekarang);
  $dataKeluarSekarang = $ambildataKeluarSekarang['banyak_keluar'];

  if ($stokSekarang >= $banyak_keluar) {
    if ($banyak_keluar > $dataKeluarSekarang) {
      $selisih = $banyak_keluar - $dataKeluarSekarang;
      $kurangiStok = $stokSekarang - $selisih;
      $editKeluar = mysqli_query($conn, "UPDATE tbl_keluar SET tanggal = '$tanggal', uraian = '$uraian', banyak_keluar = '$banyak_keluar', model = '$model', nomor_seri = '$nomor_seri', satuan = '$satuan', nomor_bukti = '$nomor_bukti', keterangan = '$keterangan' WHERE id_keluar = '$id_keluar'");
      $updateDataStok = mysqli_query($conn, "UPDATE tbl_stok SET banyak_stok = '$kurangiStok' WHERE model = '$model'");

      if ($editKeluar && $updateDataStok) {
        echo '
          <script>
            alert(\'Data Berhasil Diedit\')
          </script>';
        echo 'header(\'location:data-keluar.php\')';
      } else {
        echo '
          <script>
            alert(\'Data Gagal Diedit\')
          </script>';
        echo 'header(\'location:data-keluar.php\')';
      }
    } else {
      $selisih = $dataKeluarSekarang - $banyak_keluar;
      $tambahStok = $stokSekarang + $selisih;
      $editKeluar = mysqli_query($conn, "UPDATE tbl_keluar SET tanggal = '$tanggal', uraian = '$uraian', banyak_keluar = '$banyak_keluar', model = '$model', nomor_seri = '$nomor_seri', satuan = '$satuan', nomor_bukti = '$nomor_bukti', keterangan = '$keterangan' WHERE id_keluar = '$id_keluar'");
      $updateDataStok = mysqli_query($conn, "UPDATE tbl_stok SET banyak_stok = '$tambahStok' WHERE model = '$model'");

      if ($editKeluar && $updateDataStok) {
        echo '
          <script>
            alert(\'Data Berhasil Diedit\')
          </script>';
        echo 'header(\'location:data-masuk.php\')';
      } else {
        echo '
          <script>
            alert(\'Data Gagal Diedit\')
          </script>';
        echo 'header(\'location:data-masuk.php\')';
      }
    }
  }
}


// Hapus Data Masuk
if (isset($_POST['hapusDataMasuk'])) {
  $id_stok = $_POST['id_stok'];
  $id_masuk = $_POST['id_masuk'];
  $model = $_POST['model'];
  $banyak_masuk = $_POST['banyak_masuk'];

  $cekStokSekarang = mysqli_query($conn, "SELECT * FROM tbl_stok WHERE model = '$model'");
  $ambilData = mysqli_fetch_array($cekStokSekarang);
  $stokSekarang = $ambilData['banyak_stok'];

  $kurangiStok = $stokSekarang - $banyak_masuk;

  $hapusMasuk = mysqli_query($conn, "DELETE FROM tbl_masuk WHERE id_masuk = '$id_masuk'");
  if ($banyak_masuk > $stokSekarang) {
    $updateDataStok = mysqli_query($conn, "UPDATE tbl_stok SET banyak_stok = 0 WHERE model = '$model'");
    $deleteDataKeluar = mysqli_query($conn, "DELETE FROM tbl_keluar WHERE model = '$model'");
  } else {
    $updateDataStok = mysqli_query($conn, "UPDATE tbl_stok SET banyak_stok = '$kurangiStok' WHERE model = '$model'");
  }

  if ($hapusMasuk && $updateDataStok) {
    echo '
      <script>
        alert(\'Data Berhasil Dihapus\')
      </script>';
    echo 'header(\'location:data-masuk.php\')';
  } else {
    echo '
      <script>
        alert(\'Data Gagal Dihapus\')
      </script>';
    echo 'header(\'location:data-masuk.php\')';
  }
}

// Hapus Data Keluar
if (isset($_POST['hapusDataKeluar'])) {
  $id_keluar = $_POST['id_keluar'];
  $model = $_POST['model'];
  $banyak_keluar = $_POST['banyak_keluar'];

  $cekStokSekarang = mysqli_query($conn, "SELECT * FROM tbl_stok WHERE model = '$model'");
  $ambilData = mysqli_fetch_array($cekStokSekarang);
  $stokSekarang = $ambilData['banyak_stok'];

  $tambahStok = $stokSekarang + $banyak_keluar;

  $hapusKeluar = mysqli_query($conn, "DELETE FROM tbl_keluar WHERE id_keluar = '$id_keluar'");
  $updateDataStok = mysqli_query($conn, "UPDATE tbl_stok SET banyak_stok = '$tambahStok' WHERE model = '$model'");
  if ($hapusKeluar && $updateDataStok) {
    echo '
      <script>
        alert(\'Data Berhasil Dihapus\')
      </script>';
    echo 'header(\'location:data-keluar.php\')';
  } else {
    echo '
      <script>
        alert(\'Data Gagal Dihapus\')
      </script>';
    echo 'header(\'location:data-keluar.php\')';
  }
}

// Tambah Admin
if (isset($_POST['tambahAdmin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $tambahAdmin = mysqli_query($conn, "INSERT INTO tbl_login (username, password) VALUES ('$username','$password')");

  if ($tambahAdmin) {
    echo '
      <script>
        alert(\'Data Berhasil Ditambahkan\')
      </script>';
    echo 'header(\'location:admin.php\')';
  } else {
    echo '
      <script>
        alert(\'Data Gagal Ditambahkan\')
      </script>';
    echo 'header(\'location:admin.php\')';
  }
}

// edit Admin 
if (isset($_POST['editAdmin'])) {
  $id_user = $_POST['id_user'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $editAdmin = mysqli_query($conn, "UPDATE tbl_login SET username ='$username', password = '$password' WHERE id_user = '$id_user'");
  if ($editAdmin) {
    echo '
      <script>
        alert(\'Data Berhasil Diedit\')
      </script>';
    echo 'header(\'location:admin.php\')';
  } else {
    echo '
      <script>
        alert(\'Data Gagal Diedit\')
      </script>';
    echo 'header(\'location:admin.php\')';
  }
}

// Hapus Admin
if (isset($_POST['hapusAdmin'])) {
  $id_user = $_POST['id_user'];

  $hapusAdmin = mysqli_query($conn, "DELETE FROM tbl_login WHERE id_user = '$id_user'");
  if ($hapusAdmin) {
    echo '
      <script>
        alert(\'Data Berhasil Dihapus\')
      </script>';
    echo 'header(\'location:admin.php\')';
  } else {
    echo '
      <script>
        alert(\'Data Gagal Dihapus\')
      </script>';
    echo 'header(\'location:admin.php\')';
  }
}


// Upload Berita Acara
if (isset($_POST['beritaMasuk'])) {
  $nomor = $_POST['nomor'];
  $pihak_pertama = $_POST['pihak_pertama'];
  $pihak_kedua = $_POST['pihak_kedua'];

  $file_name = $_FILES['berkas']['name'];
  $x = explode('.', $file_name);
  $ekstensiFile = strtolower(end($x));
  $ukuranFile    = $_FILES['berkas']['size'];
  $file_tmp = $_FILES['berkas']['tmp_name'];
  // Lokasi Penempatan file
  $direktori = "file/";
  $linkBerkas = $direktori . $file_name;

  $terupload = move_uploaded_file($file_tmp, $linkBerkas);
  $query = mysqli_query($conn, "INSERT INTO tbl_berita_masuk set nomor = '$nomor', nama_file = '$file_name', pihak_pertama = '$pihak_pertama', pihak_kedua = '$pihak_kedua', ukuran = '$ukuranFile', ekstensi = '$ekstensiFile', berkas = '$linkBerkas'");

  if ($terupload && $query) {
    echo '
      <script>
        alert(\'Data Berhasil Diupload\')
      </script>';
    echo 'header(\'location:berita-masuk.php\')';
  } else {
    echo '
      <script>
        alert(\'Data Gagal Diupload\')
      </script>';
    echo 'header(\'location:berita-masuk.php\')';
  }
}
if (isset($_POST['beritaKeluar'])) {
  $nomor = $_POST['nomor'];
  $pihak_pertama = $_POST['pihak_pertama'];
  $pihak_kedua = $_POST['pihak_kedua'];

  $file_name = $_FILES['berkas']['name'];
  $x = explode('.', $file_name);
  $ekstensiFile = strtolower(end($x));
  $ukuranFile    = $_FILES['berkas']['size'];
  $file_tmp = $_FILES['berkas']['tmp_name'];
  // Lokasi Penempatan file
  $direktori = "file/";
  $linkBerkas = $direktori . $file_name;

  $terupload = move_uploaded_file($file_tmp, $linkBerkas);
  $query = mysqli_query($conn, "INSERT INTO tbl_berita_keluar set nomor = '$nomor', nama_file = '$file_name', pihak_pertama = '$pihak_pertama', pihak_kedua = '$pihak_kedua', ukuran = '$ukuranFile', ekstensi = '$ekstensiFile', berkas = '$linkBerkas'");

  if ($terupload && $query) {
    echo '
      <script>
        alert(\'Data Berhasil Diupload\')
      </script>';
    echo 'header(\'location:berita-masuk.php\')';
  } else {
    echo '
      <script>
        alert(\'Data Gagal Diupload\')
      </script>';
    echo 'header(\'location:berita-masuk.php\')';
  }
}


// Edit Data Berita Masuk
if (isset($_POST['editBeritaMasuk'])) {
  $id_berita = $_POST['id_berita'];
  $nomor = $_POST['nomor'];
  $pihak_pertama = $_POST['pihak_pertama'];
  $pihak_kedua = $_POST['pihak_kedua'];

  $file_name = $_FILES['berkas']['name'];
  $x = explode('.', $file_name);
  $ekstensiFile = strtolower(end($x));
  $ukuranFile    = $_FILES['berkas']['size'];
  $file_tmp = $_FILES['berkas']['tmp_name'];
  // Lokasi Penempatan file
  $direktori = "file/";
  $linkBerkas = $direktori . $file_name;

  $terupload = move_uploaded_file($file_tmp, $linkBerkas);
  $query = mysqli_query($conn, "INSERT INTO tbl_berita set nomor = '$nomor', nama_file = '$file_name', pihak_pertama = '$pihak_pertama', pihak_kedua = '$pihak_kedua',ukuran = '$ukuranFile', ekstensi = '$ekstensiFile', berkas = '$linkBerkas' WHERE id_berita = '$id_berita'");

  if ($terupload && $query) {
    echo '
      <script>
        alert(\'Data Berhasil Diedit\')
      </script>';
    echo 'header(\'location:berita-masuk.php\')';
  } else {
    echo '
      <script>
        alert(\'Data Gagal Diedit\')
      </script>';
    echo 'header(\'location:berita-masuk.php\')';
  }
}


// Hapus Berita Masuk
if(isset($_POST['hapusBeritaMasuk'])) {
  $id_berita = $_POST['id_berita'];
  
  $ambilData = mysqli_query($conn, "SELECT * FROM tbl_berita_masuk WHERE id_berita = '$id_berita'");
  $data = mysqli_fetch_assoc($ambilData);
  $file = $data['nama_file'];
  if(file_exists("file/$file")) {
    unlink("file/$file");
  }
  

  $query = mysqli_query($conn, "DELETE FROM tbl_berita WHERE id_berita = '$id_berita'");
  if ($query) {
    echo '
      <script>
        alert(\'Data Berhasil Dihapus\')
      </script>';
    echo 'header(\'location:berita-masuk.php\')';
  } else {
    echo '
      <script>
        alert(\'Data Gagal Dihapus\')
      </script>';
    echo 'header(\'location:berita-masuk.php\')';
  }
}
// Hapus Berita Keluar
if(isset($_POST['hapusBeritaKeluar'])) {
  $id_berita = $_POST['id_berita'];
  
  $ambilData = mysqli_query($conn, "SELECT * FROM tbl_berita_keluar WHERE id_berita = '$id_berita'");
  $data = mysqli_fetch_assoc($ambilData);
  $file = $data['nama_file'];
  if(file_exists("file/$file")) {
    unlink("file/$file");
  }
  

  $query = mysqli_query($conn, "DELETE FROM tbl_berita_keluar WHERE id_berita = '$id_berita'");
  if ($query) {
    echo '
      <script>
        alert(\'Data Berhasil Dihapus\')
      </script>';
    echo 'header(\'location:berita-masuk.php\')';
  } else {
    echo '
      <script>
        alert(\'Data Gagal Dihapus\')
      </script>';
    echo 'header(\'location:berita-masuk.php\')';
  }
}