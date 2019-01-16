<meta charset="utf-8">
<meta Http-Equiv="Pragma" Content="no-cache">
<meta Http-Equiv="Expires" Content="0">
<meta Http-Equiv="Pragma-directive: no-cache">
<meta Http-Equiv="Cache-directive: no-cache">
<meta http-equiv="refresh" content="30">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title></title>

<!-- stylesheets -->
<link href="../../assets/fonts/font-roboto.css" rel="stylesheet">
<link href="../../assets/bootstrap/bootstrap4-alpha3.min.css" rel="stylesheet">
<link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="../../assets/web-analytics/style.css" rel="stylesheet">

<!-- scripts -->
<script src="../../assets/jquery/jquery-3.1.0.min.js"></script>
<script src="../../assets/tether/tether.min.js"></script>
<script src="../../assets/bootstrap/bootstrap4-alpha3.min.js"></script>
<script src="../../assets/script/canvasjs.min.js"></script>
<script src="../../assets/script/jquery-1.3.2.min.js"></script>

<script language="javascript">
	function loadNowPlaying(){
  		$("#kandidat1_isi1").load("../../bagian/kandidat1/X/X.php?kandidat=1&kelas=X&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat1_isi2").load("../../bagian/kandidat1/XI/XI.php?kandidat=1&kelas=XI&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat1_isi3").load("../../bagian/kandidat1/XII/XII.php?kandidat=1&kelas=XII&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat1_isi4").load("../../bagian/kandidat1/GURU/GURU.php?kandidat=1&kelas=GURU&memilih=true&nocache=<?php echo time();?>");

  		$("#kandidat2_isi1").load("../../bagian/kandidat2/X/X.php?kandidat=2&kelas=X&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat2_isi2").load("../../bagian/kandidat2/XI/XI.php?kandidat=2&kelas=XI&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat2_isi3").load("../../bagian/kandidat2/XII/XII.php?kandidat=2&kelas=XII&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat2_isi4").load("../../bagian/kandidat2/GURU/GURU.php?kandidat=2&kelas=GURU&memilih=true&nocache=<?php echo time();?>");

  		$("#kandidat3_isi1").load("../../bagian/kandidat3/X/X.php?kandidat=3&kelas=X&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat3_isi2").load("../../bagian/kandidat3/XI/XI.php?kandidat=3&kelas=XI&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat3_isi3").load("../../bagian/kandidat3/XII/XII.php?kandidat=3&kelas=XII&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat3_isi4").load("../../bagian/kandidat3/GURU/GURU.php?kandidat=3&kelas=GURU&memilih=true&nocache=<?php echo time();?>");

  		$("#kelasX_sudah").load("../../bagian/kandidat1/X/sudah.php?nocache=<?php echo time();?>");
  		$("#kelasXI_sudah").load("../../bagian/kandidat1/XI/sudah.php?nocache=<?php echo time();?>");
  		$("#kelasXII_sudah").load("../../bagian/kandidat1/XII/sudah.php?nocache=<?php echo time();?>");
  		$("#kelasGURU_sudah").load("../../bagian/kandidat1/GURU/sudah.php?nocache=<?php echo time();?>");

  		$("#kelasX_belum").load("../../bagian/kandidat1/X/belum.php?nocache=<?php echo time();?>");
  		$("#kelasXI_belum").load("../../bagian/kandidat1/XI/belum.php?nocache=<?php echo time();?>");
  		$("#kelasXII_belum").load("../../bagian/kandidat1/XII/belum.php?nocache=<?php echo time();?>");
  		$("#kelasGURU_belum").load("../../bagian/kandidat1/GURU/belum.php?nocache=<?php echo time();?>");
	}
setInterval(function(){loadNowPlaying()}, 100);
</script>

