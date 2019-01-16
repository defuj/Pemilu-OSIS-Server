<?php
	session_start();
	include "fungsi/koneksi.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<?php
			include "bagian/head.php";
		?>
	</head>

	<body>
		<?php
			include "bagian/atas.php";

			if(!empty($_SESSION['admin'])){
				include "bagian/diagram.php";
			}else{
				include "bagian/login.php";
			}

			include "bagian/bawah.php";
		?>
	</body>
</html>