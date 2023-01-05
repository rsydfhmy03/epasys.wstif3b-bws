<?php

include '../../includes/koneksi.php';

class profile
{

    public $mysqli;

    function query($query)
    {
        global $koneksi;
        //lemari
        $result = mysqli_query($koneksi, $query);
        //data kosong untuk wadah /kotak
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        //kembalikan kotaknya
        return $rows;
    }

    function update($data)
    {
        global $koneksi;
        $id = $data['id'];
        $email = stripslashes($data["email"]);
        $nama = htmlspecialchars($data["nama"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $no_telepon = htmlspecialchars($data["no_telepon"]);
        $gambar = htmlspecialchars($data["gambar"]);
        // $password = mysqli_real_escape_string($data["password"]);
        // $password = mysqli_real_escape_string($data["password"]);
        $password = mysqli_real_escape_string($koneksi, $data["password"]);
        $password2 = mysqli_real_escape_string($koneksi, $data["Cpassword"]);

        if ($password !== $password2) {
            echo "gagal";
            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_BCRYPT);
        //update data

        $query = "UPDATE employees SET 
                nama = '$nama',
                email= '$email',
                deskripsi='$deskripsi',
                alamat = '$alamat',
                no_telepon= '$no_telepon',
                gambar='$gambar'
                WHERE id = $id";
        mysqli_query($koneksi, $query);

        return  mysqli_affected_rows($koneksi);
    }
}
