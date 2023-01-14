<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nilai Siswa</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<ul>
        <li><a href="index.php">HOME</a></li>
        <li><a  href="datasiswa.php">DATA SISWA</a></li>
        <li><a href="dataguru.php">DATA GURU</a></li>
        <li><a class="active"href="datanilai.php">NILAI SISWA</a></li>
        <li><a href="galery.php">GALERY</a></li>
        <li style="float:right"><a href="logout.php">LOG OUT</a></li>
    </ul>
    <br></br>
<table>
    <h1 align="center">NILAI SISWA</h1>
    <tr>
      <th>No</th>
        <th>Id</th>
        <th>Nisn</th>
        <th>Mapel</th>
        <th>Nilai1</th>
        <th>Nilai2</th>
        <th>Nilai3</th>
        <th>Rata Rata</th>
        <th>Predikat</th>
        <th>Aksi</th>
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
    $a = $tampil['nilai1'];
    $b = $tampil['nilai2'];
    $c = $tampil['nilai3'];
    $avg = ($a + $b + $c)/3;

    if ($avg>90){
        $grade = 'Lulus Predikat A';
    }
    elseif ($avg>=70){
        $grade = 'Lulus Predikat B';
    }
    elseif ($avg<70){
        $grade = 'Tidak Lulus Predikat C';
    }
        echo "
    <tr>
        <td>$no</td>
        <td>$tampil[id]</td>
        <td>$tampil[nisn]</td>
        <td>$tampil[mapel]</td>
        <td>$tampil[nilai1]</td>
        <td>$tampil[nilai2]</td>
        <td>$tampil[nilai3]</td>
        <td>$avg</td>
        <td>$grade</td>
        <td><a href='?id=$tampil[id]'> delete </a></td>
        <td><a href='edit3.php?id=$tampil[id]'> update </a></td>
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