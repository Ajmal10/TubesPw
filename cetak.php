<?php 

require_once __DIR__ . '/vendor/autoload.php';

require 'helper/functions.php';

$ilmuan = query("SELECT * FROM ilmuan");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1" cellpadding="5" width="100%">
 		<tr>
	 		<th>No</th>
	 		<th>Gambar</th>
	 		<th>Nama</th>
	 		<th>Asal</th>
	 		<th>Penemuan</th>
	 		<th>Lahir</th>
	 		<th>Wafat</th>
 		</tr>';

 		$i = 1;
 	foreach ($ilmuan as $ilm){
 		$html .='<tr>
	 		<td>'. $i++ .'</td>
	 		<td> <img src="assets/img/'. $ilm["gambar"] .'"</td>
	 		<td>'. $ilm["nama"] .'</td>
	 		<td>'. $ilm["asal"] .'</td>
	 		<td>'. $ilm["penemuan"] .'</td>
	 		<td>'. $ilm["lahir"] .'</td>
	 		<td>'. $ilm["wafat"] .'</td>
 		<tr>';
 	}

$html .= '</table>

</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>