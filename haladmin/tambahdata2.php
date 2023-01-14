<link rel="stylesheet" type="text/css" href="css/tambahdata.css">
 
<body>
    <form class="box" action="" method="post" autocomplete="off">
        <h1>TAMBAH DATA</h1>
        <div class="kotak">

        <label for="nip">nip :</label>
            <input type="number" name="nip" class="tambah" id="nip">
        
            <label for="nama">nama :</label>
            <input type="text" name="nama" class="tambah" id="nama">

            <label for="jabatan">jabatan :</label>
            <input type="text" name="jabatan" class="tambah" id="jabatan">

            <label for="kode">kode :</label>
            <input type="number" name="kode" class="tambah" id="kode">
      
            <input type="submit" name="proses" class="tombol" value="submit">

    </form>
</body>
<br></br>
<a type="button" href="index.php#guru">Lihat Semua Data</a>

<?php

include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into guru set
    nip = '$_POST[nip]',
    nama = '$_POST[nama]',
    jabatan = '$_POST[jabatan]',
    kode = '$_POST[kode]'");

    echo "Data baru telah tersimpan";
}

?> 
