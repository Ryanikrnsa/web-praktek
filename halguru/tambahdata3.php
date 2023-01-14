<link rel="stylesheet" type="text/css" href="css/tambahdata.css">
 
<body>
    <form class="box" action="" method="post" autocomplete="off">
        <h1>TAMBAH DATA</h1>
        <div class="kotak">

        <label for="id">id :</label>
            <input type="number" name="id" class="tambah" id="id">
        
            <label for="nisn">nisn :</label>
            <input type="text" name="nisn" class="tambah" id="nisn">

            <label for="mapel">mapel :</label>
            <input type="text" name="mapel" class="tambah" id="mapel">

            <label for="nilai1">nilai1 :</label>
            <input type="number" name="nilai1" class="tambah" id="nilai1">

            <label for="nilai2">nilai2 :</label>
            <input type="number" name="nilai2" class="tambah" id="nilai2">

            <label for="nilai3">nilai3 :</label>
            <input type="number" name="nilai3" class="tambah" id="nilai3">
      
            <input type="submit" name="proses" class="tombol" value="submit">

    </form>
</body>
<br></br>
<a type="button" href="datanilai.php">Lihat Semua Data</a>

<?php

include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into nilai set
    id = '$_POST[id]',
    nisn = '$_POST[nisn]',
    mapel = '$_POST[mapel]',
    nilai1 = '$_POST[nilai1]',
    nilai2 = '$_POST[nilai2]',
    nilai3 = '$_POST[nilai3]'");

    echo "Data baru telah tersimpan";
}

?> 
