<style>
	.hapus {
		border: 2px solid #FCE4EC;
		text-align: center;
		justify-content: center;
		color: #FFFFFF;
		background: #db5d59 no-repeat 5px;
		height: 10%;
		display: inline;
		width: fit-content;
		/* padding-left: 1px;
		padding-top: 3px;  */
		border-radius: 5px;
		padding: 5px 10px;
	}

	.detail {
		border: 2px solid #E1F5FE;
		text-align: center;
		justify-content: center;
		color: #FFFFFF;
		background: #0277BD no-repeat 5px;
		height: 10%;
		display: inline;
		width: fit-content;
		/* padding-left: 1px;
		padding-top: 3px;  */
		border-radius: 5px;
		padding: 5px 10px;
	}
</style>
<main>
	<div class="head-title">
		<div class="left">
			<h1><?php include 'includes/greetings.php' ?>, Administrator</h1>
			<ul class="breadcrumb">
				<li>
					<a href="#">Main</a>
				</li>
				<li><i class='bx bx-chevron-right'></i></li>
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
				<i class='bx bx-search'></i>
				<i class='bx bx-filter'></i>
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
					<?php $i = 1; ?>
					<?php
					// include 'functions.php';
					// $data = query("SELECT * FROM users");
					include 'users.php';
					// $data = query("SELECT * FROM vechiles");
					$data = new users();
					$result = $data->query("SELECT * FROM users ORDER BY id DESC");

					foreach ($result as $row) :
						// while ($row = mysqli_fetch_assoc($result)) :
					?>
						<tr>
							<td><?= $i ?></td>
							<td><?= $row["nim"] ?></td>
							<td><?= $row["nama"] ?></td>
							<td><?= $row["email"] ?></td>
							<td><?= $row["alamat"] ?></td>
							<td><?= $row["no_telepon"] ?></td>
							<td><img src="https://berserk.my.id/storage/<?= $row["avatar"] ?>" style="width: 70px; height :70px; border-radius: 15%;"></td>

							<td>
								<a class=" detail" href="?page=users&aksi=detail&id=<?= $row["id"]; ?>">Detail</a>
								<a class="hapus" href="page/users/delete.php?id=<?= $row['id']; ?> ">Hapus</a>

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


<?php if ($_SESSION['sukses']) { ?>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'Sukses',
			text: 'data berhasil dihapus',
			timer: 3000,
			showConfirmButton: false
		})
	</script>
	<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);
} ?>

<!-- <script src="../../dist/jquery-3.6.1.min.js"></script>
	
	<script src="../../dist/sweetalert2.all.min.js"></script>    -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"> -->
</script>
<!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
<script>
	$('.hapus').on('click', function(e) {
		e.preventDefault();
		const href = $(this).attr('href')

		Swal.fire({

			title: 'Apakah Anda Yakin ?',
			text: 'Data akan dihapus ',
			type: 'warning',
			// icon : 'warning',

			showCancelButton: true,
			confirmButtonText: "Hapus Data",
			confirmButtonColor: "#ff0055",
			cancelButtonColor: "#3084d6",

		}).then((result) => {
			// if (result.value) {
			// document.location.href = href;
			if (result.isConfirmed) {
				document.location.href = href;

				Swal.fire({
					icon: 'success',
					title: 'Sukses',
					text: 'data berhasil dihapus',
					timer: 3000,
					showConfirmButton: false
				})
				// setTimeout = 10000;
			}

			// }
		})
	})
</script>