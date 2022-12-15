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
							<a class="active" href="#">Data Users</a>
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
					<h3>Data Mahasiswa</h3>
					<i class='bx bx-search' ></i>
					<i class='bx bx-filter' ></i>
			</div>
		<table id="tableNet" class="display" style="width:100%">
        <thead>
            <tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>ALamat</th>
			<th>No_Telepon</th>
			<th>Gambar</th>
			<th>Aksi</th>
            </tr>
        </thead>
        <tbody>
			<?php $i =1;?>
            <?php 
            include 'functions.php';
			$data = query("SELECT * FROM users");
            
			foreach($data as $row) :
				// while ($row = mysqli_fetch_assoc($result)) :
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["nim"]?></td>
                <td><?= $row["nama"]?></td>
				<td><?= $row["email"]?></td>
				<td><?= $row["alamat"]?></td>
				<td><?= $row["no_telepon"]?></td>
				<td><img src="https://kelompok17stiebi.website/storage/<?= $row["avatar"]?>" width="50px" height="50px"></td>
                
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