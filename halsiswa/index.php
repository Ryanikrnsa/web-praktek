<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
    <title>Home</title>
</head>
<style>
      table {
    border-collapse: collapse;
    width: 100%;
  }
  
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  
  tr:hover {
    background-color: #5F9DF7;
  }

  .button {
    background-color: #5F9DF7; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
  }
  
  .button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }

  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #FFF;
}

li {
  float: left;
}

li a {
  display: block;
  color: #333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #5F9DF7;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #FFF;
}

li {
  float: left;
}

li a {
  display: block;
  color: #333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #5F9DF7;
}

.active {
  background-color: #5F9DF7;
}

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

    </style>
<body>
    <ul>
        <li><a class="active" href="index.php">HOME</a></li>
        <li><a href="#nilai">NILAI SISWA</a></li>
        <li><a href="galery.php">GALERY</a></li>
        <li style="float:right"><a href="login.php">LOG IN</a></li>
    </ul>
</body>
<br></br>
<!-- banner -->
<section class="banner">
    <h1>SELAMAT DATANG</h1>
 </section>

<section id="nilai">
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
</section>
<section id="galery">
<h1 align="center">GALERY</h1>

<div class="responsive">
<div class="gallery">
<a target="_blank" href="studio3.jpg">
  <img src="studio3.jpg" alt="Cinque Terre" width="600" height="400">
</a>
<div class="desc">Foto Studio Bersama Wali kelas X RPL</div>
</div>
</div>
<div class="responsive">
<div class="gallery">
<a target="_blank" href="rapot2.jpg">
  <img src="rapot2.jpg" alt="Cinque Terre" width="600" height="400">
</a>
<div class="desc">Pembagian Rapot Semester Genap X RPL</div>
</div>
</div>
<div class="responsive">
<div class="gallery">
<a target="_blank" href="foto5.jpg">
  <img src="foto5.jpg" alt="Cinque Terre" width="600" height="400">
</a>
<div class="desc">Pembagian Rapot Semester Ganjil X RPL</div>
</div>
</div>
<div class="responsive">
<div class="gallery">
<a target="_blank" href="studio5.jpg">
  <img src="studio5.jpg" alt="Cinque Terre" width="600" height="400">
</a>
<div class="desc">Foto Studio Bersama Wali kelas X RPL</div>
</div>
</div>
</section>
</html>