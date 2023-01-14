<?php
include "koneksi.php";

$riri=mysqli_query($koneksi,"select * from guru where nip='$_GET[nip]'");
$data=mysqli_fetch_array($riri);


?>
<br>
</br>
<link rel="stylesheet" type="text/css" href="css/tambahdata.css">

<body>
    <form class="box" action="" method="post" autocomplete="off">
        <h1>UPDATE DATA</h1>
        <div class="kotak">

        <label for="nip">nip :</label>
            <input type="number" name="nip"class="tambah" id="nisp" value="<?php echo $data['nip']; ?>">
        
            <label for="nama">nama :</label>
            <input type="text" name="nama" class="tambah" id="nama" value="<?php echo $data['nama']; ?>">

            <label for="jabatan">jabatan :</label>
            <input type="text" name="jabatan" class="tambah" id="jabatan" value="<?php echo $data['jabatan']; ?>">

            <label for="kode">kode :</label>
            <input type="numer" name="kode" class="tambah" id="kode" value="<?php echo $data['kode']; ?>">
      
            <input type="submit" name="proses" class="tombol" value="submit">

    </form>
</body>
<br></br>
<a type="button" href="dataguru.php">Lihat Semua Data</a>
<br>
</br>
<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "update guru set
    nip = '$_POST[nip]',
    nama = '$_POST[nama]',
    jabatan = '$_POST[jabatan]',
    kode = '$_POST[kode]'
    where nip = '$_GET[nip]'");

    echo "Data telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='dataguru.php'>";
}

?> 
