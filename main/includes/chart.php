<?php
include "koneksi.php";
$functionName = htmlspecialchars($_GET['functionName']);
    switch ($functionName) {
        case 'getDataParkir':
            getDataParkir();
            break;
        
        case 'getStatus':
            getStatus();
            break; 
            
        default:
            # code...
            break;
    }

    function getDataParkir(){
        global $koneksi;
        $data=[];
        $query = mysqli_query($koneksi, "SELECT DAYNAME(created_at) as day, COUNT(*) as jumlah 
        FROM parkings WHERE created_at BETWEEN DATE_SUB(NOW(), INTERVAL 1 WEEK) AND NOW() 
        GROUP BY DAYNAME(created_at) ORDER BY created_at ASC;");
        
        
         while($row = mysqli_fetch_assoc($query)){
            $data[]= $row;
            }
        echo json_encode($data);
    }
    function getStatus(){
        global $koneksi;
        $data=[];
        // $query = mysqli_query($koneksi, "SELECT SUM(CASE WHEN status = 'IN' THEN 1 ELSE 0 END) as masuk,
        // SUM(CASE WHEN status = 'OUT' THEN 1 ELSE 0 END) as keluar
        // FROM parkings 
        // WHERE DATE(created_at) = CURDATE()");
        $query = mysqli_query($koneksi, "SELECT SUM(CASE WHEN status = 'IN' THEN 1 ELSE 0 END) as masuk,
        SUM(CASE WHEN status = 'OUT' THEN 1 ELSE 0 END) as keluar
        FROM parkings");
        
        
         while($row = mysqli_fetch_assoc($query)){
            $data[]= $row;
            }
        echo json_encode($data);
    }