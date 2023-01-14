<?php
include "koneksi.php";

$riri=mysqli_query($koneksi,"select * from nilai where id='$_GET[id]'");
$data=mysqli_fetch_array($riri);


?>
<br>
</br>
<link rel="stylesheet" type="text/css" href="css/tambahdata.css">

<body>
    <form class="box" action="" method="post" autocomplete="off">
        <h1>UPDATE DATA</h1>
        <div class="kotak">

        <label for="id">id :</label>
            <input type="number" name="id"class="tambah" id="id" value="<?php echo $data['id']; ?>">
        
            <label for="nisn">nisn :</label>
            <input type="text" name="nisn" class="tambah" id="nisn" value="<?php echo $data['nisn']; ?>">

            <label for="mapel">mapel :</label>
            <input type="text" name="mapel" class="tambah" id="mapel" value="<?php echo $data['mapel']; ?>">

            <label for="niali1">nilai 1:</label>
            <input type="numer" name="nilai1" class="tambah" id="nilai1" value="<?php echo $data['nilai1']; ?>">
         
            <label for="niali2">nilai 2:</label>
            <input type="numer" name="nilai2" class="tambah" id="nilai2" value="<?php echo $data['nilai2']; ?>">

            <label for="niali3">nilai 3:</label>
            <input type="numer" name="nilai3" class="tambah" id="nilai3" value="<?php echo $data['nilai3']; ?>">

            <input type="submit" name="proses" class="tombol" value="submit">

    </form>
</body>
<br></br>
<a type="button" href="datanilai.php">Lihat Semua Data</a>
<br>
</br>
<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "update nilai set
    id = '$_POST[id]',
    nisn = '$_POST[nisn]',
    mapel = '$_POST[mapel]',
    nilai1 = '$_POST[nilai1]',
    nilai2 = '$_POST[nilai2]',
    nilai3 = '$_POST[nilai3]'
    where id = '$_GET[id]'");

    echo "Data telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='datanilai.php'>";
}

?> 
