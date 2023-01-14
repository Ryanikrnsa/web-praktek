<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['tipe']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['tipe'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../haladmin/index.php");
 
	// cek jika user login sebagai siswa
	}else if($data['tipe']=="siswa"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['tipe'] = "siswa";
		// alihkan ke halaman dashboard siswa
		header("location:halsiswa");
 
	// cek jika user login sebagai guru
	}else if($data['tipe']=="guru"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['tipe'] = "guru";
		// alihkan ke halaman dashboard guru
		header("location:../halguru/index.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>