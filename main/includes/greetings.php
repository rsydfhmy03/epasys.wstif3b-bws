<?php 
    //buat zona waktu 
    date_default_timezone_set('Asia/Jakarta');
    //deklarasi variable 
    $welcome_string="Welcome"; 
    $numeric_date=date("G"); 
    
    //Start conditionals based on military time 
    if($numeric_date>=0&&$numeric_date<=11) 
    $welcome_string="Selamat Pagi "; 
    else if($numeric_date>=12&&$numeric_date<=14) 
    $welcome_string="Selamat Siang "; 
    else if($numeric_date>=15&&$numeric_date<=17) 
    $welcome_string="Selamat Sore "; 
    else if($numeric_date>=18&&$numeric_date<=23) 
    $welcome_string="Selamat Malam "; 

    
     echo $welcome_string ; 
 
?>