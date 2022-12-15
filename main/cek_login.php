<?php 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'includes/koneksi.php';
  
  $email = mysqli_real_escape_string($koneksi ,$_POST['email']);
  $password = mysqli_real_escape_string($koneksi ,$_POST['password']);

$login = mysqli_query($koneksi,"select * from employees where email='$email'");
// menghitung jumlah data yang ditemukan

$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	$encpass = $data['password'];
	// cek jika user login sebagai teknisi
	if(password_verify($password, $encpass) && $data['role']=="TEKNISI"){
		
		
		// session_start();
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "TEKNISI";
		// $_SESSION['password']=$data['password'];
		header("location:login.php?pesan=berhasil");
		die();
		
	}else{
		
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
	}
?>