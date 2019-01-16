<?php
require_once('dbConfig.php');
	$surel = $_GET['surel'];
	$pilih = $_GET['pilih'];

$sql = "SELECT kelas FROM pengguna where surel='$surel'";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$kelas = $row['kelas'];	

	if(mysqli_query($con,"INSERT INTO pemilu VALUES('','$surel','$kelas','$pilih')")){ 
		echo 'success';
		//update status supaya tidak bisa login kembali
		$sql = mysqli_query($con, "UPDATE pengguna SET status = 1 where surel = '$surel'"); 
	}else{ 
		echo 'gagal'; 
	}
	
	}
} else {
    echo "0 results";
}
$con->close();
?>