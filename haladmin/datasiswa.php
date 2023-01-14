<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<ul>
        <li><a href="index.php">HOME</a></li>
        <li><a class="active" href="datasiswa.php">DATA SISWA</a></li>
        <li><a href="dataguru.php">DATA GURU</a></li>
        <li><a href="datanilai.php">NILAI SISWA</a></li>
        <li><a href="galery.php">GALERY</a></li>
        <li style="float:right"><a href="logout.php">LOG OUT</a></li>
    </ul>
    <br></br>
<table>
    <h1 align="center">DATA SISWA</h1>
    <tr>
      <th>No</th>
        <th>Nisn</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Tanggal lahir</th>
        <th>Aksi</th>
    </tr>
    <a type="button" class="button" style="margin-left: 100px" href="tambahdata1.php">Tambah Data</a>
<br></br>
<br></br>
</body>
</html>

<?php

  include "koneksi.php";

  $no=1;

  $ambildata = mysqli_query($koneksi,"select * from siswa");
  while ($tampil = mysqli_fetch_array($ambildata)){
      echo "
      <tr>
          <td>$no</td>
          <td>$tampil[nisn]</td>
          <td>$tampil[nama]</td>
          <td>$tampil[kelas]</td>
          <td>$tampil[tanggallahir]</td>
          <td><a href='?nisn=$tampil[nisn]'> delete </a></td>
          <td><a href='edit1.php?nisn=$tampil[nisn]'> update </a></td>
      </tr>";

      $no++;
  }
  ?>
</table>
</body>
 </html>     

 <?php
if(isset($_GET['nisn'])){

  mysqli_query($koneksi,"delete from siswa where nisn='$_GET[nisn]'");

  echo "data telah terhapus";
  echo "<meta http-equiv=refresh content=2;URL='datasiswa.php'>";

}
?>