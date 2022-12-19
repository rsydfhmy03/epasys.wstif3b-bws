<?php
include 'includes/koneksi.php';
class auth {


    function cekLogin($email, $password){
        // $koneksi = new db_class();
        global $koneksi;
        // $email = $_POST['email'];
        // $password = $_POST['password'];
        // $query = "SELECT * FROM employees where email='$email'";
        // $login = mysqli_query("select * from employees where email='$email'");
        // $login = $this->koneksi->$query($query);
        $login = mysqli_query($koneksi,"select * from employees where email='$email'");
        // menghitung jumlah data yang ditemukan
        
        $cek = mysqli_num_rows($login);
        
        if($cek > 0){
            $data = mysqli_fetch_assoc($login);
            $encpass = $data['password'];
            // cek jika user login sebagai teknisi
            if(password_verify($password, $encpass) && $data['role']=="TEKNISI"){
                // session_start();
                $_SESSION['email'] = $email;
                $_SESSION['role'] = "TEKNISI";
                // $_SESSION['password']=$data['password'];
                // header("location:index.php");
		        // die();
                return true;
                
            }else{
                return false;
                
            }	
        }else{
            header("location:login.php?pesan=gagal");
            return false;
 }
    }

    function get_session(){
        $_SESSION['role'] = "TEKNISI";
    }
    // public function cekLogin($email , $password){
    //     // $conn = new db_class();      
    // }
}
$auth = new auth();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $login = $auth->cekLogin($_POST['email'], $_POST['password']);
    if ($login)
    {
        // Login Success
        // $_SESSION['email'] = $email;
        $_SESSION['role'] = "TEKNISI";
        header("location:login.php?pesan=berhasil");
        die();
    }
    else
    {
        // Login Failed
        header("location:login.php?pesan=gagal");
    }
}