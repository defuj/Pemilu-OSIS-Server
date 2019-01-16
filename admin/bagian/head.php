<meta charset="utf-8">
<?php
	if(!empty($_SESSION['admin'])){
		?>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="<?php echo gmdate('D, d M Y H:i:s', time()).' GMT';?>">
<meta http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s').' GMT';?>">

		<?php
	}
?>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
	<?php
		if(!empty($_SESSION['admin'])){
			echo "Admin Panel";
		}else{
			echo "Masuk Admin";
		}
	?>
</title>

<!-- stylesheets -->

<link rel="shortcut icon" href="img/icon.png" />
<link href="assets/fonts/font-roboto.css" rel="stylesheet">
<link href="assets/bootstrap/bootstrap4-alpha3.min.css" rel="stylesheet">
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/web-analytics/style.css" rel="stylesheet">

<!-- scripts -->
<script src="assets/jquery/jquery-3.1.0.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/bootstrap4-alpha3.min.js"></script>
<script src="assets/script/canvasjs.min.js"></script>
<!-- <script src="assets/web-analytics/real-time.js"></script> -->
<script src="assets/script/jquery-1.3.2.min.js"></script>

<script language="javascript">
	function loadNowPlaying(){
  		$("#kandidat1_isi1").load("bagian/kandidat1/X/X.php?kandidat=1&kelas=X&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat1_isi2").load("bagian/kandidat1/XI/XI.php?kandidat=1&kelas=XI&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat1_isi3").load("bagian/kandidat1/XII/XII.php?kandidat=1&kelas=XII&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat1_isi4").load("bagian/kandidat1/GURU/GURU.php?kandidat=1&kelas=GURU&memilih=true&nocache=<?php echo time();?>");

  		$("#kandidat2_isi1").load("bagian/kandidat2/X/X.php?kandidat=2&kelas=X&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat2_isi2").load("bagian/kandidat2/XI/XI.php?kandidat=2&kelas=XI&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat2_isi3").load("bagian/kandidat2/XII/XII.php?kandidat=2&kelas=XII&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat2_isi4").load("bagian/kandidat2/GURU/GURU.php?kandidat=2&kelas=GURU&memilih=true&nocache=<?php echo time();?>");

  		$("#kandidat3_isi1").load("bagian/kandidat3/X/X.php?kandidat=3&kelas=X&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat3_isi2").load("bagian/kandidat3/XI/XI.php?kandidat=3&kelas=XI&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat3_isi3").load("bagian/kandidat3/XII/XII.php?kandidat=3&kelas=XII&memilih=true&nocache=<?php echo time();?>");
  		$("#kandidat3_isi4").load("bagian/kandidat3/GURU/GURU.php?kandidat=3&kelas=GURU&memilih=true&nocache=<?php echo time();?>");

  		$("#kelasX_sudah").load("bagian/kandidat1/X/sudah.php?nocache=<?php echo time();?>");
  		$("#kelasXI_sudah").load("bagian/kandidat1/XI/sudah.php?nocache=<?php echo time();?>");
  		$("#kelasXII_sudah").load("bagian/kandidat1/XII/sudah.php?nocache=<?php echo time();?>");
  		$("#kelasGURU_sudah").load("bagian/kandidat1/GURU/sudah.php?nocache=<?php echo time();?>");

  		$("#kelasX_belum").load("bagian/kandidat1/X/belum.php?nocache=<?php echo time();?>");
  		$("#kelasXI_belum").load("bagian/kandidat1/XI/belum.php?nocache=<?php echo time();?>");
  		$("#kelasXII_belum").load("bagian/kandidat1/XII/belum.php?nocache=<?php echo time();?>");
  		$("#kelasGURU_belum").load("bagian/kandidat1/GURU/belum.php?nocache=<?php echo time();?>");
	}
setInterval(function(){loadNowPlaying()}, 100);
</script>

<script type="text/javascript">
	var inputs = document.querySelectorAll('.inputfile');
	Array.prototype.forEach.call(inputs, function(input){
		var label = input.nextElementSibling,
		labelVal = label.innerHTML;
		
		input.addEventListener('change', function(e){
			var fileName = '';
			if(this.files && this.files.length > 1){
				fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
			}else{
				fileName = e.target.value.split('\\').pop();
			}
			
			if(fileName){
				label.querySelector('span').innerHTML = fileName;
			}else{
				label.innerHTML = labelVal;
			}
		});
	});
