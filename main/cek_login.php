<?php 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'koneksi.php';
  
  $email = mysqli_real_escape_string($koneksi ,$_POST['email']);
  $password = mysqli_real_escape_string($koneksi ,$_POST['password']);
//   $encpass = password_hash($password ,PASSWORD_BCRYPT);
//   $verpass = password_verify($password , $encpass);
// $passverify = ($password, hash)
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from employees where email='$email'");
// menghitung jumlah data yang ditemukan

$cek = mysqli_num_rows($login);
// list($email, $password, $role) = mysqli_fetch_array($sql);
// $encpass =$cek['']
// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	$encpass = $data['password'];
	// cek jika user login sebagai teknisi
	if(password_verify($password, $encpass) && $data['role']=="TEKNISI"){
		
		// buat session login dan username
		// session_start();
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "TEKNISI";
		// $_SESSION['password']=$data['password'];
		header("location:login.php?pesan=berhasil");
		die();
		
	}else{
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
	}
?>