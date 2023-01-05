<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root {
        --blue: #3498db;
        --dark-blue: #2980b9;
        --red: #e74c3c;
        --dark-red: #c0392b;
        --black: #333;
        --white: #fff;
        --light-bg: #eee;
        --box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
    }

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
    }

    /* 
*::-webkit-scrollbar{
   width: 10px;
} */

    *::-webkit-scrollbar-track {
        background-color: transparent;
    }

    *::-webkit-scrollbar-thumb {
        background-color: var(--blue);
    }

    .btn,
    .back-btn {
        width: 100%;
        border-radius: 5px;
        padding: 10px 30px;
        color: var(--white);
        display: block;
        text-align: center;
        cursor: pointer;
        font-size: 20px;
        margin-top: 10px;
    }

    .btn {
        background-color: var(--blue);
    }

    .btn:hover {
        background-color: var(--dark-blue);
    }

    .back-btn {
        background-color: var(--red);
    }

    .back-btn:hover {
        background-color: var(--dark-red);
    }

    /* .message{
   margin:10px 0;
   width: 100%;
   border-radius: 5px;
   padding:10px;
   text-align: center;
   background-color: var(--red);
   color:var(--white);
   font-size: 20px;
} */

    .form-container {
        min-height: 100vh;
        background-color: var(--light-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .form-container form {
        padding: 20px;
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        text-align: center;
        width: 500px;
        border-radius: 5px;
    }

    .form-container form h3 {
        margin-bottom: 10px;
        font-size: 30px;
        color: var(--black);
        text-transform: uppercase;
    }

    .form-container form .box {
        width: 100%;
        border-radius: 5px;
        padding: 12px 14px;
        font-size: 18px;
        color: var(--black);
        margin: 10px 0;
        background-color: var(--light-bg);
    }

    .form-container form p {
        margin-top: 15px;
        font-size: 20px;
        color: var(--black);
    }

    .form-container form p a {
        color: var(--red);
    }

    .form-container form p a:hover {
        text-decoration: underline;
    }

    .container {
        min-height: 100vh;
        /* background-color: var(--light-bg); */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .container .profile {
        padding: 20px;
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        text-align: center;
        width: 400px;
        border-radius: 5px;
    }

    .container .profile img {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 5px;
    }

    .container .profile h3 {
        margin: 5px 0;
        font-size: 20px;
        color: var(--black);
    }

    .container .profile p {
        margin-top: 20px;
        color: var(--black);
        font-size: 20px;
    }

    .container .profile p a {
        color: var(--red);
    }

    .container .profile p a:hover {
        text-decoration: underline;
    }

    .update-profile {
        min-height: 80vh;
        background-color: var(--light-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2px;
    }

    .update-profile form {
        padding: 20px;
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        text-align: center;
        width: 99%;
        text-align: center;
        border-radius: 5px;
    }

    .update-profile form img {
        height: 200px;
        width: 200p;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 5px;
    }

    .update-profile form .flex {
        display: flex;
        justify-content: space-between;
        /* margin-bottom: 20px; */
        gap: 15px;
    }

    .update-profile form .flex .inputBox {
        width: 49%;
    }

    .update-profile form .flex .inputBox span {
        text-align: left;
        display: block;
        margin-top: 15px;
        font-size: 17px;
        color: var(--black);
    }

    .update-profile form .flex .inputBox .box {
        width: 100%;
        border-radius: 5px;
        background-color: var(--light-bg);
        padding: 12px 14px;
        font-size: 17px;
        color: var(--black);
        margin-top: 10px;
    }

    @media (max-width:650px) {
        .update-profile form .flex {
            flex-wrap: wrap;
            gap: 0;
        }

        .update-profile form .flex .inputBox {
            width: 100%;
        }
    }
</style>
<main>
    <div class="head-title">
        <div class="left">
            <h1><?php include 'includes/greetings.php' ?>, Administrator</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Others</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a href="#">My Profile</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Setting Profile</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="update-profile">
        <?php
        include 'profile.php';
        include '../../includes/koneksi.php';
        // $data = query("SELECT * FROM vechiles");
        $id = $_GET["id"];
        $data = new profile();
        //   $result= $data->query("SELECT * FROM users WHERE id=$id")[0];
        $result = $data->query("SELECT * FROM employees WHERE role='TEKNISI' AND id=$id")[0];
        // var_dump($result);

        ?>
        <form action="" method="post" id="formEdit">
            <!-- <img src="https://berserk.my.id/storage/assets/karyawan/cxQIvXXsD9ZWKQSGd6XK8i8bjEm5s4pVlRT4cbn8.png" alt=""> -->
            <?php
            if ($result['avatar'] == '') {
                echo '<img src="assets/images/default-avatar.png">';
            } else {
                // echo '<img src="' . $result['image'] . '">';
                echo '<img src="https://berserk.my.id/storage/assets/karyawan/cxQIvXXsD9ZWKQSGd6XK8i8bjEm5s4pVlRT4cbn8.png">';
            }
            ?>
            <div class="flex">
                <div class="inputBox">
                    <input type="hidden" name="id" id="id" value="<?= $result["id"] ?>">
                    <span>Nama Lengkap :</span>
                    <input type="text" name="nama" id="nama" value="<?= $result["nama"] ?>" class="box">
                    <span>Email :</span>
                    <input type="email" name="email" id="email" value="<?= $result["email"] ?>" class="box">
                    <span>Alamat :</span>
                    <input type="text" name="alamat" id="alamat" value="<?= $result["alamat"] ?>" class="box">
                    <span>Deskripsi :</span>
                    <input type="text" name="alamat" id="alamat" value="<?= $result["deskripsi"] ?>" class="box">

                </div>
                <div class="inputBox">
                    <span>Update your pic :</span>
                    <input type="file" name="avatar" accept="image/jpg, image/jpeg, image/png" class="box">

                    <!-- <input type="password" name="update_pass" disabled value="01211" class="box"> -->
                    <span>No telephone :</span>
                    <input type="text" name="no_hp" accept="" value="<?= $result["no_telepon"] ?>" class="box">
                    <!-- <span>Role :</span>
             -->
                    <span>New password :</span>
                    <input type="password" name="password" class="box">

                    <span>Confirm New password :</span>
                    <input type="password" name="Cpassword" class="box">
                </div>
            </div>
            <button type="submit" name="Update" class="btn" id="btn-update" value="Update">Update Profile</button>
            <a href="?page=myProfile" class="back-btn">Kembali</a>
        </form>


    </div>


</main>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Dapatkan element form
        var form = $("#formEdit");

        // Submit form
        form.submit(function(event) {
            // Hindari submit form secara default
            event.preventDefault();

            // Dapatkan nama satpam yang diinputkan
            var nama = $("#nama").val();

            // Tampilkan konfirmasi alert
            Swal.fire({
                title: "Update Profile",
                text: "Apakah Anda yakin ingin mengupdate profile dengan nama " + nama + "?",
                type: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak"
            }).then(function(result) {
                // Jika user mengklik tombol "Ya", kirim data form ke file PHP
                if (result.value) {
                    // Dapatkan data form
                    var formData = new FormData(form[0]);

                    // Kirim data form ke file PHP
                    sendData(formData);
                }
            });
        });

        function sendData(formData) {
            // Membuat object AJAX
            $.ajax({
                url: "?page=myProfile&aksi=prosesEdit", // URL file PHP yang akan menerima dan mengolah data form
                type: "POST", // Metode pengiriman data
                data: formData, // Data yang akan dikirim ke file PHP
                contentType: false, // Tipe konten dari data yang dikirim
                cache: false, // Menonaktifkan cache untuk data yang dikirim
                processData: false, // Menonaktifkan proses pengolahan data
                success: function(data) { // Fungsi yang akan dijalankan jika pengiriman data berhasil
                    // Tampilkan alert SweetAlert berdasarkan data yang diterima dari file PHP
                    if (data == "sukses") {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Data berhasil di Update.",
                            icon: "success",
                            confirmButtonText: "OK"
                        }).then(function() {
                            window.location = "?page=myProfile"; // Redirect ke halaman settings
                        });
                    } else {
                        Swal.fire({
                            title: "Gagal!",
                            text: "Gagal mengupdate Data. Silakan coba lagi.",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    }
                }
            });
        }
    });
</script>