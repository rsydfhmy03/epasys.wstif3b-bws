<?php

include '../../includes/koneksi.php';
// include 'profile.php';
// $data = new profile();
if (isset($_POST["update"])) {
    // $nama = $_POST["nama"];
    // $email = $_POST["email"];
    // if ($data->update($_POST) > 0) {
    //     // Upload file avatar ke direktori "avatar"
    //     // move_uploaded_file($avatar_tmp, "images/$avatar");
    //     // Kirim response "sukses" ke file HTML
    //     echo "sukses";
    // } else {
    //     // Kirim response "gagal" ke file HTML
    //     echo "Gagal!";
    // }
    $id = $_POST['id'];
    $email = stripslashes($_POST["email"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $no_telepon = htmlspecialchars($_POST["no_telepon"]);
    $gambar = htmlspecialchars($_POST["avatar"]);
    // $password = mysqli_real_escape_string($data["password"]);
    // $password = mysqli_real_escape_string($data["password"]);
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["Cpassword"]);

    if ($password !== $password2) {
        echo "gagal";
        return false;
    }

    // enkripsi password
    $encPassword = password_hash($password, PASSWORD_BCRYPT);
    //update data

    $query = "UPDATE employees SET 
                nama = '$nama',
                email= '$email',
                deskripsi='$deskripsi',
                alamat = '$alamat',
                no_telepon= '$no_telepon',
                gambar='$gambar',
                password='$encPassword'
                WHERE id = $id";
    $hasil_query = mysqli_query($koneksi, $query);

    if ($hasil_query) {
        // Upload file avatar ke direktori "avatar"
        // move_uploaded_file($avatar_tmp, "avatar/$avatar");
        // Kirim response "sukses" ke file HTML
        echo "sukses";
    } else {
        // Kirim response "gagal" ke file HTML
        echo "gagal";
    }
}
