<?php
	include "../../../fungsi/koneksi.php";
	$query = mysqli_query($connect,"SELECT * FROM pengguna where kelas = 'XII' and status = 1");
	$jumlah =  mysqli_num_rows($query);
	echo $jumlah;
?>