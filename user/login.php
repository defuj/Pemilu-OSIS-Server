<?php
require_once("dbConfig.php");
		$surel = $_GET['surel'];
		$pin = $_GET['pin'];
		$status = 0;

		$result = mysqli_query($con, "SELECT * FROM pengguna where surel = '$surel' and pin = '$pin' and status = 0");
		$check = mysqli_num_rows($result);
		
		
		if($check == 1){
			echo "success";
		}else{
			echo "gagal";
		}
			mysqli_close($con);

?>