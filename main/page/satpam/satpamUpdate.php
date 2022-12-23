<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#3498db;
   --dark-blue:#2980b9;
   --red:#e74c3c;
   --dark-red:#c0392b;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}
/* 
*::-webkit-scrollbar{
   width: 10px;
} */

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

.btn,
.delete-btn{
   width: 100%;
   border-radius: 5px;
   padding:10px 30px;
   color:var(--white);
   display: block;
   text-align: center;
   cursor: pointer;
   font-size: 20px;
   margin-top: 10px;
}

.btn{
   background-color: var(--blue);
}

.btn:hover{
   background-color: var(--dark-blue);
}

.delete-btn{
   background-color: var(--red);
}

.delete-btn:hover{
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

.form-container{
   min-height: 100vh;
   background-color: var(--light-bg);
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}

.form-container form{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 500px;
   border-radius: 5px;
}

.form-container form h3{
   margin-bottom: 10px;
   font-size: 30px;
   color:var(--black);
   text-transform: uppercase;
}

.form-container form .box{
   width: 100%;
   border-radius: 5px;
   padding:12px 14px;
   font-size: 18px;
   color:var(--black);
   margin:10px 0;
   background-color: var(--light-bg);
}

.form-container form p{
   margin-top: 15px;
   font-size: 20px;
   color:var(--black);
}

.form-container form p a{
   color:var(--red);
}

.form-container form p a:hover{
   text-decoration: underline;
}

.container{
   min-height: 100vh;
   /* background-color: var(--light-bg); */
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}

.container .profile{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 400px;
   border-radius: 5px;
}

.container .profile img{
   height: 150px;
   width: 150px;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
}

.container .profile h3{
   margin:5px 0;
   font-size: 20px;
   color:var(--black);
}

.container .profile p{
   margin-top: 20px;
   color:var(--black);
   font-size: 20px;
}

.container .profile p a{
   color:var(--red);
}

.container .profile p a:hover{
   text-decoration: underline;
}

.update-profile{
   min-height: 80vh;
   background-color: var(--light-bg);
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2px;
}

.update-profile form{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 99%;
   text-align: center;
   border-radius: 5px;
}

.update-profile form img{
   height: 200px;
   width: 200p;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
}

.update-profile form .flex{
   display: flex;
   justify-content: space-between;
   /* margin-bottom: 20px; */
   gap:15px;
}

.update-profile form .flex .inputBox{
   width: 49%;
}

.update-profile form .flex .inputBox span{
   text-align: left;
   display: block;
   margin-top: 15px;
   font-size: 17px;
   color:var(--black);
}

.update-profile form .flex .inputBox .box{
   width: 100%;
   border-radius: 5px;
   background-color: var(--light-bg);
   padding:12px 14px;
   font-size: 17px;
   color:var(--black);
   margin-top: 10px;
}

@media (max-width:650px){
   .update-profile form .flex{
      flex-wrap: wrap;
      gap:0;
   }
   .update-profile form .flex .inputBox{
      width: 100%;
   }
}

</style>
<main>
<div class="head-title">
				<div class="left">
				<h1><?php include 'includes/greetings.php'?>, Administrator</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Main</a>
						</li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
							<a href="#">Data Satpam</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Update Satpam</a>
						</li>
					</ul>
				</div>
				
			</div>
<div class="update-profile">

<?php 
include 'satpam.php';
// $data = query("SELECT * FROM vechiles");
      $id = $_GET["id"];
      $data = new satpam();
    //   $result= $data->query("SELECT * FROM users WHERE id=$id")[0];
        $result= $data->query("SELECT * FROM employees WHERE role='SATPAM' AND id=$id")[0];
      // var_dump($result);
// if ($_SERVER["REQUEST_METHOD"] == "POST")
// {
   if (isset($_POST["ubahSatpam"])){
      // var_dump($_POST);
      if($data->ubah($_POST) > 0) {

         // header('location : vehicleData.php?m=1');
         // $_SESSION["sukses"] = 'Data Berhasil Diubah';
     
         // header('location:../../index.php?page=satpam');
         echo "<script> 
         alert('data berhasil diubah !');
         // document.location.href = '?page=satpam';
         </script>";
         
        
         
         // //redirect ke halaman index.php
         // header('Location: ?page=vehicle'); 
     }


   }


     

?>

   <form action="" method="post">
      <?php
        //  if($result['image'] == ''){
        //     echo '<img src="assets/images/default-avatar.png">';
        //  }else{
        //     echo '<img src="uploaded_img/'.$fetch['image'].'">';
        //  }
        //  if(isset($message)){
        //     foreach($message as $message){
        //        echo '<div class="message">'.$message.'</div>';
        //     }
        //  }
      ?>
      
      <div class="flex">
         <div class="inputBox">
            <input type="hidden" name="id" value="<?= $result["id"]?>" >
            <span>Nama Lengkap :</span>
            <input type="text" name="nama" value="<?= $result["nama"]?>" class="box">
            <span>Email :</span>
            <input type="email" name="email" value="<?= $result["email"]?>" class="box">
            <span>Alamat :</span>
            <input type="text" name="alamat" value="<?= $result["alamat"]?>" class="box">
            <!-- <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box"> -->
         </div>
         <div class="inputBox">
         <span>Role :</span>
            <select name='role' class="box">
                <option value='<?= $result["role"]?>'>SATPAM</option>
	        </select>
            
            <!-- <input type="password" name="update_pass" disabled value="01211" class="box"> -->
            <span>no telephone :</span>
            <input type="text" name="no_hp" value="<?= $result["no_telepon"]?>" class="box">
            <!-- <span>Role :</span>
             -->
            <span>password :</span>
            <input type="password" name="password" disabled value="<?= $result["password"]?>" class="box">
         </div>
      </div>
      <!-- <input type="submit" name="submit" class="btn"> -->
      <button type="submit" name="ubahSatpam" class="btn">Update</button>
      <a href="?page=satpam" class="delete-btn">Kembali</a>
   </form>

</div>
</main>