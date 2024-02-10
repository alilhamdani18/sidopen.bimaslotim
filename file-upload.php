<?php
include('backend/function.php');

if (isset($_POST['beritaMasuk'])) {
  $nomor = $_POST['nomor'];
  $judul = $_POST['judul'];

  $file_name = $_FILES['berkas']['name'];
  $direktori = $_FILES['file/'];
  $file_tmp = $_FILES['berkas']['tmp_name'];
  $linkBerkas = $direktori . $file_name;

  $terupload = move_uploaded_file($file_tmp, $linkBerkas);
  $query = mysqli_query($conn, "INSERT INTO tbl_berita VALUES('$nomor','$judul','$file_name')");

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
