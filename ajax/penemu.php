<?php 
	require '../helper/functions.php';
	$keyword = $_GET["keyword"];
	$query = "SELECT * FROM ilmuan WHERE 
			  nama LIKE '%$keyword%' OR
			  asal LIKE '%$keyword%' OR
			  penemuan LIKE '%$keyword%' OR
			  lahir LIKE '%$keyword%' OR
			  wafat LIKE '%$keyword%'";
	$ilmuan = query($query);

 ?>

	
			<?php foreach ($ilmuan as $d) :?>
		<div class="content">
			<div class="gambar"><img src="assets/img/<?= $d['gambar'] ?>"></div>
			<div class="desc">
				
				<a href="php/profil.php?id=<?php echo $d['id']; ?>&gambar=<?= $d['gambar']?>&nama=<?= $d['nama']?>&asal=<?= $d['asal']?>&penemuan=<?= $d['penemuan']?>&lahir=<?= $d['lahir']?>&wafat=<?= $d['wafat']?>"> <p><?php echo $d['nama']; ?></p></a>
				<p><?= $d['asal'] ?></p>
			</div>
			<div class="clear"></div>
		</div>
			<?php endforeach ?>