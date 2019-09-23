<?php 

session_start();
require '../helper/functions.php';

// cek login

if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

if( isset($_GET["cari"]) ){
	$keyword = $_GET["keyword"];
	$query = "SELECT * FROM ilmuan WHERE nama LIKE '%$keyword%' OR
											asal LIKE '%$keyword%' OR
											penemuan LIKE '%$keyword%'";
	$ilmuan = query($query);
} else {
	$ilmuan = query("SELECT * FROM ilmuan");
}






?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Ilmuan</title>
 </head>
 	<link rel="stylesheet" href="../assets/css/index3.css">
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style3.css">
 	<style>
 		@media print{
 			.logout, .tambah, .aksi, .form-cari{
 				display: none;
 			}
 		}
 	</style>
 <body>

 	<!--Navbar-->
        <nav class="navbar navbar-inverse is-transparent navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand page-scroll" href="tambah.php">Tambah Data Ilmuan</a>
              <a href="../cetak.php" target="_blank"> <br><br><img src="../assets/img/1.png" width="25px" height="25px"> </a>
              <label action="">
              <form action="" method="get" class="form-cari">
 			<input type="text" name="keyword" autocomplete="off" placeholder="Search...." id="keyword">
 			</label>

 	</form>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php" class="logout">Logout</a></li>
                
              </ul>
            </div>
          </div>
        </nav>
        <!--Akhir Navbar-->

          <div class="jumbotron text-center">
            <br><br><br>
          <h1>Daftar Ilmuan Terkenal</h1>
           <p>Asal | Penemuan | Lahir | Wafat</p>
        </div>
        <!-- akhir jumbotron -->
 	
 	<section id="container">
 	<table border="1" cellpadding="5" width="100%">
 		<tr>
 		<th>No</th>
 		<th class="aksi">Aksi</th>
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
 			<td class="aksi">
 				<a href="ubah.php?id=<?php echo $ilm["id"]; ?>"><button class="button1">ubah</button></a>
 				<a href="hapus.php?id=<?php echo $ilm["id"]; ?>" onclick="return confirm('Anda yakin?');"><button class="button2">hapus</button></a>
 			</td>
 			<td>
 			<div class="gambar">
				<img src="../assets/img/<?= $ilm['gambar'] ?>" style="width =100%;">
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
 		</section>

 			<!-- footer -->
        <footer>
          <div class="container text-center">
            <div class="row">
              <div class="col-sm-12">
                  <p>&copy; copyright 2017 | built by <i class="glyphicon glyphicon-hand-right"></i>. <a href="https://www.instagram.com/levandri_ajmal/">Levandri Ahmad Fauzan Ajmal</a>.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                    <a href="https://www.youtube.com/channel/UC9hDIUPFHV6-6SIw-nYq8eA?disable_polymer=true" class="btn btn-danger"><i class="glyphicon glyphicon-hand-right "></i> Subsribe in youtube</a>
              </div>
            </div>
          </div>
        </footer>

        <!-- akhir footer -->

 			 <!-- Include all compiled plugins (below), or include individual files as needed -->
		    <scipt src="../assets/js/bootstrap.min.js"></script>
		    <scipt src="../assets/js/script.js"></script>

 			<script src="../assets/js/jquery-3.3.1.min.js""></script>
 			<script src="../assets/js/script.js"></script>
 </body>
 </html>
 