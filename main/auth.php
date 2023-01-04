<?php
include 'includes/koneksi.php';
class auth
{


    function cekLogin($email, $password)
    {
        // $koneksi = new db_class();
        global $koneksi;
        $login = null;
        // $email = $_POST['email'];
        // $password = $_POST['password'];
        // $query = "SELECT * FROM employees where email='$email'";
        // $login = mysqli_query("select * from employees where email='$email'");
        // $login = $this->koneksi->$query($query);
        $login = mysqli_query($koneksi, "select * from employees where email='$email'");
        // menghitung jumlah data yang ditemukan

        $cek = mysqli_num_rows($login);

        if ($cek > 0) {
            $data = mysqli_fetch_assoc($login);
            $encpass = $data['password'];
            // cek jika user login sebagai teknisi
            if (password_verify($password, $encpass) && $data['role'] == "TEKNISI") {
                // session_start();
                $_SESSION['email'] = $email;
                $_SESSION['role'] = "TEKNISI";
                $_SESSION['id'] = $data['id'];
                // $_SESSION['password']=$data['password'];
                // header("location:index.php");
                // die();
                // return true;
                return $login;
            } else {
                return false;
            }
        } else {
            header("location:login.php?pesan=gagal");
            return false;
        }
    }

    function get_session()
    {

        // $_SESSION['role'] = "TEKNISI";
        // $login = $GLOBALS['login'];
        // global $cek;
        // $email = $cek['email'];
        // $role = $cek['role'];
        // $id = $cek['id'];

        // $_SESSION['email'] = $email;
        // $_SESSION['role'] = $role;
        // $_SESSION['id'] = $id;
        // $_SESSION['login'] = $_POST['Login'];
        // var_dump($_POST);
        $_SESSION['role'] = "TEKNISI";
        // $_SESSION['id'] = $login['id'];
        // return true;
    }
}
$auth = new auth();
// if ($_SERVER["REQUEST_METHOD"] == "POST")
if (isset($_POST["Login"])) {
    $login = $auth->cekLogin($_POST['email'], $_POST['password']);
    if ($login) {
        // Login Success
        // $_SESSION['id'] = $data['id'];
        // // $_SESSION['email'] = $email;
        // $_SESSION['email'] = $_POST['email'];
        // $_SESSION['role'] = "TEKNISI";
        $auth->get_session();
        header("location:login.php?pesan=berhasil");
        die();
    } else {
        // Login Failed
        header("location:login.php?pesan=gagal");
    }
}
