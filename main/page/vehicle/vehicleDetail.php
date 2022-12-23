<style >
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  /* font-family: 'Josefin Sans', sans-serif; */
}

body{
   background-color: #f3f3f3;
}

/* card profile */
.wrapper{
    /* flex-wrap: wrap;
	grid-gap: 24px;
    margin-top: 24px;
  transform: translate(-50%,-50%);
  width: 70%; */
  display: flex;
	flex-wrap: wrap;
	grid-gap: 24px;
	margin-top: 24px;
	width: 100%;
	color: var(--dark);
  /* height: 70%; */
  /* display: flex;
  box-shadow: 0 1px 20px 0 rgba(69,90,100,.08); */
}

.wrapper .left{
    width: 40%;
    /* background: linear-gradient(to right,#4E65FF,#92EFFD); */
    background: #B3E5FC;
    padding: 45px 25px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    text-align: center;
    color: rgb(0, 0, 0);
  }

  .wrapper .left img{
    border-radius: 0px;
    margin-bottom: 20px;
  }

  .wrapper .left h4{
    margin-bottom: 10px;
  }

  .wrapper .left p{
    font-size: 20px;
  }

  .wrapper .right{
 /* width: 60%; */
    background: #fff;
    padding: 30px 25px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px; 
    flex-grow: 1;
	flex-basis: 300px;
  }

  /* .wrapper .right .info_data2 img {
    width: 70%;
    /* background: linear-gradient(to right,#4E65FF,#92EFFD); */
    /* background: #B3E5FC;
    padding: 45px 25px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px; */
    /* position: relative;
    left : 15%;
    text-align: center;
    color: rgb(0, 0, 0); */
  /* } */ 
.wrapper .right .info,
.wrapper .right .info2{
  margin-bottom: 25px;
}

.wrapper .right .info h3,
.wrapper .right .info2 h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapper .right .info_data{
    display: flex;
  justify-content: space-between;
}
.wrapper .right .info_data2{
  display: flex;
  justify-content: space-between;
}

.wrapper .right .info_data .data,
.wrapper .right .info_data2 .data{
  width: 45%;
}

.wrapper .right .info_data .data h4,
.wrapper .right .info_data2 .data h4{
    color: #353c4e;
    margin-bottom: 5px;
}

.wrapper .right .info_data .data p,
.wrapper .right .info_data2 .data p{
  font-size: 17px;
  margin-bottom: 10px;
  color: #273b4e;
}

/* .wrapper .social_media ul li a{
    color :#fff;
    display: block;
    font-size: 18px;
  }

  .wrapper .social_media ul li{
    width: 45px;
    height: 45px;
    background: linear-gradient(to right,#01a9ac,#01dbdf);
    margin-right: 10px;
    border-radius: 5px;
    text-align: center;
    line-height: 45px;
  } */

  .btn-up,
  .btn{
   width: 95%;
   border-radius: 5px;
   padding:7px 10px;
   color:#d5daff;
   display: block;
   text-align: center;
   cursor: pointer;
   font-size: 20px;
   margin-top: 25%;
   position: relative;
   
}
.btn-up{
  margin-top: 25%;
}
.btn{
   background-color: #fd4875;
}
.btn-up{
  background-color: #1976D2;
}
.btn-up:hover{
  background-color: #0D47A1;
}
.btn:hover{
   background-color: #d1022fe7 ;
}

/* end card user */
/* .delete-btn{
   background-color: var(--red);
}

.delete-btn:hover{
   background-color: var(--dark-red);
} */
</style>
<?php 
include 'vehicle.php';
// $data = query("SELECT * FROM vechiles");
      $id = $_GET["id"];
      $data = new vehicle();
      $result= $data->query("SELECT * FROM vechiles WHERE id=$id")[0];
      $result= $data->query("SELECT 
      vechiles.merek ,
       vechiles.no_polisi, 
       users.nama ,
       users.no_telepon,
       vechiles.foto_kendaraan
      FROM `users` 
      JOIN vechiles ON users.id = vechiles.id_user WHERE vechiles.id = $id")[0];
      // $result= $data->query("SELECT vechiles.id ,
      // vechiles.merek ,
      // vechiles.no_polisi, 
      // users.nama ,
      // users.no_telepon
      
      //  FROM users JOIN vechiles ON users.id = vechiles.id_users WHERE vechiles.id=$id")[0];
      // var_dump($result);
    //   var_dump($result);

?>
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
							<a href="#">Data Kendaraan</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Detail Kendaraan</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>
<div class="wrapper">
    <div class="left">
        <!-- <img src="https://s3.zerochan.net/240/45/30/2649045.jpg" 
        alt="user" width="60%" height="70%"> -->
        <!-- <img src="https://images7.alphacoders.com/333/333852.jpg" 
        alt="user" width="90%"> -->
        <img src="assets/images/default_vehicle.jpg" 
        alt="user" width="90%">
        <!-- <img src="<?= $result["foto_kendaraan"]?>" 
        alt="user" width="90%" alt="foto_kendaraan"> -->
        
        <h4><?= $result["merek"]?></h4>
         <!-- <p>BG345TH</p> -->

    </div>
    <div class="right">
        <div class="info">
            <h3>Detail Kendaraan</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Merek</h4>
                    <p><?= $result["merek"]?></p>
                 </div>
                 <div class="data">
                   <h4>No Polisi</h4>
                    <p><?= $result["no_polisi"]?></p>
              </div>
            </div>
        </div>
      
      <div class="info2">
        <h3></h3>
            <div class="info_data2">
                 <div class="data">
                    <h4>Nama Pemilik</h4>
                    <p><?= $result["nama"]?></p>
                 </div>
                 <div class="data">
                   <h4>No Telepon</h4>
                    <p><?= $result["no_telepon"]?></p>
              </div>
            </div>
        </div>
      
      <!-- <input type="submit" value="Kembali" name="update_profile" class="btn"> -->
      <!-- <button class="btn-up" >Update</button> -->
      <a href="?page=vehicle" class="btn">Kembali</a>
      <!-- <button class="btn" >Kembali</button> -->
      <!-- <a href="home.php" class="delete-btn">go back</a> -->
    </div>
</main>