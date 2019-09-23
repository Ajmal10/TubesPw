<?php 

session_start();
require '../helper/functions.php';

//apakah udah login atau belum
if ( isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}


if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


	if ( mysqli_num_rows($cek_user) == 1) {
		$row = mysqli_fetch_assoc($cek_user);
		if( password_verify($password, $row["password"])){
			$_SESSION["login"] = true;
			header("Location: index.php");
			exit;
		}

	}
		$error = true;
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	

	
	<div class="login-page">
	<div class="form">
	<form action="" method="post" class="login-form">
			<?php if (isset($error)) :?>
		<p style="color : green; font-style: italic;">username / password anda salah!</p>
		<?php endif ?>
				<label for="username"></label>
				<br>
				<input type="text" name="username" autofocus placeholder="username">
				<label for="password"></label>
				<br>
				<input type="password" name="password" placeholder="password">
				<button type="submit" name="login">Login</button><br><br>
				<a href="registrasi.php"><button type="button">registrasi</button></a><br>
				<p class="massage"><a href="../index.php">Back</a></p>
	</form>
	</div>
</div>
	
	<scipt src="../assets/js/login.js"></script>
</body>
</html>