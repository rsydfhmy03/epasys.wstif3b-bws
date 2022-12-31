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
							<a class="active" href="#">Kendaraan Keluar</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>
			
			<div class="table-data">
			<div class="order">
				<div class="head">
					<h3>Recent Activity</h3>
					<i class='bx bx-search' ></i>
					<i class='bx bx-filter' ></i>
			</div>
		<table id="tableNet" class="display" style="width:100%">
        <thead>
            <tr>
			<th>No</th>
			<th>Merek</th>
			<th>Users</th>
			<th>Satpam</th>
			<th>Foto_kendaraan</th>
			<th>Foto_user</th>
			<th>Waktu Keluar</th>
            </tr>
        </thead>
        <tbody>
			<?php $i =1;?>
            <?php 
            include 'functions.php';
			$data = query("SELECT vechiles.merek, users.nama AS nama_users,employees.nama AS nama_satpam , users.alamat AS alamat_users, vechiles.foto_kendaraan, users.avatar, DATE_FORMAT(parkings.updated_at, '%H:%i') AS jam_keluar FROM parkings INNER JOIN vechiles ON parkings.id_kendaraan = vechiles.id INNER JOIN users ON vechiles.id_user = users.id INNER JOIN employees ON parkings.id_karyawan = employees.id WHERE parkings.status = 'OUT' AND date(parkings.updated_at) = current_date
			ORDER BY parkings.updated_at DESC; ");
        
			foreach($data as $row) :
				// while ($row = mysqli_fetch_assoc($result)) :
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["merek"]?></td>
                <td><?= $row["nama_users"]?></td>
				<td><?= $row["nama_satpam"]?></td>
				<td><img src="<?= $row["foto_kendaraan"]?>" width="50px" height="50px"></td>
				<td><img src="https://berserk.my.id/storage/<?= $row["avatar"]?>" width="50px" height="50px"></td>
				<td ><?= $row["jam_keluar"]?></td>
                
            </tr>
			<?php $i++; ?>
            <?php 
			// endforeach; 
				endforeach;
			?>
        </tbody>
        <tfoot>
            <tr>
               
            </tr>
        </tfoot>
    	</table>
	</div>
			
</main>