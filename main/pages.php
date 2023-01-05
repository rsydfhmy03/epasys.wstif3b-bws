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
    } elseif ($aksi == "detail") {
        include "page/vehicle/vehicleDetail.php";
    } elseif ($aksi == "delete") {
        include "page/vehicle/delete.php";
    }
} elseif ($page == "users") {
    if ($aksi == "") {
        include "page/users/usersData.php";
    } elseif ($aksi == "detail") {
        include "page/users/usersDetail.php";
    } elseif ($aksi == "delete") {
        include "page/users/delete.php";
    }
} elseif ($page == "satpam") {
    if ($aksi == "") {
        include "page/satpam/satpamData.php";
    } elseif ($aksi == "tambah") {
        include "page/satpam/satpamAdd.php";
    } elseif ($aksi == "detail") {
        include "page/satpam/satpamDetail.php";
    } elseif ($aksi == "update") {
        include "page/satpam/satpamUpdate.php";
    }
} elseif ($page == "vehicleIn") {
    include "page/vehicleIn/vehicleIn.php";
} elseif ($page == "vehicleOut") {
    include "page/vehicleOut/vehicleOut.php";
} elseif ($page == "myProfile") {
    if ($aksi == "") {
        include "page/settings_profile/setprofile.php";
    } elseif ($aksi == "update") {
        include "page/settings_profile/edit.php";
    }
} elseif ($page == "laporan") {
    include "page/laporan/reportAct.php";
} elseif ($page == "") {
    include "home.php";
}
