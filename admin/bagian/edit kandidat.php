<?php
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM kandidat where id = '$id'");
while($data = mysqli_fetch_assoc($query)){
	?>
<form action="fungsi/fungsi.php?EditKandidat=1&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
<table id="inputKandidat">
	<tr>
		<td class="col-input col1" colspan="2">
			<img src="img/kandidate.png" class="foto-kandidat" width="120px" height="auto"/></br>
			<input type="file" name="foto" id="file" class="inputfile" accept="image/jpeg, image/png"/>
			<label for="file"><center><strong><i class="fa fa-upload" aria-hidden="true"></i>  Pilih Foto</strong></center></label>
		</td>
		<td>
			
		</td>
		<td class="col-input col2">
			<input type="text" name="nama" placeholder="Nama Kandidat" class="input-form" value="<?php echo $data['nama'];?>" required/></br>
			<select name="kelas" class="input-form" required>
				<?php
					echo '<option>Pilih Kelas</option>';
						$kelas = array(1=>"X-1","X-2","X-3","X-4","X-5","X-6","X-7","X-8","X-9","X-10","X-11","X-12","XI-RPL 1","XI-RPL 2","XI-RPL 3","XI-RPL 4","XI-RPL 5","XI-RPL 6","XI-RPL 7","XI-RPL 8","XI-RPL 9","XI-Multimedia 1","XI-Multimedia 2");
						foreach($kelas as $kls){
							if($kls == $data['kelas']){
								echo '<option value="'.$kls.'" selected>'.$kls.'</option>';
							}else{
								echo '<option value="'.$kls.'">'.$kls.'</option>';
							}
						}
				?>
			</select>
			<table>
				<tr>
					<td>
						<select name="nourut" class="input-form" required disabled>
						<option>Nomber Urut</option>
							<?php
								for($a = 1; $a <= 3; $a++){
									if($a == $data['no_urut']){
										echo '<option value="'.$a.'" selected>'.$a.'</option>';
									}else{
										echo '<option value="'.$a.'">'.$a.'</option>';
									}
								}
							?>
						</select>
					</td>
					<td>
						<select name="tahun" class="input-form" required>
						<option>Tahun Pemilu</option>
							<?php
								for($a = 2017; $a <= 2022; $a++){									
									if($a == $data['tahun']){
										echo '<option value="'.$a.'" selected>'.$a.'</option>';
									}else{
										echo '<option value="'.$a.'">'.$a.'</option>';
									}
								}
							?>
						</select>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td colspan="4">
			<textarea name="visi" class="input-visi" placeholder="Tulis Visi" required><?php echo $data['visi'];?></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<textarea name="misi" class="input-misi" placeholder="Tulis Misi" required><?php echo $data['misi'];?></textarea>
		</td>
	</tr>
	
	<tr>
		<td colspan="3">
			<input type="submit" name="add" value="UBAH DATA KANDIDAT" class="btn-add-data"/>
		</td>
	</tr>
</table>
</form>
	<?php
}
?>
