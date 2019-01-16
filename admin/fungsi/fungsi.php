<?php
	session_start();
	include "koneksi.php";

	if(!empty($_GET['masuk'])){
		$email = $_POST['email'];
		$pin = $_POST['pin'];

		$query = mysqli_query($connect, "SELECT surel from admin where surel = '$email'");
		if(mysqli_num_rows($query) == 1){
			$query2 = mysqli_query($connect, "SELECT pin FROM admin where pin = '$pin'");
			if(mysqli_num_rows($query2) == 1){
				$_SESSION['admin'] = $email;
				header("location:../index.php?sukses=1");
			}else{
				header("location:../index.php?login=error&code=2");
			}
		}else{
			$query3 = mysqli_query($connect, "SELECT pin FROM admin where pin = '$pin'");
			if(mysqli_num_rows($query3) == 1){
				header("location:../index.php?login=error&code=1");
			}else{
				header("location:../index.php?login=error&code=3");
			}
		}
	}else if(!empty($_GET['hapus']) == "kandidat"){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
			$query = mysqli_query($connect, "DELETE FROM kandidat where id = '$id'");
			if($query){
				header("location:../index.php?kandidat=all&hapus=sukses&id=$id");
			}else{
				header("location:../index.php?kandidat=all&hapus=gagal&id=$id");
			}
		}else{
			header("location:../index.php");
		}
	}else if(!empty($_GET['tambah']) == "pengguna"){
		$email = $_POST['email'];
		$pin = $_POST['pin'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$status = 0;
		
		$query  = mysqli_query($connect, "INSERT INTO pengguna values('$email','$pin','$nama','$kelas','$status')");
		if($query){
			header("location:../index.php?pemilih=all&tambah=sukses&with-surel=$email");
		}else{
			header("location:../index.php?pemilih=all&tambah=gagal");
		}
	}else if(!empty($_GET['edit']) == "pengguna"){
		$email = $_GET['surel'];
		$pin = $_POST['pin'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		
		$query  = mysqli_query($connect, "UPDATE pengguna set pin = '$pin', nama = '$nama', kelas = '$kelas' where surel = '$email'");
		if($query){
			header("location:../index.php?pemilih=all&ubah=sukses&withsurel=$email");
		}else{
			header("location:../index.php?pemilih=all&ubah=gagal");
		}
	}else if(!empty($_GET['hapus']) == "pengguna"){
		$email = $_GET['surel'];
		
		$query = mysqli_query($connect, "DELETE FROM pengguna where surel = '$email'");
		if($query){
			header("location:../index.php?pemilih=all&hapus=sukses&withsurel=$email");
		}else{
			header("location:../index.php?pemilih=all&hapus=gagal");
		}
	}else if(!empty($_GET['AddKandidat'])){
		$nama		= htmlentities($_POST['nama']);
		$kelas		= $_POST['kelas'];
		$nourut		= $_POST['nourut'];
		$tahun		= $_POST['tahun'];
		$visi		= htmlentities($_POST['visi']);
		$misi		= htmlentities($_POST['misi']);

		$fileName = $_FILES['foto']['name'];
        $fileSize = $_FILES['foto']['size'];
        $fileError = $_FILES['foto']['error'];
		
		$cek_jml_data = mysqli_query($connect, "SELECT * FROM kandidat");
		$jml = mysqli_num_rows($cek_jml_data);
		if($jml == 3){
			header("location:../index.php?kandidat=all&tambah=gagal&data=penuh");
		}else{
			if($fileSize > 0 || $fileError == 0){
           		$query123 = mysqli_query($connect, "SELECT * FROM kandidat where no_urut = '$nourut'");
           		$jml_no_urut = mysqli_num_rows($query123);
           			if($jml_no_urut == 1){
           				header("location:../index.php?kandidat=all&tambah=gagal&data=nourut");
           			}else{
           				$move = move_uploaded_file($_FILES['foto']['tmp_name'], '../../user/img/'.$fileName);
           				$query = mysqli_query($connect, "INSERT INTO kandidat values('','$nama','$kelas','$visi','$misi','$fileName','','$tahun','$nourut','0')");
           				if($query){
           					header("location:../index.php?kandidat=all&tambah=sukses");
           				}
           			}
        	}else{
        		header("location:../index.php?kandidat=all&tambah=gagal&data=foto");
        	}
		}
	}else if(!empty($_GET['EditKandidat'])){
		$nama		= htmlentities($_POST['nama']);
		$kelas		= $_POST['kelas'];
		$nourut		= $_POST['nourut'];
		$tahun		= $_POST['tahun'];
		$visi		= htmlentities($_POST['visi']);
		$misi		= htmlentities($_POST['misi']);
		$id 		= $_GET['id'];

		$fileName = $_FILES['foto']['name'];
        $fileSize = $_FILES['foto']['size'];
        $fileError = $_FILES['foto']['error'];
		
			if($fileSize > 0 || $fileError == 0){
           			$move = move_uploaded_file($_FILES['foto']['tmp_name'], '../../user/img/'.$fileName);

           			$query = mysqli_query($connect, "UPDATE kandidat set nama='$nama',kelas='$kelas',visi='$visi',misi='$misi',foto='$fileName',tahun='$tahun',no_urut='$nourut' where id = '$id'");
           			if($query){
           				header("location:../index.php?kandidat=all&edited=sukses");
           			}
           		
        	}else{
        		$query = mysqli_query($connect, "UPDATE kandidat set nama='$nama',kelas='$kelas',visi='$visi',misi='$misi',tahun='$tahun',no_urut='$nourut' where id = '$id'");
           			if($query){
           				header("location:../index.php?kandidat=all&edited=sukses");
           			}	
        	}
	}
?>