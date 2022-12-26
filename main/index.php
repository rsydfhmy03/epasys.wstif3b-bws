<?php
session_start();
error_reporting(0);
include('includes/koneksi.php');
include('auth.php');
error_reporting(0);
if (!isset($_SESSION['role'])) {
    header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- <link href="css/style.css" rel="stylesheet"> -->
	<link rel="shortcut icon" href="../Img/Ic_Epasys.ico" alt="Icon-Epasys">
	<title>Epasys</title>
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<body onload=getData()>

<?php
		// $page="dashboard";
		include 'includes/sidebar.php'
?>

<section id="content">
		<!-- NAVBAR -->
	<?php
		include 'includes/navigation.php'
	?>
	
	<?php
	include 'pages.php';
	?>

	
</section>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="assets/js/script.js"></script>

	<!-- Script Delete alert-->
	<script src="dist/jquery-3.6.1.min.js"></script>
	<script src="dist/sweetalert2.all.min.js"></script>
	<!-- <script src="js/deleteAlert.js"> </script> -->
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"> -->
    </script>
        <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
	<!-- script table -->
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script src="assets/dataTables/tableNet.js"> </script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</body>
</html>