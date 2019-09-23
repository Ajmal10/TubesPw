<?php 
require '../helper/functions.php';
session_start();
if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
// cek apakah tombol submit sudah ditekan atau belum
	if(isset($_POST["tambah"]) ){

		if(tambah($_POST) > 0){
			echo "<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
				</script>";
		}else {
			echo "<script>
					alert('data gagal ditambahkan!');
					document.location.href = 'index.php';
					</script>";
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Data Ilmuan</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/tambah.css">
</head>
<body>
	<div class="login-page">
	  <div class="form">
		<form action="" method="POST" enctype="multipart/form-data" class="login-form">
		<h1>Tambah Data Ilmuan</h1>
	
				<label for="nama"></label>
				<input type="text" name="nama" id="nama" required autocomplete="off" autofocus placeholder="Nama..">
			
				<label for="asal"></label>
				<input type="text" name="asal" id="asal" placeholder="Asal...">
			
				<label for="penemuan"></label>
				<input type="text" name="penemuan" id="penemuan" required placeholder="Penemuan...">
				
				<label for="lahir"></label>
				<input type="date" name="lahir" id="lahir" required placeholder="Lahir...">
				
				<label for="wafat"></label>
				<input type="date" name="wafat" id="wafat" placeholder="Wafat...">
			
				<label for="gambar"></label>
				<input type="file" name="gambar" id="gambar">
			
				<button type="submit" name="tambah">Tambah Data</button>
				<p class="massage"><a href="index.php">Back</a></p>
			

		</form>
	</div>
</div>

<scipt src="../assets/js/login.js"></script>

</body>
</html>