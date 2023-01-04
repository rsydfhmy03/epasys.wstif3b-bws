<?php 
$koneksi = mysqli_connect("localhost","root","","u1717646_api_epasys");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
