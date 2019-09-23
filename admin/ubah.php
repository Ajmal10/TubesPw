<?php 
require '../helper/functions.php';

session_start();
if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

// ambil data ilmuan yang akan diubah
$id = $_GET["id"];
$ilm = query("SELECT * FROM ilmuan WHERE id = $id")[0];


	if(isset($_POST["ubah"]) ){
		if(ubah($_POST) > 0){
			echo "<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
				</script>";
		}
	}

	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah Data Ilmuan</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<div class="login-page">
	 <div class="form">
		<form action="" method="POST" enctype="multipart/form-data">
			<h1>Ubah Data Ilmuan</h1>
		<input type="hidden" name="id" value="<?php echo $ilm["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?php echo $ilm["gambar"]; ?>">
		<ul>

				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required autocomplete="off" autofocus value="<?php echo $ilm["nama"]; ?>">
				
				<label for="asal">Asal : </label>
				<input type="text" name="asal" id="asal" value="<?php echo $ilm["asal"]; ?>">
			
				<label for="penemuan">Penemuan : </label>
				<input type="text" name="penemuan" id="penemuan" required value="<?php echo $ilm["penemuan"]; ?>">
			
				<label for="lahir">lahir : </label>
				<input type="date" name="lahir" id="lahir" required value="<?php echo $ilm["lahir"]; ?>">
			
				<label for="wafat">Wafat : </label>
				<input type="date" name="wafat" id="wafat" required value="<?php echo $ilm["wafat"]; ?>">
			
				<label for="gambar">Gambar : </label><br>
				<img src="../assets/img/<?= $ilm['gambar']; ?>" width="40%" height="20%"><br>
				<input type="file" name="gambar" id="gambar">
			
				<button type="submit" name="ubah">Ubah Data</button>
				<p class="massage"><a href="index.php">Back</a></p>
			</li>
		</ul>

	</form>

</div>
</div>
<scipt src="../assets/js/login.js"></script>
</body>
</html>