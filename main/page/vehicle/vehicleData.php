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
							<a class="active" href="#">Data Kendaraan</a>
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
					<h3>Data Kendaraan</h3>
					<i class='bx bx-search' ></i>
					<i class='bx bx-filter' ></i>
			</div>
		<table id="tableNet" class="display" style="width:100%">
        <thead>
            <tr>
			<th>No</th>
			<th>Merek</th>
			<th>No Polisi</th>
			<th>Foto_stnk</th>
			<th>Foto_kendaraan</th>
			<th>Aksi</th>
            </tr>
        </thead>
        <tbody>
			<?php $i =1;?>
            <?php 
            include 'functions.php';
			$data = query("SELECT * FROM vechiles");
            
			foreach($data as $row) :
				// while ($row = mysqli_fetch_assoc($result)) :
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["merek"]?></td>
                <td><?= $row["no_polisi"]?></td>
				<td><img src="<?= $row["foto_stnk"]?>" width="50px" height="50px"></td>
                <td>
					<img src="https://kelompok17stiebi.website/storage/<?= $row["foto_kendaraan"]?>" width="50px" height="50px">
				</td>
                <td>
                <a class ="detail" href="vehicleDetail.php?id=<?= $row["id"]; ?>">Detail</a> |
                <a class ="hapus" href="model/vehicleDelete.php?id=<?= $row["id"]; ?>">Hapus</a>
            
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