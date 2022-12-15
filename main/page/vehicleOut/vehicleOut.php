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
							<a class="active" href="#">Kendaraan Masuk</a>
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
			<th>Alamat</th>
			<th>Foto_kendaraan</th>
			<th>Foto_user</th>
			<th>Waktu Masuk</th>
            </tr>
        </thead>
        <tbody>
			<?php $i =1;?>
            <?php 
            include 'functions.php';
			$data = query("SELECT * FROM parkings WHERE status='OUT' ");
            
			foreach($data as $row) :
				// while ($row = mysqli_fetch_assoc($result)) :
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["nama"]?></td>
                <td><?= $row["merek"]?></td>
				<td><?= $row["nama"]?></td>
				<td><?= $row["alamat"]?></td>
				<td><img src="<?= $row["avatar"]?>" width="50px" height="50px"></td>
                <td>
                <a href="">Detail</a> |
                <a href="">Hapus</a>
            
                </td>
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