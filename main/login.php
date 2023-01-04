<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="../Img/Ic_Epasys.ico" alt="Icon-Epasys">
	<title>Epasys Login Form</title>
	<link rel="stylesheet" type="text/css" href="LoginAssets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="LoginAssets/css/pop_up.css">
	<?php
	session_start();
	include_once 'auth.php';
	$user = new auth();

	if ($user->get_session()) {
		header("location:index.php");
	}
	?>
</head>

<body>
	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "berhasil") {
	?>
			<div class="popup popup--icon -success js_success-popup popup--visible">
				<div class="popup__background"></div>
				<div class="popup__content">
					<h3 class="popup__content__title">
						Success
					</h3>
					<p>Login Successfully</p>
					<p>
						<!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
						<?php echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>"; ?>
					</p>
				</div>
			</div>
			<!--   <script>
			window.location="index.php";
			</script> -->
		<?php
		} elseif ($_GET['pesan'] == "gagal") {
		?>
			<div class="popup popup--icon -error js_error-popup popup--visible">
				<div class="popup__background"></div>
				<div class="popup__content">
					<h3 class="popup__content__title">
						Error
					</h3>
					<p>Invalid Email or Password</p>
					<p>

						<button class="button button--error" data-for="js_error-popup"><a style="color:white;" href="login.php">Close</button></a>

					</p>
				</div>
			</div>
	<?php
		}
	}
	?>

	<img class="wave" src="LoginAssets/img/Vector.svg">
	<div class="container">
		<div class="img">
			<img src="LoginAssets/img/bgLogin.svg">
		</div>
		<div class="login-content">
			<form action="auth.php" method="post">
				<img src="LoginAssets/img/Ic.png">
				<h3 class="title">Welcome to Epasys </h3>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Email</h5>
						<input type="email" class="input" name="email" required autocomplete="">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" class="input" name="password" required>
					</div>
				</div>
				<a href="#">Forgot Password?</a>
				<!-- <input type="submit" class="btn" value="Login"> -->
				<button type="submit" class="btn" name="Login" id="tombol">Login</button>
				<!-- <input type="submit" class="btn" name="Login" id="tombol"> -->
			</form>
		</div>
	</div>


	<script type="text/javascript" src="LoginAssets/js/main.js"></script>
	<script src="js/sweetalert2.all.min.js"></script>
</body>

</html>