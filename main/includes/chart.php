<?php
include "koneksi.php";
$functionName = htmlspecialchars($_GET['functionName']);
    switch ($functionName) {
        case 'getDataParkir':
            getDataParkir();
            break;
        
            // case 'getDataPenduduk':
            //     getDataPendu();
            //     break;  
            
        default:
            # code...
            break;
    }

    function getDataParkir(){
        global $koneksi;
        $data=[];
        $query = mysqli_query($koneksi, "SELECT DAYNAME(created_at) as day, COUNT(*) as jumlah FROM parkings WHERE created_at BETWEEN DATE_SUB(NOW(), INTERVAL 1 WEEK) AND NOW() GROUP BY DAYNAME(created_at);");
        
        
         while($row = mysqli_fetch_assoc($query)){
            $data[]= $row;
            }
        echo json_encode($data);
    }