</script>

<script type="text/javascript">
	$("input").change(function(e){
		for(var i = 0; i < e.originalEvent.srcElement.files.length; i++){
			var file = e.originalEvent.srcElement.files[i];
			
			var img = document.createElement("img");
			var reader = new FileReader();
			reader.onloadend = function(){
				img.src = reader.result;
			}
			reader.readAsDataURL(file);
			$("input").after(img);
		}
	});
</script>

<?php
	//include "bagian/data_pemilih.php";
?>

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
	.login{
		-webkit-animation-name: bounceInLeft;
        animation-name: bounceInLeft;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
	}
	.error-data{
		width: 360px;
		padding: 15px;
		border: 1px solid #FF0000;
		margin-top: 10px;
		background: #fff;
		border-radius: 3px;
	}
	.error-data text,.error-data i{
		color: #FF0000;
	}
	.notiv{
			margin-top: 10%;
			color: #fff;
			background: #34495e;
			border: none;
			width: 360px;
			font-weight: 600;
			padding:20px;
			border-top-left-radius:3px;
			border-top-right-radius:3px; 

		}
		.kotak{
			width: 360px;
			height: auto;
			padding: 10px;
			border: 1px solid #34495e;
			border-bottom-left-radius:3px;
			border-bottom-right-radius:3px;
			background: #fff;
		}
		.user{
			width: 320px;
			margin-bottom: 6px;
			border: none;
			background: #fff;
			border-bottom: solid 1px #34495e;
			padding: 6px;
			font-size: 14px;
		}
		.btn-masuk{
			padding: 8px;
			border: none;
			border-radius: 3px;
			background: #34495e;
			color: #fff;
			font-size: 14px;
			cursor: pointer;
			transition:.3s;
		}
		.btn-masuk:hover{
			transition:.3s;
			background: #4682B4;
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
		.kotak2{
			width: 400px;
			padding: 10px;
			border: none;
			border-bottom-left-radius:3px;
			border-bottom-right-radius:3px;
			background: #fff;
			margin-left: 20px;
			float: left;
		}
		.notiv2{
			margin-top: 10px;
			color: #fff;
			background: #00A0E3;
			border: none;
			width: 420px;
			font-weight: 600;
			padding-top: 1px;
			padding-bottom: 1px;
			border-top-left-radius:3px;
			border-top-right-radius:3px; 
			margin-left: 20px;
			text-align: center;
		}
		.masuk{
			width: 190px;
			margin-bottom: 10px;
		}
		.alamat{
			width: 390px;
			height: 50px;
			resize :none;
			font-family: calibri;
		}
		.kanan{
			float: right;
			padding-top: 10px;
		}
		.kiri{
			float: left;
			-webkit-animation-name: bounceInLeft;
        animation-name: bounceInLeft;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
		}


		.notiv123{
			width: 880px;
			color: #fff;
			background: #00A0E3;
			border: none;
			font-weight: 600;
			padding-top: 1px;
			padding-bottom: 1px;
			border-top-left-radius:3px;
			border-top-right-radius:3px; 
			margin-left: 10px;
			margin-right: 16px;
		}
		.kotak-isi{
			width: 860px;
			padding: 10px;
			border: none;
			border-bottom-left-radius:3px;
			border-bottom-right-radius:3px;
			background: #fff;
			margin-left: 10px;
			float: right;
			margin-right: 16px;
			overflow: auto;
			height: 550px;
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
		@-webkit-keyframes bounceInLeft {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0);
  }

  to {
    -webkit-transform: none;
    transform: none;
  }
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
	background: #e5d8B0;
	border:none;
}
.row1.kandidat2{
	background: #ffb367;
	border:none;
}
.row1.kandidat3{
	background: #f98461;
	border:none;
}

<!-- Style untuk tabel input kandidat -->
#file{
	display : none;
}
.inputfile{
	width : 0.1px;
	height : 0.1px;
	opacity : 0;
	overflow : hidden;
	position : absolute;
	z-index : -1;
}

