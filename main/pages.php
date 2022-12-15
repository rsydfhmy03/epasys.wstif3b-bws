<?php

                    // Report all errors except E_NOTICE
                    error_reporting(error_reporting() & ~E_NOTICE);
                    //error_reporting(level);
                    include "koneksi.php";
                    //include 'filename';

                        $page = isset($_GET['page']) ? $_GET['page'] : "";
                        $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";

                        if ($page == "vehicle") {
                            if ($aksi == "") {
                                include "page/vehicle/vehicleData.php";
                            }elseif ($aksi == "detail") {
                                include "page/vehicle/details.php";
                            }elseif ($aksi == "detail") {
                                include "page/vehicle/delete.php";
                            }
                        }elseif ($page == "users") {
                            if ($aksi == "") {
                                include "page/users/users.php";
                            }elseif ($aksi == "detail") {
                                include "page/anggota/details.php";
                            } 
                        }elseif ($page == "satpam") {
                            if ($aksi == "") {
                                include "page/satpam/satpam.php";
                            }elseif ($aksi == "tambah") {
                                include "page/satpam/tambah.php";
                            }
                        }elseif ($page == "vehicleIn"){
                            include "vehicleIn.php";

                        }elseif ($page == "vehicleOut"){
                            include "vehicleOut.php";

                        }elseif ($page == "myProfile"){
                            include "myProfile.php";

                        }elseif ($page == "reports"){
                            include "reports.php";
                            
                        }elseif ($page == ""){
                            include "home.php";
                        }

                   ?>