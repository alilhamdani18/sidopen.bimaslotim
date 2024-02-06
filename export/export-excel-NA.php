<?php
require '../backend/function.php';

$output1 = '';
$output2 = '';
if (isset($_POST['export_excel'])) {
  $tahun = $_POST['tahun'];

  $sql = "SELECT * FROM tbl_masuk WHERE model = 'NA' AND YEAR(tanggal) = '$tahun'";
  $sql2 = "SELECT * FROM tbl_keluar WHERE model = 'NA' AND YEAR(tanggal) = '$tahun'";

  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql2);

  if (mysqli_num_rows($result) > 0) {
    $output1 .= '
    <h1 style="margin:1rem 0;text-align:center;">Laporan Masuk Model NA</h1>
    <table class="table table-bordered" border="1"> 
      <thead class="table-dark">
        <tr>
          <th rowspan="2">No.</th>
          <th rowspan="2">Tanggal</th>
          <th rowspan="2">Uraian</th>
          <th colspan="3">Banyaknya</th>
          <th rowspan="2">Model</th>
          <th rowspan="2">Nomor Seri</th>
          <th rowspan="2">Satuan</th>
          <th colspan="2">Nomor Bukti</th>
          <th rowspan="2">Keterangan</th>
        </tr>
        <tr>
          <th>Masuk</th>
          <th>Keluar</th>
          <th>Sisa</th>
          <th>Penerimaan</th>
          <th>Pengeluaran</th>
        </tr>
      </thead> 
  ';
    $No = 1;
    while ($row = mysqli_fetch_array($result)) {
      $output1 .= '
        <tr style="text-align:center;vertical-align:middle">
          <td>' . $No++ . '</td>
          <td>' . $row['tanggal'] . '</td>
          <td>' . $row['uraian'] . '</td>
          <td>' . $row['banyak_masuk'] . '</td>
          <td></td>
          <td></td>
          <td>' . $row['model'] . '</td>
          <td>' . $row['nomor_seri'] . '</td>
          <td>' . $row['satuan'] . '</td>
          <td>' . $row['nomor_bukti'] . '</td>
          <td></td>
          <td>' . $row['keterangan'] . '</td>
        </tr>
   ';
    }
    $output1 .= '</table>';

    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=laporan-NA.xls');
    echo $output1;
  } else {
    header('location:../report/laporan-model-NA.php');
  }
  if (mysqli_num_rows($result2) > 0) {
    $output2 .= '
    <h1 style="margin:1rem 0;text-align:center;">Laporan Keluar Model NA</h1>
    <table class="table table-bordered" border="1"> 
      <thead class="table-dark">
        <tr>
          <th rowspan="2">No.</th>
          <th rowspan="2">Tanggal</th>
          <th rowspan="2">Uraian</th>
          <th colspan="3">Banyaknya</th>
          <th rowspan="2">Model</th>
          <th rowspan="2">Nomor Seri</th>
          <th rowspan="2">Satuan</th>
          <th colspan="2">Nomor Bukti</th>
          <th rowspan="2">Keterangan</th>
        </tr>
        <tr>
          <th>Masuk</th>
          <th>Keluar</th>
          <th>Sisa</th>
          <th>Penerimaan</th>
          <th>Pengeluaran</th>
        </tr>
      </thead> 
  ';
    $No = 1;
    while ($row = mysqli_fetch_array($result2)) {
      $output2 .= '
        <tr style="text-align:center;vertical-align:middle">
          <td>' . $No++ . '</td>
          <td>' . $row['tanggal'] . '</td>
          <td>' . $row['uraian'] . '</td>
          <td></td>
          <td>' . $row['banyak_keluar'] . '</td>
          <td></td>
          <td>' . $row['model'] . '</td>
          <td>' . $row['nomor_seri'] . '</td>
          <td>' . $row['satuan'] . '</td>
          <td></td>
          <td>' . $row['nomor_bukti'] . '</td>
          <td>' . $row['keterangan'] . '</td>
        </tr>
   ';
    }
    $output2 .= '</table>';

    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=laporan-NA.xls');
    echo $output2;
  }
}
