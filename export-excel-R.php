<?php
require 'backend/function.php';

$output1 = '';
$output2 = '';
$output3 = '';
if (isset($_POST['export_excel'])) {
  $tahun = $_POST['tahun'];


  $sql = "SELECT * FROM tbl_masuk WHERE model = 'R' AND YEAR(tanggal) = '$tahun'";
  $sql2 = "SELECT * FROM tbl_keluar WHERE model = 'R' AND YEAR(tanggal) = '$tahun'";
  $sql3 = "SELECT * FROM tbl_lainnya WHERE model = 'R' AND YEAR(tanggal) = '$tahun'";

  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql2);
  $result3 = mysqli_query($conn, $sql3);
?>
  <h1 style="text-align:center;vertical-align:middle;text-decoration:underline;">REKAPITULASI DATA PENDISTRIBUSIAN BUKU NIKAH MODEL R TAHUN <?= $tahun; ?></h1>
<?php

  if (mysqli_num_rows($result) > 0) {
    $output1 .= '
    
    <h2 style="margin:1rem 0;text-align:center;">Laporan Masuk Model R</h2>
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
    $total = 0;
    while ($row = mysqli_fetch_array($result)) {
      $total += $row['banyak_masuk'];
      $output1 .= '
      <tbody>
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
      </tbody>
   ';
    }

    $output1 .= '
    <tfoot>
        <tr>
          <th colspan="3">Jumlah Total Masuk</th>
          <th>' . $total . '</th>
          <th colspan="8"></th>
        </tr>
      <tfoot>
    ';
    $output1 .= '</table>';

    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=laporan-R.xls');
    echo $output1;
  }
  if (mysqli_num_rows($result2) > 0) {
    $output2 .= '

    <h2 style="margin:1rem 0;text-align:center;">Laporan Keluar Model R</h2>
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
    $total2 = 0;
    while ($row = mysqli_fetch_array($result2)) {
      $total2 += $row['banyak_keluar'];
      $output2 .= '
      <tbody>
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
      </tbody>
      
   ';
    }

    $output2 .= '
    <tfoot>
        <tr>
          <th colspan="4">Jumlah Total Keluar</th>
          <th>' . $total2 . '</th>
          <th colspan="7"></th>
        </tr>
      <tfoot>
    ';
    $output2 .= '</table>';

    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=laporan-R.xls');
    echo $output2;
  }
  if (mysqli_num_rows($result3) > 0) {
    $output3 .= '

    <h2 style="margin:1rem 0;text-align:center;">Laporan Kerusakan Barang Model R</h2>
    <table class="table table-bordered" border="1"> 
      <thead class="table-dark">
        <tr>
          <th rowspan="2">No.</th>
          <th rowspan="2">Tanggal</th>
          <th rowspan="2">Uraian</th>
          <th colspan="3" rowspan="2">Banyaknya</th>
          <th rowspan="2">Model</th>
          <th rowspan="2">Nomor Seri</th>
          <th rowspan="2">Satuan</th>
          <th colspan="2">Nomor Bukti</th>
          <th rowspan="2">Keterangan</th>
        </tr>
        <tr>
          <th>Penerimaan</th>
          <th>Pengeluaran</th>
        </tr>
      </thead> 
  ';
    $No = 1;
    $total3 = 0;
    while ($row = mysqli_fetch_array($result3)) {
      $total3 += $row['banyak_barang'];
      $output3 .= '
      <tbody>
        <tr style="text-align:center;vertical-align:middle">
          <td>' . $No++ . '</td>
          <td>' . $row['tanggal'] . '</td>
          <td>' . $row['uraian'] . '</td>
          <td colspan="3">' . $row['banyak_barang'] . '</td>
          <td>' . $row['model'] . '</td>
          <td>' . $row['nomor_seri'] . '</td>
          <td>' . $row['satuan'] . '</td>
          <td></td>
          <td>' . $row['nomor_bukti'] . '</td>
          <td>' . $row['keterangan'] . '</td>
        </tr>
      </tbody>
      
   ';
    }

    $output3 .= '
    <tfoot>
        <tr>
          <th colspan="3">Jumlah Total Kerusakan Barang</th>
          <th colspan="3">' . $total3 . '</th>
          <th colspan="6"></th>
        </tr>
      <tfoot>
    ';
    $output3 .= '</table>';

    // header('Content-Type: application/xls');
    // header('Content-Disposition: attachment; filename=laporan-R.xls');
    echo $output3;
  }
}
