<?php
require_once('dbConfig.php');
if($_SERVER['REQUEST_METHOD']=='GET'){
	$id = $_GET['id'];
	$sql = "SELECT * FROM kandidat where no_urut = '$id'";
	$r = mysqli_query($con,$sql);
	$result = array(); 
	$row = mysqli_fetch_array($r);
		array_push($result,array( 
		"nama"=>$row['nama'],
		"kelas"=>$row['kelas'],
		"visi"=>$row['visi'],
		"misi"=>$row['misi'],
		"foto"=>$row['foto'],
		"video"=>$row['video'],
		"tahun"=>$row['tahun'],
		"no_urut"=>$row['no_urut'],
		"jml_pemilih"=>$row['jml_pemilih']
		));
	echo json_encode(array('result'=>$result));
	mysqli_close($con);
}
?>