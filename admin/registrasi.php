<?php 
require '../helper/functions.php';

if ( isset($_POST["register"])) {
	if ( registrasi($_POST) > 0 ) {
		echo "
		<script>
		alert('user baru berhasil ditambahkan');
		document.location.href = 'login.php';
		</script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link type="text/css" href="../assets/css/style.css" rel="stylesheet">
	
	
</head>
<body>
	
	<div class="login-page">
	  <div class="form">
	    <form action="" method="post" class="login-form">
	    	<h1>Form Registrasi</h1>
		
				<label for="username"></label>
				<input type="text" name="username" id="username" placeholder="username">
			
				<label for="password1"></label>
				<input type="password" name="password1" id="password1" required placeholder="password">
			
				<label for="password2"></label>
				<input type="password" name="password2" id="password2" required placeholder="konfirmasi password">
			
				<button type="submit" name="register">Registrasi</button>
				<p class="massage"><a href="login.php">Back</a></p>
		</form>
	</div>
</div>

<scipt src="../assets/js/login.js"></script>
</body>
</html>