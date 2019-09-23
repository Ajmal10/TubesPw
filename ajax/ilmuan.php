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

<table border="1" cellpadding="5" width="100%">
 		<tr>
 		<th>No</th>
 		<th>Aksi</th>
 		<th>Gambar</th>
 		<th>Nama</th>
 		<th>Asal</th>
 		<th>Penemuan</th>
 		<th>Lahir</th>
 		<th>Wafat</th>
 		</tr>

 		<?php if (empty($ilmuan) ) : ?>
 			<tr>

 				<td colspan="7" align="center">Data Tidak Ditemukan!</td>
 			</tr>
 		<?php endif ?>

 		<?php $i = 1; ?>
 	<?php foreach ($ilmuan as $ilm) : ?>
 			

 			<tr>
 			<td><?php echo $i++; ?></td>
 			<td>
 				<a href="../admin/ubah.php?id=<?php echo $ilm["id"]; ?>"><button class="button1">ubah</button></a>
 				<a href="../admin/hapus.php?id=<?php echo $ilm["id"]; ?>" onclick="return confirm('Anda yakin?');"><button class="button2">hapus</button></a>
 			</td>
 			<td>
 			<div class="gambar">
				<img src="../assets/img/<?= $ilm['gambar'] ?>">
			</div>
			</td>
 			<td><?php echo $ilm["nama"];?></td>
 			<td><?php echo $ilm["asal"]; ?></td>
 			<td><?php echo $ilm["penemuan"]; ?></td>
 			<td><?php echo $ilm["lahir"]; ?></td>
 			<td><?php echo $ilm["wafat"]; ?></td>
 			</tr>
 			<?php endforeach; ?>
 			</table>