<?php
include '../../includes/koneksi.php';

class vehicle{

    public $mysqli;

    function query($query) {
        global $koneksi;
        //lemari
        $result = mysqli_query($koneksi , $query);
        //data kosong untuk wadah /kotak
        $rows= [];
    
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        //kembalikan kotaknya
        return $rows;
    
    }

    //query delete
    function hapusVehicle($id) {
        global $koneksi;
        
        mysqli_query($koneksi,"DELETE FROM vechiles WHERE id = $id");

        return mysqli_affected_rows($koneksi);

    }
    
    


}