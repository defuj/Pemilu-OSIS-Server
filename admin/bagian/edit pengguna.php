<?php
$surel = $_GET['surel'];
$query = mysqli_query($connect, "SELECT * FROM pengguna where surel = '$surel'");
while($data = mysqli_fetch_assoc($query)){
	?>
<form action="fungsi/fungsi.php?edit=pengguna&surel=<?php echo $surel;?>" method="post" enctype="multipart/form-data">
<table id="inputKandidat">
	<tr>
		<td class="col-input">
			<input type="text" name="nama" placeholder="Nama" class="input-form" value="<?php echo $data['nama'];?>" required/></br>
			<input type="email" name="email" placeholder="E-Mail" class="input-form" value="<?php echo $data['surel'];?>" disabled="disabled" required/></br>
			<table>
				<tr>
					<td>
						<select name="kelas" class="input-form" required>
							<?php
								echo '<option>Pilih Kelas</option>';
								$kelas = array(1=>"X","XI","XII","GURU");
								foreach($kelas as $kls){
									if($kls == $data['kelas']){
										echo '<option value="'.$kls.'" selected>'.$kls.'</option>';
									}else{
										echo '<option value="'.$kls.'">'.$kls.'</option>';
									}
								}
							?>
						</select>
					</td>
					<td>
						<input type="number" name="pin" placeholder="PIN" class="input-form" oninput="maxLengthCheck(this)" maxlength="4" value="<?php echo $data['pin'];?>" required/></br>
						<script>
							function maxLengthCheck(object){
								if(object.value.length > object.maxlength){
									object.value = object.value.slice(0, object.maxlength);
								}
							}
						</script>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td colspan="1">
			<input type="submit" name="add" value="UBAH DATA PENGGUNA" class="btn-add-data"/>
		</td>
	</tr>
</table>
</form>
	<?php
}
?>
