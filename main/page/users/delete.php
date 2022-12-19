<?php
include 'users.php';
$delete = new users();
$id = $_GET["id"];

if($delete->hapusUsers($id) > 0) {
  
    // header('location : vehicleData.php?m=1');
    $_SESSION["sukses"] = 'Data Berhasil Dihapus';

    header('location:../../index.php?page=users');
    // echo "<script> 
    // alert('data berhasil dihapus !');
    // document.location.href = 'vehicleData.php';
    // </script>";
    
   
    
    // //redirect ke halaman index.php
    // header('Location: ?page=vehicle'); 
}
// $mysqli->query("DELETE FROM vehicle WHERE id ='$_GET[id]'");
// header('location:?page=vehicle');

?>