.inputfile + label{
	font-size : .70em;
	font-weight : 700;
	padding-top : 5px;
	padding-bottom : 5px;
	color : white;
	background-color : #34495e;
	display : inline-block;
	cursor : pointer;
	width : 120px;
}

.inputfile:focus + label, 
.inputfile + label:hover{
	background-color : red;
}

.inputfile:focus + label{
	outline : 1px dotted #000;
	outline : -webkit-focus-ring-color auto 5px ; 
}

#inputKandidat{
	width : 100%;
}

td.col-input{
	vertical-align : top;
	text-align : left;
}

.input-form, select .input-form{
	width : 100%;
	height : 40px;
	padding : 6px;
	margin-bottom : 10px;
}

td.col1{
	width : 20%;
}
td.col2{
	width : 80%;
	padding-left : 10px;
}
.input-visi, .input-misi{
	width : 100%;
	height : 80px;
	padding : 10px;
	resize :none;
	font-family: calibri;
	border-radius : 3px;
	border : 1px solid #34495e;
}
.btn-add-data{
	font-family: calibri;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);
	background: #039BE5;
	color: #fff;
	border-radius: 2px;
	border:none;
	padding: 8px 16px;
	outline: none;
	cursor: pointer;
	font-size: 16px;
	text-overflow: ellipsis;
	width: 100%;
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

.judul-import{
	border-bottom : 1px solid #ccc;
}
.pilih-hapus-data{
	height : 50px;
	vertical-align : middle;
	font-size : 15px;
}

[type="checkbox"]:not(:checked),
[type="checkbox"]:checked{
	position : absolute;
	left : -9999px;
}

[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label{
	position : relative;
	padding-left : 25px;
	cursor : pointer;
}

[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
	content :'';
	position : absolute;
	left : 0;
	top : 2px;
	width : 17px;
	height : 17px;
	border : 1px solid #aaa;
	background : #f8f8f8;
	border-radius : 3px;
	box-shadow:inset 0 1px 3px rgba(0,0,0,.3);
}

[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
	content: '✔';
	position: absolute;
	top: 3px; left: 4px;
	font-size: 18px;
	line-height: 0.8;
	color: #09ad7e;
	transition: all .2s;
}
[type="checkbox"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
[type="checkbox"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
/* disabled checkbox */
[type="checkbox"]:disabled:not(:checked) + label:before,
[type="checkbox"]:disabled:checked + label:before {
  box-shadow: none;
  border-color: #bbb;
  background-color: #ddd;
}
[type="checkbox"]:disabled:checked + label:after {
  color: #999;
}
[type="checkbox"]:disabled + label {
  color: #aaa;
}
/* accessibility */
[type="checkbox"]:checked:focus + label:before,
[type="checkbox"]:not(:checked):focus + label:before {
  border: 1px dotted blue;
}

/* hover style just for information */
label:hover:before {
  border: 1px solid #4778d9!important;
}

.inputfileCSV{
	display : none;
}
.col-inputCSV{
	width : 50%;
}

.inputfileCSV{
	width : 0.1px;
	height : 0.1px;
	opacity : 0;
	overflow : hidden;
	position : absolute;
	z-index : -1;
}

.inputfileCSV + label{
	font-size : 1.20em;
	font-weight : 700;
	padding-top : 5px;
	padding-bottom : 5px;
	color : white;
	background-color : #34495e;
	display : inline-block;
	cursor : pointer;
	width : 99%;
}

.inputfileCSV:focus + label, 
.inputfile + label:hover{
	background-color : red;
}

.inputfileCSV:focus + label{
	outline : 1px dotted #000;
	outline : -webkit-focus-ring-color auto 5px ; 
}

.btn-import{
	display : none;
}
.btn-import + label{
	font-size : 1.20em;
	font-weight : 700;
	padding-top : 5px;
	padding-bottom : 5px;
	color : white;
	background-color : #34495e;
	display : inline-block;
	cursor : pointer;
	width : 99%;
}

.btn-import:focus + label, 
.inputfile + label:hover{
	background-color : red;
}

.btn-import:focus + label{
	outline : 1px dotted #000;
	outline : -webkit-focus-ring-color auto 5px ; 
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
</style>