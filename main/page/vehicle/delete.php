<?php
include 'functions.php';
$id = $_GET["id"];

if(hapusVehicle($id) > 0) {
  
    // header('location : vehicleData.php?m=1');
    header("location:/vehicleData.php?pesan=deleted");
    // echo "<script> 
    // alert('data berhasil dihapus !');
    // document.location.href = 'vehicleData.php';
    // </script>";
    
}

?>