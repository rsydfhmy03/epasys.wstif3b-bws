<?php
include '../../includes/koneksi.php';

class users{

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
    // function hapusUsers($id) {
    //     global $koneksi;
        
    //     mysqli_query($koneksi,"DELETE FROM users WHERE id = $id");

    //     return mysqli_affected_rows($koneksi);

    // }
    function hapusUsers($id) {
        global $koneksi;
         
        mysqli_query($koneksi,"DELETE FROM users WHERE id = $id");
    
        return mysqli_affected_rows($koneksi);
    
    }

    

}