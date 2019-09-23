<?php 
	require 'helper/functions.php';

	$ilmuan = query("SELECT * FROM ilmuan");

	if( isset($_POST["cari"]) ){
	$ilmuan = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Ilmuan</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/index2.css">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
</head>
<body>
	<!--Navbar-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>

               <a class="navbar-brand page-scroll" href="#home"> Home </a>
               <a class="navbar-brand page-scroll" href="#profile"> Profile </a>
               <label action="">
               <form action="" method="post" class="form-cari" >
 					<input type="text" name="keyword" id="tulis" placeholder="search..." autocomplete="off" >
 					</form>
 				</label>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
              	<li><a href="#home"></a></li>
 				<li>
 					<a href="admin/login.php" class="navbar-link"><button>LOGIN</button></a>
 				</li>
 				
                
              </ul>
            </div>
          </div>
        </nav>
        <!--Akhir Navbar-->

         <!--jumbotron-->
        <div class="jumbotron text-center">
          <br><br><br>
          <h1>Ilmuan Terkenal di Dunia</h1>
           <p>Asal | Penemuan | Lahir | Wafat</p>
        </div>
        <!-- akhir jumbotron -->

        <section class="profile" id="profile">
          <div class="container">
            <div class="row">
            <div class="col-sm-12 text-center">
            <h2 class="text-center">Daftar Ilmuan</h2>
            <hr>
              
            </div>   
            </div>
              <div class="row">
                <div class="col-sm-12 text-center">
               		<div id="pembungkus">
			<?php foreach ($ilmuan as $d) :?>
		<div class="content">
			<div class="gambar"><img src="assets/img/<?= $d['gambar'] ?>"></div>
			<div class="desc">
				
				<a href="php/profil.php?id=<?php echo $d['id']; ?>&gambar=<?= $d['gambar']?>&nama=<?= $d['nama']?>&asal=<?= $d['asal']?>&penemuan=<?= $d['penemuan']?>&lahir=<?= $d['lahir']?>&wafat=<?= $d['wafat']?>"><p><?php echo $d['nama']; ?></p></a>
				
				<p><?= $d['asal'] ?></p>
			</div>
			<div class="clear"></div>
		</div>
			<?php endforeach ?>
	</div>
                </div>
                
              </div>
          </div>
        </section>

        <!-- akhir about -->

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
    <scipt src="assets/js/bootstrap.min.js"></script>
    <scipt src="assets/js/scri.js"></script>

	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>