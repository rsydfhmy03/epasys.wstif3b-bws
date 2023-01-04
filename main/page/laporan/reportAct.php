<style>
	.form-control {
		width: 40%;
		margin: auto;
		display: block;
		border: none;
		border-bottom: 2px solid #3498DB;
		margin-bottom: 5%;
	}

	.form-control:focus {
		outline: none;
		box-shadow: 0 0 0 0;
		border-bottom: 2px solid #3498DB;
	}

	.btn {
		width: 95%;
		/* border-radius: 5px; */
		padding: 7px 10px;
		color: #FAFAFA;
		display: block;
		text-align: center;
		cursor: pointer;
		font-size: 20px;
		margin-top: 7%;
		position: relative;
		margin: auto;
		background-color: #3498DB;
	}

	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		/* max-width: 500px; */
		margin: auto;
		text-align: center;
		font-family: arial;
		width: 100%;
		margin-top: 2%;
		margin-bottom: auto;
		width: 100%;
		/* height: 7%; */
		/* overflow: hidden; */
		background: rgb(255, 255, 255);
		/* border-radius: 20px; */
		/* box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); */
		/* display: flex;
		flex-direction: column; */
		/* border-radius: 70px; */
	}

	.card-header {
		color: #212121;
		padding: 5px;
		/* font-weight: 100; */
		font-size: 30px;
		background-color: #90CAF9;
	}

	.card-body {
		padding: 20px;
	}
</style>
<!-- MAIN -->
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
					<a class="active" href="#">Laporan Aktivitas</a>
				</li>
			</ul>
		</div>
		<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
	</div>
	<div class="card">
		<div class="card-header">
			Filter Laporan
		</div>
		<div class="card-body">
			<form>
				<div class="form-group">
					<label for="startDate">Dari Tanggal</label>
					<input type="date" class="form-control" id="startDate">
				</div>
				<div class="form-group">
					<label for="endDate">Sampai Tanggal</label>
					<input type="date" class="form-control" id="endDate">
				</div>
				<a class="btn btn-primary">Cetak Laporan</a>
			</form>
		</div>
	</div>



</main>
<!-- MAIN -->