<?php
include "../../fungsi/koneksi.php";

$query = mysqli_query($connect,"SELECT * FROM pemilu where memilih = 2");
$jml = mysqli_num_rows($query);
echo $jml;
?>