<style>
    /* body {
        margin: 0;
        padding: 0;
        height: 100vh;
        justify-content: center;
        align-items: center;
        display: flex;
        background: #eee;
    } */

    .card {
        /* font-family: "Candara", sans-serif; */
        /* margin-left: auto;
        margin-right: auto; */
        margin-top: 2%;
        margin-bottom: auto;
        width: 100%;
        /* height: 7%; */
        overflow: hidden;
        background: rgb(255, 255, 255);
        border-radius: 20px;
        /* box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); */
        display: flex;
        flex-direction: column;
    }

    .card-image img {
        width: 100%;
        height: 160px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        object-fit: cover;
    }

    .profile-image img {
        z-index: 1;
        width: 120px;
        height: 120px;
        position: relative;
        margin-top: -75px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 100px;
        border: 10px solid rgb(181, 226, 252);
        transition-duration: 0.4s;
        transition-property: transform;
    }

    .profile-image img:hover {
        transform: scale(1.1);
    }

    .card-content h3 {
        font-size: 25px;
        text-align: center;
        margin: 0;
    }

    .card-content p {
        font-size: 16px;
        text-align: justify;
        padding: 0 20px 5px 20px;
    }

    .icons {
        text-align: center;
        padding-top: 5px;
        padding-bottom: 30px;
    }

    .icons a {
        text-decoration: none;
        font-size: 20px;
        /* color: #0ABDE3; */
        padding: 0 14px;
        transition-duration: 0.4s;
        transition-property: transform;
    }

    .icons a:hover {
        /* color: #000; */
        transform: scale(1.1);
    }

    .btn {
        background-color: #0077b5;
        border-color: #0077b5;
        color: #fff;
        display: inline-block;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.5;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        border: 1px solid transparent;
        border-radius: 4px;
        padding: 8px 12px;
    }

    .btn-primary {
        background-color: #0077b5;
        border-color: #0077b5;
        color: #fff;
    }

    /* .data1 ul{
        display: flex;
    } */
</style>
<!--Profile card start-->
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
                    <a class="active" href="#">My Profile</a>
                </li>
            </ul>
        </div>

    </div>
    <?php

    include 'profile.php';

    $status = $_SESSION['role'];
    $data = new profile();
    $result = $data->query("SELECT * FROM employees WHERE role='TEKNISI' ")[0];

    // var_dump($_SESSION);

    ?>
    <div class="card">
        <div class="card-image">
            <img src="https://i.pinimg.com/originals/42/84/71/428471d4f6c147b88ee7c2cff3efc4cb.jpg" alt="">
        </div>
        <div class="profile-image">
            <!-- <img src="https://berserk.my.id/storage/assets/karyawan/cxQIvXXsD9ZWKQSGd6XK8i8bjEm5s4pVlRT4cbn8.png" alt=""> -->
            <!-- <img src="https://berserk.my.id/storage/<?= $result["avatar"] ?>" alt=""> -->
            <img src="assets/images/default_avatar.jpg" alt="">
        </div>
        <div class="card-content">
            <h3><?= $result["nama"] ?></h3>
            <div class="info">
                <h3></h3>
                <div class="card-body">
                    <p>Email: <?= $result["email"] ?></p>

                    <p>Phone: <?= $result["no_telepon"] ?></p>
                    <p>Alamat: <?= $result["alamat"] ?></p>
                    <p>Deskripsi : <?= $result["deskripsi"] ?></p>

                </div>
            </div>
        </div>
        <div class="icons">
            <!-- <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-youtube"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-whatsapp"></a> -->
            <a class="btn btn-primary" href="?page=myProfile&aksi=update&id=<?= $result['id'] ?>">Edit Profile</a>
        </div>
    </div>
    <!--Profile card end-->
</main>