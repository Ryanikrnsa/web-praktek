<?php
include "koneksi.php";

$riri=mysqli_query($koneksi,"select * from siswa where nisn='$_GET[nisn]'");
$data=mysqli_fetch_array($riri);


?>
<br>
</br>
<link rel="stylesheet" type="text/css" href="css/tambahdata.css">

<body>
    <form class="box" action="" method="post" autocomplete="off">
        <h1>UPDATE DATA</h1>
        <div class="kotak">

        <label for="nisn">nisn :</label>
            <input type="number" name="nisn"class="tambah" id="nisn" value="<?php echo $data['nisn']; ?>">
        
            <label for="nama">nama :</label>
            <input type="text" name="nama" class="tambah" id="nama" value="<?php echo $data['nama']; ?>">

            <label for="kelas">kelas :</label>
            <input type="text" name="kelas" class="tambah" id="kelas" value="<?php echo $data['kelas']; ?>">

            <label for="tanggallahir">tanggal lahir :</label>
            <input type="date" name="tanggallahir" class="tambah" id="tanggallahir" value="<?php echo $data['tanggallahir']; ?>">
      
            <input type="submit" name="proses" class="tombol" value="submit">

    </form>
</body>
<br></br>
<a type="button" href="datasiswa.php">Lihat Semua Data</a>
<br>
</br>
<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "update siswa set
    nisn = '$_POST[nisn]',
    nama = '$_POST[nama]',
    kelas = '$_POST[kelas]',
    tanggallahir = '$_POST[tanggallahir]'
    where nisn = '$_GET[nisn]'");

    echo "Data telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='datasiswa.php'>";
}

?> 
