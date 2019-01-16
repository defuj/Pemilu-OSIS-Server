<?php
	include "../fungsi/koneksi.php";

if(!empty($_GET['kandidat'] = 1)){
	if(!empty($_GET['kelas'] = 'X')){
		if(!empty($_GET['memilih'] = "true")){
			
				$query = mysqli_query($connect,"SELECT * FROM pengguna where kelas = 'X'");
				$jumlah =  mysqli_num_rows($query);

				$query2 = mysqli_query($connect, "SELECT * FROM pemilu where kelas = 'X' and memilih = 1");
				$jumlah2 = mysqli_num_rows($query2);

				echo $jumlah2."/".$jumlah;
			
		}else{

		}
	}else if(!empty($_GET['kelas'] = 'XI')){
		if(!empty($_GET['memilih'] = "true")){
				$query = mysqli_query($connect,"SELECT * FROM pengguna where kelas = 'XI'");
				$jumlah =  mysqli_num_rows($query);

				$query2 = mysqli_query($connect, "SELECT * FROM pemilu where kelas = 'XI' and memilih = 1");
				$jumlah2 = mysqli_num_rows($query2);

				echo $jumlah2."/".$jumlah;
		}else{

		}
	}else if(!empty($_GET['kelas'] = 'XII')){
		if(!empty($_GET['memilih'] = "true")){
				$query = mysqli_query($connect,"SELECT * FROM pengguna where kelas = 'XII'");
				$jumlah =  mysqli_num_rows($query);

				$query2 = mysqli_query($connect, "SELECT * FROM pemilu where kelas = 'XII' and memilih = 1");
				$jumlah2 = mysqli_num_rows($query2);

				echo $jumlah2."/".$jumlah;
		}else{

		}
	}else if(!empty($_GET['kelas'] = 'GURU')){
		if(!empty($_GET['memilih'] = "true")){
				$query = mysqli_query($connect,"SELECT * FROM pengguna where kelas = 'GURU'");
				$jumlah =  mysqli_num_rows($query);

				$query2 = mysqli_query($connect, "SELECT * FROM pemilu where kelas = 'GURU' and memilih = 1");
				$jumlah2 = mysqli_num_rows($query2);

				echo $jumlah2."/".$jumlah;
		}else{

		}
	}
}else if(!empty($_GET['kandidat'] = 2)){
	if(!empty($_GET['kelas'] = 'X')){
		if(!empty($_GET['memilih'] = "true")){

		}else{

		}
	}else if(!empty($_GET['kelas'] = 'XI')){
		if(!empty($_GET['memilih'] = "true")){

		}else{

		}
	}else if(!empty($_GET['kelas'] = 'XII')){
		if(!empty($_GET['memilih'] = "true")){

		}else{

		}
	}else if(!empty($_GET['kelas'] = 'GURU')){
		if(!empty($_GET['memilih'] = "true")){

		}else{

		}
	}
}else if(!empty($_GET['kandidat'] = 3)){
	if(!empty($_GET['kelas'] = 'X')){
		if(!empty($_GET['memilih'] = "true")){

		}else{

		}
	}else if(!empty($_GET['kelas'] = 'XI')){
		if(!empty($_GET['memilih'] = "true")){

		}else{

		}
	}else if(!empty($_GET['kelas'] = 'XII')){
		if(!empty($_GET['memilih'] = "true")){

		}else{

		}
	}else if(!empty($_GET['kelas'] = 'GURU')){
		if(!empty($_GET['memilih'] = "true")){

		}else{

		}
	}
}
?>