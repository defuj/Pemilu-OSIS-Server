<?php
include "../../../fungsi/koneksi.php";

$query = mysqli_query($connect,"SELECT * FROM pengguna where kelas = 'X'");
$jumlah =  mysqli_num_rows($query);

$query2 = mysqli_query($connect, "SELECT * FROM pemilu where kelas = 'X' and memilih = 3");
$jumlah2 = mysqli_num_rows($query2);

echo $jumlah2."/".$jumlah;
?>