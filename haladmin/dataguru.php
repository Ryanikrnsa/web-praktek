<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Guru</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="datasiswa.php">DATA SISWA</a></li>
        <li><a class="active" href="dataguru.php">DATA GURU</a></li>
        <li><a href="datanilai.php">NILAI SISWA</a></li>
        <li><a href="galery.php">GALERY</a></li>
        <li style="float:right"><a href="logout.php">LOG OUT</a></li>
    </ul>
    <br></br>
<table>
    <h1 align="center">DATA GURU</h1>
    <tr>
      <th>no</th>
        <th>nip</th>
        <th>nama</th>
        <th>jabatan</th>
        <th>kode</th>
        <th>Aksi</th>
    </tr>
    <a type="button" class="button" style="margin-left: 100px" href="tambahdata2.php">Tambah Data</a>
<br></br>
<br></br>
</body>
</html>

<?php

  include "koneksi.php";

  $no=1;

  $ambildata = mysqli_query($koneksi,"select * from guru");
  while ($tampil = mysqli_fetch_array($ambildata)){
      echo "
      <tr>
          <td>$no</td>
          <td>$tampil[nip]</td>
          <td>$tampil[nama]</td>
          <td>$tampil[jabatan]</td>
          <td>$tampil[kode]</td>
          <td><a href='?nip=$tampil[nip]'> delete </a></td>
          <td><a href='edit2.php?nip=$tampil[nip]'> update </a></td>
      </tr>";

      $no++;
  }
  ?>
</table>
</body>
 </html>     

 <?php
if(isset($_GET['nip'])){

  mysqli_query($koneksi,"delete from guru where nip='$_GET[nip]'");

  echo "data telah terhapus";
  echo "<meta http-equiv=refresh content=2;URL='dataguru.php'>";

}
?>