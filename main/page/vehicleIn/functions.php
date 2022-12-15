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