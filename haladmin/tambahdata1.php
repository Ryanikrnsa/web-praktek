<link rel="stylesheet" type="text/css" href="css/tambahdata.css">
 
<body>
    <form class="box" action="" method="post" autocomplete="off">
        <h1>TAMBAH DATA</h1>
        <div class="kotak">

        <label for="nisn">nisn :</label>
            <input type="number" name="nisn"class="tambah" id="nisn" placeholder="nisn">
        
            <label for="nama">nama :</label>
            <input type="text" name="nama" class="tambah" id="nama" placeholder="nama">

            <label for="kelas">kelas :</label>
            <input type="text" name="kelas" class="tambah" id="kelas" placeholder="kelas">

            <label for="tanggallahir">tanggallahir :</label>
            <input type="date" name="tanggallahir" class="tambah" id="tanggallahir" placeholder="tanggallahir">
      
            <input type="submit" name="proses" class="tombol" value="submit">

    </form>
</body>
<br></br>
<a type="button" href="index.php#siswa">Lihat Semua Data</a>

<?php

include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into siswa set
    nisn = '$_POST[nisn]',
    nama = '$_POST[nama]',
    kelas = '$_POST[kelas]',
    tanggallahir = '$_POST[tanggallahir]'");

    echo "Data baru telah tersimpan";
}

?> 