<style>
	#users-device-doughnut-chart{
		display: none;
	}
	.card.card-block.dua{
		display: none;
	}
	.card.card-block.enam{
		display: none;
	}
	#sembunyi1, #sembunyi2{
		display: none;
	}
	.card-block.statistik{
		display: none;
	}
	
	<?php
		if(!empty($_GET['edit']) || !empty($_GET['kandidat']) || !empty($_GET['pemilih'])){
			?>
	.statistik{
		display : none;
		-webkit-animation-name: bounceInLeft;
        animation-name: bounceInLeft;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
	}
	.card.card-block.tiga{
		display : none;
	}
	.card.card-block.empat{
		-webkit-animation-name: bounceInLeft;
        animation-name: bounceInLeft;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
	}
			<?php
		}else{
			?>
	.statistik{
		-webkit-animation-name: bounceInLeft;
        animation-name: bounceInLeft;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
	}
	.card.card-block.empat{
		display : none;
	}
	.card.card-block.lima{
		display : none;
	}
			<?php
		}
	?>

	<!-- Style untuk login -->
	
	body{
			font-family: calibri;
	}


		.semua{
			top: 0px;
			left: 0px;
			right: 0px;
			bottom: 0px;
			position: absolute;
			background: #ccc;
			width: 100%;
			height: 100%;
		}
		td{
			width: 300px;
			font-size: 13px;
			font-family: calibri;
		}
		.satu{
			background: #e6e6fa;
		}
		.dua{
			background: #afeeee;
		}
		.kotak-isi table tr td{
			padding: 10px;
		}
		.fotos{
			width: 120px;
		}

/* Style untuk tabel */
table .tabel{
	width: 100%;
	height: 100%;

	font-size: 12px;
}

.tabel tr{
	border-bottom: 1px solid #ccc;
}

.tabel tr td{
	padding: 13px;
	font-size: 15px;
}

.tengah{
	text-align: center;
	vertical-align: middle;
}

.row1.kandidat1{
	background: #009734;
	border:none;
	color: #fff;
}
.row1.kandidat2{
	background: #009041;
	border:none;
	color: #fff;
}
.row1.kandidat3{
	background: #006334;
	border:none;
	color: #fff;
}

.col-judul{
	padding : 10px;
	background : #34495e;
	color : #fff;
	font-size : 15px;
}
.col-judul td{
	vertical-align : middle;
	padding : 6px;
}
.no-urut{
	font-size : 20px;
	text-align : center;
	width : 60px;
}
.col-isi-kandidat{
	border-bottom: 1px solid #ccc;
}
.list-foto-kandidat{
	width : 60px;
	text-align : center;
}
.no-urut1{
	text-align :center;
	width : 60px;
}
.col-kelas{
	width : 80px;
	text-align : center;
}
.col-opsi{
	width : 100px;
	text-align : center;
}
.col-opsi i{
	font-size : 25px;
	cursor : pointer;
	margin: 5px;
}
.col-opsi i:hover{
	color : #F00;
}
.tbl-kandidat{
	width : 100%;
}

.keluar-akun{
	margin-left : 20px;
}
span.lead{
	font-size : 15px;
}
span.lead:hover{
	font-size : 15px;
	color : #d9695f;
}

.nama, .col-judul .nama{
	padding-left : 20px;
}

.kotak-pengguna{
	width : 100%;
	height : 300px;
	overflow : auto;
	border : 1px solid #393f63;
}
::-webkit-scrollbar{
	width : 10px;
	height : 10px;
}
::-webkit-scrollbar-track{
	border-radius : 5px;
}
::-webkit-scrollbar-thumb{
	background : #393f63;
	border-radius : 5px;
}




#users-medium-pie-chart{
	display: none;
}

.statistik iframe{
	border:none;
	height : 300px;
	overflow-x:hidden;
	overflow-y:hidden;
}

.sukses-tambah{
	vertical-align: middle;
	text-align: center;
	border : 2px solid #228B22;
	border-radius: 3px;
	margin-left: 20px;
	padding-top: 8px;
	padding-bottom: 7px;
	padding-left: 30px;
	padding-right: 30px;
	color: #228B22;
}
.gagal-tambah{
	vertical-align: middle;
	text-align: center;
	border : 2px solid #FFA500;
	border-radius: 3px;
	margin-left: 20px;
	padding-top: 8px;
	padding-bottom: 7px;
	padding-left: 30px;
	padding-right: 30px;
	color: #FFA500;
}

.page-content-toggle2{
	margin-left: -40px;
	margin-right: -40px;
	margin-top:-98px;
}

.m-b-2{
	margin-bottom: -2.5rem!important;
}
</style>