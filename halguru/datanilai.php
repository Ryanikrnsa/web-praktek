<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nilai Siswa</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<ul>
        <li><a href="index.php">HOME</a></li>
        <li><a class="active"href="datanilai.php">NILAI SISWA</a></li>
        <li><a href="galery.php">GALERY</a></li>
        <li style="float:right"><a href="logout.php">LOG OUT</a></li>
    </ul>
    <br></br>
<table>
    <h1 align="center">NILAI SISWA</h1>
    <tr>
      <th>no</th>
        <th>id</th>
        <th>nisn</th>
        <th>mapel</th>
        <th>nilai1</th>
        <th>nilai2</th>
        <th>nilai3</th>
    </tr>
    <a type="button" class="button" style="margin-left: 100px" href="tambahdata3.php">Tambah Data</a>
<br></br>
<br></br>
</body>
</html>

<?php

  include "koneksi.php";

  $no=1;

  $ambildata = mysqli_query($koneksi,"select * from nilai");
  while ($tampil = mysqli_fetch_array($ambildata)){
      echo "
      <tr>
          <td>$no</td>
          <td>$tampil[id]</td>
          <td>$tampil[nisn]</td>
          <td>$tampil[mapel]</td>
          <td>$tampil[nilai1]</td>
          <td>$tampil[nilai2]</td>
          <td>$tampil[nilai3]</td>
      </tr>";

      $no++;
  }
  ?>
</table>
</body>
 </html>   

 <?php
if(isset($_GET['id'])){

  mysqli_query($koneksi,"delete from nilai where id='$_GET[id]'");

  echo "data telah terhapus";
  echo "<meta http-equiv=refresh content=2;URL='datanilai.php'>";

}
?>