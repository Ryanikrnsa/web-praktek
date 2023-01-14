<?php
require 'function.php';

if( isset($_POST["register"])){

    if(registrasi($_POST) > 0 ) {
        echo "<script>
        alert('user baru berhasil ditambahkan!');
        </script>";
    } else {
    echo mysqli_error($koneksi);
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Registrasi</title>
</head>
<body>


<link rel="stylesheet" type="text/css" href="css/login.css">

<form class="box" action="" method="post" autocomplete="off">
<h1> Halaman Registrasi</h1>
<div class="kotak_login">
<ul>
    <li>
        <label for="username">Username :</label>
        <input type="text" name="username" class="form_login" id="username">
</li>
<li>
        <label for="password">Password :</label>
        <input type="password" name="password" class="form_login" id="password">
</li>
<li>
        <label for="password2">Konfirmasi password :</label>
        <input type="password" name="password2" class="form_login" id="password2">
</li>
<li>
        <button type="submit" name="register">Register</button>
</li>
</ul>
</form>