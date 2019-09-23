<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profil Mahasiswa</title>
	<link rel="stylesheet" href="../assets/css/latihan3.css">
</head>
<body>
	<div class="header">
		<p>Profil ilmuan</p>
	</div>
<div class="container">
	<div class="content">
		<div class="gambar">
			<img src="../assets/img/<?= $_GET['gambar'] ?>">
		</div>
		<div class="desc">
			<p><?= $_GET['nama'] ?></p>
			<p><?= $_GET['asal'] ?></p>
			<p><?= $_GET['penemuan'] ?></p>
			<p><?= $_GET['lahir'] ?></p>
			<p><?= $_GET['wafat'] ?></p>
			<p><a href="../index.php">Kembali</a></p>
		</div>
	</div>
</div>

	
</body>
</html>