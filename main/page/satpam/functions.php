<?php

include '../includes/koneksi.php';

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

function hapusSatpam($id) {
    global $koneksi;
     
    mysqli_query($koneksi,"DELETE FROM users WHERE id = $id");

    return mysqli_affected_rows($koneksi);

}