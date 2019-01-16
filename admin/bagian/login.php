<center>
<div class="login">
	<div class="notiv">
		<h6>MASUK ADMIN</h6>
	</div>

	<div class="kotak">
		<form action="fungsi/fungsi.php?masuk=1" method="post">
			<input type="email" name="email" placeholder="E-MAIL" class="user" required /></br>
			<input type="password" name="pin" placeholder="PIN" class="user" required /></br>
			<input type="submit" value="MASUK" name="masuk" class="btn-masuk">
		</form>
	</div>
	<?php
		if(!empty($_GET['login']) == "error"){
			echo "<div class='error-data'>";
				if(!empty($_GET['code'])){
					$code = $_GET['code'];
					if($code == 1){
						echo "<text><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>  Email yang anda gunakan salah.</text>";
					}else if($code == 2){
						echo "<text><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>  PIN yang anda gunakan salah.</text>";
					}else if($code == 3){
						echo "<text><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>  Email & PIN yang anda gunakan salah.</text>";
					}	
				}
			echo "</div>";
		}
	?>
</div>
</center>