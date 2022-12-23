<?php
include '../../includes/koneksi.php';

class satpam{

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
    function hapusSatpam($id) {
        global $koneksi;
         
        mysqli_query($koneksi,"DELETE FROM employees WHERE id = $id");
    
        return mysqli_affected_rows($koneksi);
    
    }

    function ubah($data) {
        global $koneksi;

        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $role = htmlspecialchars($data["role"]);
        $no_telepon = htmlspecialchars($data["no_telepone"]);
        $password = htmlspecialchars($data["password"]);

        $query = "UPDATE employees SET
                nama='$nama',
                email = '$email',
                alamat = '$alamat',
                role = '$role',
                no_telepon = '$no_telepon',
                password = '$password'
                WHERE id = $id;
        
        ";

        mysqli_query($koneksi , $query);

        return mysqli_affected_rows($koneksi);
    }
    

}