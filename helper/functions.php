<?php 
	$conn = mysqli_connect("localhost", "root", "", "pw_173040147");



function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;	
	}
	return$rows;

}

function tambah($data) {
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$asal = $data["asal"];
	$penemuan = htmlspecialchars($data["penemuan"]);
	$lahir = htmlspecialchars($data["lahir"]);
	$wafat = htmlspecialchars($data["wafat"]);

	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

	$query = "INSERT INTO ilmuan VALUES('','$nama','$asal','$penemuan','$lahir','$wafat','$gambar')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
	
}

function upload(){

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang di upload

	if ($error === 4) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
				</script>";
				return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
	 	echo "<script>
	 			alert('yang anda upload bukan gambar!');
	 		</script>";
	 		return false;
	 } 

	 // cek jika ukurannya terlalu besar
	 if ($ukuranFile > 2000000) {
	 	echo "<script>
	 			alert('ukuran gambar terlalu besar!');
	 		</script>";
	 		return false;
	 }
 
	 // lolos pengecekan, gambar siap diupload
	 // generate nama gambar baru
	 $namaFileBaru = uniqid();
	 $namaFileBaru .= '.';
	 $namaFileBaru .= $ekstensiGambar; 
	 move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);

	 return $namaFileBaru;


}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM ilmuan WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$asal = htmlspecialchars($data["asal"]);
	$penemuan = htmlspecialchars($data["penemuan"]);
	$lahir = htmlspecialchars($data["lahir"]);
	$wafat = htmlspecialchars($data["wafat"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	//cek apakah user upload gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}
	

	$query = "UPDATE ilmuan SET nama = '$nama',
								asal = '$asal',
								penemuan = '$penemuan',
								lahir = '$lahir',
								wafat = '$wafat',
								gambar = '$gambar'
									WHERE id = $id
								";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
	
}

function cari($keyword) {
	$query = "SELECT * FROM ilmuan WHERE 
			  nama LIKE '%$keyword%' OR
			  asal LIKE '%$keyword%' OR
			  penemuan LIKE '%$keyword%' OR
			  lahir LIKE '%$keyword%' OR
			  wafat LIKE '%$keyword%' OR
			  gambar LIKE '%$keyword%'";

			  return query($query);
}

function registrasi($data){
	global $conn;
	$username = strtolower(trim($data["username"]));
	$password1 = mysqli_real_escape_string($conn, $data["password1"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek apakah password1 sama dengan password2

	if( $password1 != $password2){
		echo "<script>
				alert('konfirmasi password tidak sesuai');
				document.location.href = 'registrasi.php';
				</script>";
				return false;
	}

	// cek jika sudah ada username yang sama

	$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if( mysqli_num_rows($cek_user) == 1){
		echo "<script>
				alert('username sudah terpakai');
				document.location.href = 'registrasi.php';
				</script>";
				return false;
	}

	// enkripsi password
	$password_baru = password_hash($password1, PASSWORD_DEFAULT);
	
	// masukan data user baru ke DB

	$query = "INSERT INTO user VALUES('','$username','$password_baru')";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);

}

 ?>