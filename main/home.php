<main>

			<div class="head-title">
				<div class="left">
					<h1><?php include 'includes/greetings.php'?>, Administrator</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Dashboard</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<ul class="box-info">
				<li>
				<i class='bx bxs-parking'></i>
					<span class="text">
						<h3>100</h3>
						<p>Total Parkir</p>
					</span>
				</li>
				<li>
					<i class='bx bx-log-in' ></i>
					<!-- <i class="bx"><ion-icon name="enter-outline"></ion-icon></i> -->
					<span class="text">
					<?php include 'counters/invehicles_count.php'?> 
						<h3>80</h3>
						<p>Kendaraan Masuk</p>
					</span>
				</li>
				<li>
					<i class='bx bx-log-out' ></i>
					<!-- <i class='bx'><ion-icon name="exit-outline"></ion-icon></i> -->
					<span class="text">
						<h3>20</h3>
						<p>Kendaraan Keluar</p>
					</span>
				</li>
				<!-- <li>
					<i class='bx bx-log-out' ></i>
					<i class='bx'><ion-icon name="exit-outline"></ion-icon></i> -->
					<!-- <span class="text">
						<h3>20</h3>
						<p>Data Pengguna</p>
					</span>
				</li>  -->
			</ul>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Riwayat Parkir</h3>
						<!-- <i class='bx bx-search' ></i> -->
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						
					</table>
				</div>

				<div class="todo">
					<div class="head">
						<h3>Aktivitas Parkir</h3>
						<!-- <i class='bx bx-plus' ></i> -->
						<i class='bx bx-filter' ></i>
					</div>
					
				</div>
			
</main>